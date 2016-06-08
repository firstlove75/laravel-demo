<?php
class User extends Eloquent {
	protected $table = 'user';
	
	public function listAllUser() {
		$users = User::paginate(4);
		if(!empty($users)) {
			return $users;
		} else {
			return FALSE;
		}
	}
	public function checkValidate($data) {
		// Get current action
		$str = Route::currentRouteAction();
		$str_pos = stripos($str, 'edit');

		$validator = Validator::make(
			array(
				'username' => $data['username'],
				'email' => $data['email'],
				'pass' => $data['pass'],
				'pass_confirmation' => $data['pass_confirmation']
			),
			array(
				'username' => 'required',
				'email' => 'required|email',
				'pass' => (empty($str_pos)) ? 'required|min:3|confirmed' : 'min:3|confirmed',
			)
		);
		
		if($validator->fails()) {
			$messages = $validator->messages();
			$msg_str = '';
			foreach($messages->all('<li>:message</li>') as $message) {
				$msg_str .= $message;
			}
			return $msg_str;
		} else {
			return 1;
		}
	}
	public function checkExistUser($username, $email) {
		$user = DB::table($this->table)->select('id', 'username', 'email')->where('username', '=', $username)
				->orWhere('email', $email)->get();
		return $user;
	}
	public function addUser($data) {
		DB::table($this->table)->insert($data);
	}
	public function delUser($user_id) {
		DB::table($this->table)->where('id', '=', $user_id)->delete();
	}
	public function getUserById($user_id) {
		$query = User::find($user_id)->toArray();
		return $query;
	}
	public function updateUser($data, $user_id) {
		$query = DB::table($this->table)->where('username', $data['username'])->where('id', '!=', $user_id)->get();
		if(count($query) > 0) {
			return 0;
		} else {
			DB::table($this->table)->where('id', $user_id)->update($data);
			return 1;
		}
	}
}