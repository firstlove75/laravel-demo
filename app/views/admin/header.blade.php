<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{{Asset('/public/assets/css')}}/style2.css" rel="stylesheet" type="text/css" />
<title>Untitled Document</title>
</head>

<body>
	<div id="top">Admin Control Panel</div>
    <div id="menu">
    	<ul>
        	<li><a href="#">Admin Page</a></li>
        	<li><a href="{{Asset('/user')}}">Account Manager</a></li>
        	<li><a href="{{Asset('/news')}}">News Manager</a></li>
        	<li><a href="{{Asset('/categorie')}}">Categorie Manager</a></li>
        	@if(Session::has('username'))
        	<li><a href="{{Asset('verify/logout')}}">Logout ({{Session::get('username')}})</a></li>
        	@endif
        </ul>
    </div>