<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class BarangKeluarController extends BaseController
{
    public function barangKeluar()
    {$userModel = new UserModel();
        $data = $userModel->find(session('user_id'));
       
        return view('barang_keluar',$data);
    }
}
