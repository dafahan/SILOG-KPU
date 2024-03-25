<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class HasilSortirController extends BaseController
{
    public function hasilSortir()
    { $userModel = new UserModel();
        $barangModel = new BarangModel();
        $data = $userModel->find(session('user_id'));
        $data['barang_masuk'] = $barangModel->findAll();
       
        return view('hasil_sortir',$data);
    }
    public function admin()
    { $userModel = new UserModel();
        $barangModel = new BarangModel();
        $data = $userModel->find(session('user_id'));
        $data['barang_masuk'] = $barangModel->findAll();
        $data['title'] = 'sortir';
        return view('admin/hasil_sortir',$data);
    }
}
