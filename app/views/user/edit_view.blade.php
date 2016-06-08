@extends('admin_template') 
@section('content')
@if(count($errors) > 0)
<ul class="errors">
	{{$errors}}
</ul>
@endif
<div class="formPanel small">
	<fieldset>
		<legend>Edit Form</legend>
		<form action="{{Asset('/user/edit')}}/{{$user_info['id']}}" method="post">
			<label>Level</label>
			<select name="role">
				<option value="1" @if($user_info['level'] == 1)selected="selected"@endif>Member</option>
				<option value="2" @if($user_info['level'] == 2)selected="selected"@endif>Admin</option>
			</select> <br />
			<label>Username</label>
			<input type="text" name="username" size="30" value="@if(isset($user_info['username'])){{$user_info['username']}}@endif" /><br />
			<label>Email</label>
			<input type="text" name="email" size="30" value="@if(isset($user_info['email'])){{$user_info['email']}}@endif" /><br />
			<label>Password</label>
			<input type="password" name="pass" size="30" /><br />
			<label>Re-password</label>
			<input type="password" name="pass_confirmation" size="30" /><br />
			<label>&nbsp;</label>
			<input type="submit" name="ok" value="Submit" class="button" />
		</form>
	</fieldset>
</div>
@endsection