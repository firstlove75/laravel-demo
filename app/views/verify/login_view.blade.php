@extends('admin_template') 
@section('content')
@if(count($errors) > 0)
<ul class="errors">
	{{$errors}}
</ul>
@endif
<div class="formPanel small">
	<fieldset>
		<legend>Login Form</legend>
		<form action="{{Asset('/verify/login')}}" method="post">
			<label>Username</label>
			<input type="text" name="username" size="30" value="@if(isset($data)){{$data['username']}}@endif" /><br />
			<label>Password</label>
			<input type="password" name="pass" size="30" /><br />
			<label>&nbsp;</label>
			<input type="submit" name="ok" value="Submit" class="button" />
		</form>
	</fieldset>
</div>
@endsection
