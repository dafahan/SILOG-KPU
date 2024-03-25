<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class ProfileController extends BaseController
{
    public function profile()
    {   $userModel = new UserModel();
        $data = $userModel->find(session('user_id'));
       
        return view('profile',$data);
    }
    public function admin()
    {   $userModel = new UserModel();
        $data = $userModel->find(session('user_id'));
        $data['title'] = 'profile';
        return view('admin/profile',$data);
    }
    
    public function download($filename)
    {
        
        $path = WRITEPATH  .'/uploads/profiles/'.$filename;

        if (file_exists($path)) {
        
             
            $redirectUrl = base_url('profile');

        
            echo '<script>';
            echo 'window.location.href = "' . $redirectUrl . '";';
            echo '</script>';
            
            return $this->response->download($path, null);
        } else {
            return $this->response->setStatusCode(404)->setBody('File not found');
        }
    }

    public function changephoto()
    {
        $photoFile = $this->request->getFile('foto');
        if ($photoFile->isValid() && !$photoFile->hasMoved()) {
            $destination = FCPATH . 'assets/images/profiles/';
            $newName = $photoFile->getRandomName();
            if ($photoFile->move($destination, $newName)) {
                $userModel = new UserModel();
                $data = ['foto' => $newName];
                $userModel->update(session('user_id'), $data);
                return redirect()->to(base_url('profile'));
            } else {
                return redirect()->back()->with('error', 'Failed to upload photo');
            }
        } else {
            return redirect()->back()->with('error', 'No photo uploaded or an error occurred');
        }
    }

    public function changepassword()
    {
            $newPassword = $this->request->getPost('password');
            $newBio = $this->request->getPost('biografi');

            $userId = session('user_id'); 
        
            $userModel = new UserModel();
            $data = ["biografi"=>$newBio];
            if($newPassword!='')$data["password"]=$newPassword;
            $userModel->update($userId, $data);
            
      
    }


}

