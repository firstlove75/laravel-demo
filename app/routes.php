<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
	if(!empty(Session::get('username'))) {
		return Redirect::to('user');
	} else {
		return Redirect::to('verify/login');
	}
});

Route::get('user/add', function() {
	if(!empty(Session::get('username'))) {
		return View::make('user.add_view');
	} else {
		return Redirect::to('verify/login');
	}
});
Route::get('user/edit/{id}', function($id) {
	if(!empty(Session::get('username'))) {
		$user = new User();
		$user_info = $user->getUserById($id);
		$data = array(
			'user_info' => $user_info
		);
	 	return View::make('user.edit_view', $data);
	} else {
		return Redirect::to('verify/login');
	}
});
Route::controller('/user', 'UserController');
Route::get('/user', 'UserController@index');

// Login page
Route::get('verify/login', function() {
	return View::make('verify.login_view');
});
Route::controller('/verify', 'VerifyController');

// Route for Categorie Controller
Route::get('/categorie', 'CategorieController@index');