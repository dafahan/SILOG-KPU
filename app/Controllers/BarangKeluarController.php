<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class BarangKeluarController extends BaseController
{
    public function barangKeluar()
    {$userModel = new UserModel();
        $barangModel = new BarangModel();
        $data = $userModel->find(session('user_id'));
        $data['barang_masuk'
        ]=$barangModel->findAll();
        return view('barang_keluar',$data);
    }
    public function admin()
    {$userModel = new UserModel();
        $barangModel = new BarangModel();
        $data = $userModel->find(session('user_id'));
        $data['barang_masuk'
        ]=$barangModel->findAll();
        $data['title'] = 'keluar';
        return view('admin/barang_keluar',$data);
    }
}
