<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	  <link href="{{ asset('cssfiles/styling.css') }}" rel="stylesheet">
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row justify-content-md-center">
			 <div class="col col-lg-5">
			 	<div class="card">
			 		<div class="card-header">
						<h1 class="text-center">Register</h1>
					</div>
					<div class="card-body">
						@if(Session::has('error'))
							<div class="alert alert-danger" role="alert">
								{{ Session::get('error')}}
							</div>

						@endif

						@if(Session::has('success'))
							<div class="alert alert-success" role="alert">
								{{ Session::get('success')}}
							</div>

						@endif
					<form action="{{ route('register')}}" method="POST">
						@csrf
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Email address</label>
					    <input type="email" class="form-control" name="email" id="email" value="{{ old('email')}}" required="required" aria-describedby="emailHelp">
					    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
					    <div style="color:red">{{ $errors->first('email')}}</div>
					  </div>
					   <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Name</label>
					    <input type="text" class="form-control" name="name" id="name" required="required">
					  </div>
					  <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Password</label>
					    <input type="password" class="form-control" name="password" id="password" required="required">
					  </div>
					  
					  <button type="submit" class="btn btn-primary">Register Now</button>
					  <div class="mb-3 mt-2">
						  <label for="registernow" class="form-label">Click Here To <a href="{{ route('login')}}">Login</a></label>
					  </div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>