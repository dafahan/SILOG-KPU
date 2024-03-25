<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class TotalBarangController extends BaseController
{
    public function totalBarang()
    {$userModel = new UserModel();
        $data = $userModel->find(session('user_id'));
        $barangModel = new BarangModel();
        $data['barang_masuk'] = $barangModel->findAll();
        return view('total_barang',$data);
      
    }
    public function admin()
    {$userModel = new UserModel();
        $data = $userModel->find(session('user_id'));
        $barangModel = new BarangModel();
        $data['barang_masuk'] = $barangModel->findAll();
        $data['title'] = 'total';
        return view('total_barang',$data);
      
    }
}
