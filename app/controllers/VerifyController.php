<?php
class VerifyController extends BaseController {
	protected $_verify;
	
	public function __construct() {
		$this->_verify = new Verify();	
	}
	public function postLogin() {
		if(Input::has('ok')) {
			$u = Input::get('username');
			$p = Input::get('pass');
			if($u == '' || $p == '') {
				$this->_data['errors'] = '<li>Please input your username or password</li>';
				$this->_data['data']['username'] = $u;
			} else {
				$pass = md5($p);
				$user_info = $this->_verify->checkLogin($u, $pass);
				if(!empty($user_info)) {
					foreach($user_info as $item) {
						Session::put('user_id', $item->id);
						Session::put('username', $item->username);
						Session::put('email', $item->email);
					}
					return Redirect::to('user');
				} else {
					$this->_data['data']['username'] = $u;
				}
			}
			return View::make('verify.login_view', $this->_data);
		}
	}
	public function getLogout() {
		Session::flush();
		return Redirect::to('verify/login');
	}
}