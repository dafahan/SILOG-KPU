<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class BarangMasukController extends BaseController
{
    public function barangMasuk()
    {   $userModel = new UserModel();
        $barangModel = new BarangModel();
        $data = $userModel->find(session('user_id'));
        $data['barang_masuk'] = $barangModel->findAll();
        return view('barang_masuk',$data);
        
    }

    public function admin()
    {   $userModel = new UserModel();
        $barangModel = new BarangModel();
        $data = $userModel->find(session('user_id'));
        $data['barang_masuk'] = $barangModel->findAll();
        $data['title']='masuk';
        return view('admin/barang_masuk',$data);
        
    }

}
