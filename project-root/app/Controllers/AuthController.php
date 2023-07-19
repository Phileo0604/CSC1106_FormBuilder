<?php

namespace App\Controllers;
use App\Libraries\Hash;
use App\Models\UserModel;


class AuthController extends BaseController
{


    public function __construct() {
        helper((['url', 'form', 'token']));

    }
    public function signin()
    {
        return view('Auth/signin');
    }

    public function signup()
    {
        return view('Auth/signup');
    }


    public function save() {

        // set up validation variable by using validate function from codeIgniter
       $validation = $this->validate([
        'name' => [
            'rules' => 'required',
            'errors' => [
                'required' => 'Your full name is required'
            ]
        ],
        'email' => [
            'rules' => 'required|valid_email|is_unique[users.email]',
            'errors' => [
                'required' => 'Email is required',
                'valid_email' => 'You must enter a valid email',
                'is_unique' => 'Email already taken'
            ]
        ],
        'password' => [
            'rules' => 'required|min_length[5]|max_length[15]',
            'errors' => [
                'required' => 'Password is required',
                'min_length' => 'Password must have at least 5 characters in length',
                'max_length' => 'Password must not have more than 15 characters in length'
            ]
        ],
        'confirmpassword' => [
            'rules' => 'required|min_length[5]|max_length[15]|matches[password]',
            'errors' => [
                'required' => 'Confirm password is required',
                'min_length' => 'Confirm password must have at least 5 characters in length',
                'max_length' => 'Confirm password must not have more than 15 characters in length',
                'matches' => 'Passwords do not match'
            ]
        ]
    ]);
    
       if(!$validation) {
            return view('Auth/signup', ['validation'=>$this->validator]); // If validation fails, redirect to sign up page

       } else {
            // Save user credentials into db
            $name = $this->request->getPost('name'); // get name from post request
            $email = $this->request->getPost('email'); // get email from post request
            $password = $this->request->getPost('password'); // get password from post request


            $values = [
                'name'=>$name,
                'email'=>$email,
                'password'=>Hash::make($password),
                'uuid'=>generateToken()
                
            ]; // create an array in order to insert into userModel

            $userModel = new UserModel(); // initialise userModel object for insertion of data
            $query = $userModel->insert($values); // insert user credentials into database via userModel
            if(!$query) {
                return redirect()->back()->with('fail', 'Something went wrong'); // redirect same page if query fails
            } else {
                $last_id = $userModel->insertID(); // Get id of recent signup user
                session()->set('loggedUser', $last_id); // Create session according to it
                return redirect()->to('/dashboard')->with('userId', $last_id);

            }

       }
    }

    // once signin, check() is to validate and allows access to dashboard
    function check() {
        // create validation boolean
        $validation = $this->validate([
            'email'=>[
                'rules'=>'required|valid_email|is_not_unique[users.email]',
                'errors'=>[
                    'required'=>'Email is required',
                    'valid_email'=>'Enter a valid email address',
                    'is_not_unique'=>'This email is not registered',
                ]
            ],
                'password'=>[
                    'rules'=>'required|min_length[5]|max_length[12]',
                    'errors'=>[
                        'required'=>'Password is required',
                        'min_length'=>'Password must have at least 5 characters in length',
                        'max_length'=>'Password must not have more than 12 characters in length'
                    ]
                ]
                ]);

            if(!$validation) {
                return view('Auth/signin', ['validation'=>$this->validator]); // if validation fails, return to sign in page
            } else {
                // check user
                $email = $this->request->getPost('email'); // get email from post request
                $password = $this->request->getPost('password'); // get password from post request

                $usersModel = new UserModel(); // create userModel object to communicate with database

                $user_info = $usersModel->where('email', $email)->first(); // by using email from post, check it inside DB and user tuple

                $check_password = Hash::check($password, $user_info['password']); // by calling Hash object from library, hash password and compare it with one form DB

                if (!$check_password) {
                    session()->setFlashdata('fail', 'Incorrect password'); // save temporary key-value data in session {'fail': 'Incorrect password'}
                    
                    return redirect()->to('signin')->withInput(); // Redirect the user to a specific URL and carry over the form input data to the redirected page.
                } else {
                    $user_id = $user_info['id']; // get user id from user tuple from earlier access to DB

                    session()->set('loggedUser', $user_id); // store data in the session. It sets a session variable with the key 'loggedUser' and assigns it the value of $user_id.
                    
                    return redirect()->to('/dashboard')->with('userId', $user_id); 
                }
            }
    }
    function logout() {
        if (session()->has('loggedUser')) { // check if session with key 'loggedUser' exists, if yes,
            session()->remove('loggedUser'); // delete it 
            return redirect()->to('/signin?access=out')->with('fail', 'You have signed out'); // then redirect to sign in page
        }
    }


    function forgotpassword() {
        return view("Auth/forgotpassword");
    }

    function forgotpasswordCheck() {

        $data = [];
        
        $email = $this->request->getPost('email');


        // Create valiation rules variable
        $validation = $this->validate([   // Validate performs validation on REQUEST DATA.
            'email'=>[
                'rules'=>'required|valid_email|is_not_unique[users.email]',
                'errors'=>[
                    'required'=>'Email is required',
                    'valid_email'=>'Enter a valid email address',
                    'is_not_unique'=>'This email is not registered',
                ]
            ],
        ]
        );
            
        // Invalid email for example
        if(!$validation) {
            return view('Auth/forgotpassword', ['validation'=>$this->validator]); // if validation fails, return to sign in page
        } else {
            $usersModel = new UserModel(); // create userModel object to communicate with database
            $user_info = $usersModel->where('email', $email)->first(); // by using email from post, check it inside DB and user tuple
            
            if ($usersModel->updatedAt($user_info['id'])) {
                $to = $email;
                $subject = 'Reset Password Link';



                $token = $user_info['uuid'];

                $message = 
                    'Hi ' . $user_info['name'] . '<br><br>' 
                    . 'Your reset password has been received. Please click'
                    . ' the link to reset your password.<br>' 
                    . '<a href="'. base_url() . 'reset_password/' . $token . ' ">Click here</a>'
                    . '<br>Thank you';

                $email = \Config\Services::email();
                $email->setTo($to);
                $email->setFrom('admin@FormBuilder.com', 'Team FormBuilder');
                $email->setSubject($subject);
                $email->setMessage($message);

                if ($email->send()) {
                    // Sets temporary session with key as 'sucess' and value as 'Reset ..' and ->withInput() to ensure data
                    // success message set as tempdata will be displayed on the /forgotpassword page after redirection.
                    session()->setFlashdata('success', 'Reset password link sent to your email');
                    return redirect()->to('/forgotpassword')->withInput();
                } else {
                    $data = $email->printDebugger(['headers']);
                    print_r($data);
                }
                
            }        

        }
        
    }

    function resetpassword($token) {
        $data = [];

        $data["token"] = $token;


        $usersModel = new UserModel(); // create userModel object to communicate with database
        
        if (empty($token)) {
            $data["error"] = "Error: Token is empty";
            // echo "empty token";
        } else {
            if ($usersModel->isVerifyToken($token)) {
                if (!$usersModel->isTokenExpired($token)) {
                    
                } else {
                    $data["error"] = "Error: Token is already expired";
                    // echo "expired token";
                }
            } else {
                $data["error"] = "Error: Token is invalid";
                // echo "invalid token";
            }
        }

        return view("Auth/resetpassword", $data);

    }

    public function update($token) {


        // set up validation variable by using validate function from codeIgniter
       $validation = $this->validate([
        'password' => [
            'rules' => 'required|min_length[5]|max_length[15]',
            'errors' => [
                'required' => 'Password is required',
                'min_length' => 'Password must have at least 5 characters in length',
                'max_length' => 'Password must not have more than 15 characters in length'
            ]
        ],
        'confirmpassword' => [
            'rules' => 'required|min_length[5]|max_length[15]|matches[password]',
            'errors' => [
                'required' => 'Confirm password is required',
                'min_length' => 'Confirm password must have at least 5 characters in length',
                'max_length' => 'Confirm password must not have more than 15 characters in length',
                'matches' => 'Passwords do not match'
            ]
        ]
    ]);

    
       if(!$validation) {
        // ['validation'=>$this->validator]
            return redirect()->back()->with('validation', [$this->validator]);
        } else {
              // Save user credentials into db
             $password = $this->request->getPost('password'); //  get password from post request


             $userModel = new UserModel(); // Initialize the UserModel


             $user = $userModel->where('uuid', $token)->first(); // Fetch the user based on the provided token
            
              if ($user) {
                  $userModel->update($user['id'], ['password' => Hash::make($password)]);
                  return redirect()->to('/signin')->with('update', 'Your password is successfully updated');  // redirect page to /dashboard

              } else {
                  return redirect()->back()->with('fail', 'Something went wrong');//  redirect same page if query fails
              }
    

        }
    }
 

}
