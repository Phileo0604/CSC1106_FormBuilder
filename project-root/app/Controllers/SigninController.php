<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class SigninController extends Controller
{
    public function index()
    {
        helper('form');
        return view('/signin');
    } 
  
    public function loginAuth()
    {
        $session = session();
        $userModel = model(UserModel::class);
        $email = $this->request->getPost('email'); //getVar
        $password = $this->request->getPost('password');
        
        $data = $userModel->where('email', $email)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                return view('auth/login_success');
            
            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return view('auth/signin');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return view('auth/signin');
        }
    }
}