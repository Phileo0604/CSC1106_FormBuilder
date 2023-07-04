<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
class ResetController extends Controller
{
    public function index()
    {
        helper('form');
        return view('auth/reset');
    } 
  
    public function reset($email = null)
    {
        helper('form');

        // Checks whether the form is submitted.
        if (! $this->request->is('post')) {
            // The form is not submitted, so returns the form.
            return view('auth/reset');
        }else{
            $post = $this->request->getPost(['name','email','password','security_question','security_answer']);
        }

        $model = model(UserModel::class); // Create an instance of the UserModel
        
        // Get the user from the database
        $user = $model->getEmail($post['email']);

         // Check if the user exists and the security question and answer are correct
         if ($user && $post['security_question'] == $user['security_question'] && $post['security_answer'] == $user['security_answer']) {
            // The user exists, so update the password
            session()->set('id', $user['id']);
        // Hash the password
        $hashedPassword = password_hash($post['password'], PASSWORD_DEFAULT);

            $data = [
                'password' => $hashedPassword,
            ];
    
            $model->update($user, $data);

            return view('auth/reset_success');
        } else {
            // Invalid login credentials, display an error message
            $data = [
                'title' => 'Login',
                'error' => 'Invalid Security Question or Answer'
            ];
            return view('auth/reset', $data);
        }

    }
    
}