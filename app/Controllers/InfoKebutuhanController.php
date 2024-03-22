<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;
class InfoKebutuhanController extends BaseController
{
    public function infoKebutuhan()
    {
        
        $userModel = new UserModel();
                $data = $userModel->find(session('user_id'));
               
                return view('info_kebutuhan',$data);
       
    }
}
