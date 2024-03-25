<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
use App\Models\KebutuhanModel;

class InfoKebutuhanController extends BaseController
{
    public function infoKebutuhan()
    {
        
                $userModel = new UserModel();
                $kebutuhanModel = new KebutuhanModel();
                $data = $userModel->find(session('user_id'));
                $kebutuhan = $kebutuhanModel->findAll();
                $data['kebutuhan'] = $kebutuhan;
                return view('info_kebutuhan',$data);
       
    }

    public function admin()
    {
        
                $userModel = new UserModel();
                $kebutuhanModel = new KebutuhanModel();
                $data = $userModel->find(session('user_id'));
                $kebutuhan = $kebutuhanModel->findAll();
                $data['kebutuhan'] = $kebutuhan;
                $data['title'] = 'kebutuhan';
                return view('admin/info_kebutuhan',$data);
       
    }

    public function store()
    {  
       $kebutuhanModel = new KebutuhanModel();
       $data = $this->request->getPost();
       $data['kuantitas'] = number_format($data['kuantitas'], 0, ',', '.');
       $kebutuhanModel->save($data);
       return redirect()->back(); 
    }
    public function delete($id){
       $kebutuhanModel = new KebutuhanModel();
        $kebutuhanModel->delete($id);
        return redirect()->back();
    }
}
