@extends('layout.header')
@section('content')

<div class="page-content-wrapper">
	<div class="page-content-wrapper-inner">
		<div class="content-viewport">
	    	<div class="col-lg-12">
		        <div class="grid">
		          	<p class="grid-header">Department List</p>
					<div class="item-wrapper">
						<div class="table-responsive">
						  	<table class="table table-hover">
							    <thead>
							      	<tr>
								        <th>Dep Name</th>
								        <th></th>
							      	</tr>
							    </thead>
							    <tbody>
							      	<tr>
								        <td>Adminstration</td>
								        <td>
								        	<div class="btn btn-success has-icon btn-rounded"><i class="mdi mdi-account-multiple"></i>
								        		<a href="{{asset('users')}}" style="color: #fff">Users</a>
								        	</div>
								        </td>
							      	</tr>
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