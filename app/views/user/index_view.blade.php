@extends('admin_template')
@section('content')
<div align="center">
	<table align="center" width="450">
            	<tr>
                	<td colspan="5"><strong><a href="{{Asset('/user/add')}}"><font color="#99CC33">Add A User</font></a></strong></td>
                </tr>
            	<tr>
                	<td class="title">STT</td>
                    <td class="title">Username</td>
                    <td class="title">Level</td>
                    <td class="title">Edit</td>
                    <td class="title">Del</td>
                </tr>	
	@foreach($user_info as $item)
    	<tr>
    		<td>{{$order_num++}}</td>
    		<td>{{$item->username}}</td>
    		@if($item->level == 2)
    			<td><font color="#FF0000">Admin</font></td>
    		@else
    			<td>Member</td>
    		@endif
    		<td><a href="{{Asset('/user/edit')}}/{{$item->id}}">Edit</a></td>
    		<td><a href="{{Asset('/user/del')}}/{{$item->id}}" onclick="return confirm('Are you sure?');">Del</a></td>
    	</tr>     
	@endforeach
	</table>
	<div class="pagination-links">{{$user_info->links()}}</div>
</div>
@endsection