<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class DashboardController extends BaseController
{
    public function dashboard()
    {$userModel = new UserModel();
        $data = $userModel->find(session('user_id'));
       
        return view('dashboard',$data);
      
    }
    public function admin()

    {$userModel = new UserModel();
        $data = $userModel->find(session('user_id'));
        $data['title'] = 'admin';
         return view('admin/dashboard',$data);
      
    }
}
