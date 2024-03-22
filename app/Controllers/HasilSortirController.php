<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class HasilSortirController extends BaseController
{
    public function hasilSortir()
    {$userModel = new UserModel();
        $data = $userModel->find(session('user_id'));
       
        return view('hasil_sortir',$data);
    }
}
