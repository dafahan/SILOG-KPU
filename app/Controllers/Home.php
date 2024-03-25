<?php


namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {   
       
        $rememberToken = get_cookie('remember_token');
       
        if(session('level')){
            return redirect()->to(base_url('admin/dashboard'));

        }else{
            return redirect()->to(base_url('dashboard'));

        }
        if ($rememberToken) {
            $userModel = new UserModel();
            $user = $userModel->where('remember_token', $rememberToken)->first();
            
            if ($user) {
                $userData = [
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                ];
                session()->set($userData);
                
                return redirect()->to(base_url('dashboard'));
            }
        }


        return view('login');
    }

    public function login()
{
    
    $userModel = new UserModel();

    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');
    $rememberMe = $this->request->getPost('remember-me');

    $user = $userModel->where('username', $username)->first();

    if ($user && ($password == $user['password'])) {
       
        $userData = [
            'user_id' => $user['id'],
            'username' => $user['username'],
            'level' => $user['level'],
        ];
        session()->set($userData);
        
        if ($rememberMe) {
            $token = bin2hex(random_bytes(50));
            $userModel->update($user['id'], ['remember_token' => $token]); 
            set_cookie('remember_token', $token, 86400 * 30); 
        }
        if($userData['level']){return redirect()->to(base_url('admin/dashboard'))->withCookies();}
        return redirect()->to(base_url('/'))->withCookies();
    } else {
        return redirect()->back()->with('error', 'Invalid email or password');
    }
}





}
