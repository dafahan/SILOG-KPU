<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class TotalBarangController extends BaseController
{
    public function totalBarang()
    {$userModel = new UserModel();
        $data = $userModel->find(session('user_id'));
       
        return view('total_barang',$data);
      
    }
}
