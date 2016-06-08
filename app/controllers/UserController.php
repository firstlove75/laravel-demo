<?php

class UserController extends BaseController
{
    protected $_user;

    public function __construct()
    {
        $this->_user = new User();
    }
    public function index()
    {
        if ($this->checkExistLogin()) {
            $this->_data['user_info'] = $this->_user->listAllUser();
            $this->_data['order_num'] = 1;

            return View::make('user.index_view', $this->_data);
        } else {
            return Redirect::to('verify/login');
        }
    }
    public function postAdd()
    {
        if ($this->checkExistLogin()) {
            if (Input::has('ok')) {
                $data = array(
                    'username' => Input::get('username'),
                    'email' => Input::get('email'),
                    'pass' => Input::get('pass'),
                    'pass_confirmation' => Input::get('pass_confirmation'),
                );
                $val_result = $this->_user->checkValidate($data);
                if ($val_result == 1) {
                    $exist_user = $this->_user->checkExistUser($data['username'], $data['email']);
                    if (count($exist_user) == 0) {
                        $data_insert = array(
                            'username' => $data['username'],
                            'password' => md5($data['pass']),
                            'email' => $data['email'],
                            'level' => Input::get('role'),
                        );
                        $this->_user->addUser($data_insert);

                        return Redirect::to('user');
                    } else {
                        $this->_data['errors'] = '<li>Existed User</li>';
                    }
                } else {
                    $this->_data['errors'] = $val_result;
                    $this->_data['data'] = $data;
                }

                return View::make('user.add_view', $this->_data);
            }
        }
    }
    public function getDel($id)
    {
        if ($this->checkExistLogin()) {
            $this->_user->delUser($id);

            return Redirect::to('user');
        }
    }
    public function postEdit($id)
    {
        // 	$user = new User();
// 	$this->_data['user_info'] = $user->getUserById($id);
        if ($this->checkExistLogin()) {
            if (Input::has('ok')) {
                $data = array(
                    'id' => $id,
                    'username' => Input::get('username'),
                    'email' => Input::get('email'),
                    'pass' => Input::get('pass'),
                    'pass_confirmation' => Input::get('pass_confirmation'),
                    'level' => Input::get('role'),
                );
                $val_result = $this->_user->checkValidate($data);
                if ($val_result == 1) {
                    $data_update = array(
                        'username' => $data['username'],
                        'email' => $data['email'],
                        'level' => Input::get('role'),
                    );
                    if (!empty(Input::get('pass'))) {
                        $data_update['password'] = md5(Input::get('pass'));
                    }
                    $result = $this->_user->updateUser($data_update, $id);
                    if ($result == 0) {
                        $this->_data['errors'] = '<li>Existed username. Please input another username</li>';
                    } else {
                        return Redirect::to('user');
                    }
                } else {
                    $this->_data['errors'] = $val_result;
                }
                $this->_data['user_info'] = $data;

                return View::make('user.edit_view', $this->_data);
            }
        }
    }
}
