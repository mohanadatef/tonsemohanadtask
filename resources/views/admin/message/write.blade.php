@extends('includes.admin.master_admin')
@section('title')
	send
@endsection
@section('head_style')
@endsection
@section('content')
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1>User</h1>
					</div>
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a
										href="{{route('admin')}}">Home</a></li>
							<li class="breadcrumb-item active">message</li>
						</ol>
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</section>

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="row">
					<!-- left column -->
					<div class="col-md-12">
						<!-- jquery validation -->
						<div class="card card-primary">
							<div class="card-header">
								Update
							</div>
							<!-- /.card-header -->
							<!-- form start -->
							@include('errors.error')
							<form action="{{route('message.send',$user->id)}}" method="post" id="edit" enctype="multipart/form-data">
								@csrf
								<div class="card-body">
									<div class="form-group{{ $errors->has('message') ? ' is-invalid' : "" }}">
										<label for="name">message</label>
										<input type="text" name="message" class="form-control" id="message"
											   value="{{request('message')}}"
											   placeholder="Enter message">
									</div>
									<!-- /.form-group -->
									<!-- /.col -->
								</div>
								<!-- /.card-body -->
								<div class="card-footer">
									<button type="submit" class="btn btn-primary">ssend</button>
								</div>
							</form>
						</div>
						<!-- /.card -->
					</div>
					<!--/.col (left) -->
					<!-- right column -->
					<div class="col-md-6">

					</div>
					<!--/.col (right) -->
				</div>
				<!-- /.row -->
			</div><!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>
@endsection
@section('script_style')
@endsection
