<?php 
    namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

    class Account extends Controller
    {
        public function login()
        {
            return view('account/login');
        }

        public function new()
        {
            helper('form');

            if($this->request->is('post'))
            {
                //get data
                $data = $this->request->getPost(['username', 'email', 'password', 're_pass']);
                $rules = [
                    'username'=> [
                        'label' => 'username',
                        'rules' => 'required|max_length[25]',
                        'errors' => [
                            'required' => 'Username is required.',
                            'max_length' => 'Username must not exceed 25 characters',
                        ]
                    ],
                    'email'=> [
                        'label' => 'email',
                        'rules' => 'required|valid_email',
                        'errors' => [
                            'required' => 'Email is required',
                            'valid_email' => 'Please provide a valid email',
                        ]
                    ],
                    'password' => [
                        'label' => 'password',
                        'rules' => 'required|min_length[8]',
                        'errors' => [
                            'required' => 'Password is required',
                            'min_length' => 'Password must be atleast 8 characters'
                        ]
                    ],
                    're_pass' => [
                        'label' => 'retype_password',
                        'rules' => 'required|matches[password]',
                        'errors' => [
                            'required' => 'Password must be retype',
                            'matches' => 'Password does not match'
                        ]
                    ],
                ];
                
                if(!$this->validate($rules))
                {
                    return view('account/register', 
                    ['errors' => $this->validator->getErrors()]);
                }else
                {
                    $data = $this->validator->getValidated();
                    $model = model(UserModel::class);
                    $model->save($data);
                    return redirect()->to(base_url().'login');

                }
                
            }
            return view('account/register');
        }
            
    }

?>