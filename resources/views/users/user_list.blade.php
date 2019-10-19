@extends('layout.header')
@section('content')

<div class="page-content-wrapper">
	<div class="page-content-wrapper-inner">
		<div class="content-viewport">
	    	<div class="col-lg-12">
		        <div class="grid">
		          	<p class="grid-header">Users List</p>
					<div class="item-wrapper">
						<div class="table-responsive">
						  	<table class="table table-hover">
							    <thead>
							      	<tr>
								        <th>#</th>
								        <th>User Name</th>
								        <th></th>
							      	</tr>
							    </thead>
							    <tbody>
							    	<?php $i = 1;?>
							    	@foreach($users as $user)
							      	<tr>
								        <td>{{$i++}}</td>
								        <td>{{$user->name}}</td>
								        <td>
								        	<div class="btn btn-success has-icon btn-rounded"><i class="mdi mdi-account-multiple"></i>
								        		<a href="" style="color: #fff">Update</a>
								        	</div>
								        </td>
							      	</tr>
							      	@endforeach
							    </tbody>
						  	</table>
						</div>
					</div>
		        </div>
	    	</div>
		</div>
	</div>
</div>
@endsection