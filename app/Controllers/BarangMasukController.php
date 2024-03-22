<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class BarangMasukController extends BaseController
{
    public function barangMasuk()
    {$userModel = new UserModel();
        $data = $userModel->find(session('user_id'));
       
        return view('barang_masuk',$data);
        
    }

}
