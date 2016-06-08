<?php
class Verify extends Eloquent {
	protected $table = 'user';
	
	public function checkLogin($username, $pass) {
		$query = DB::table($this->table)->where('username', $username)
				->where('password', $pass)->get();
		if(count($query) > 0) {
			return $query;
		} else {
			return 0;
		}
	}
}