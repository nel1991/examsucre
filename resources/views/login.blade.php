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
						<h1 class="text-center">Login</h1>
					</div>
					<div class="card-body">

						@if(Session::has('error'))
							<div class="alert alert-danger" role="alert">
								{{ Session::get('error')}}
							</div>

						@endif
					<form action="{{ route('login')}}" method="POST">
						@csrf
					 
					  <div class="mb-3">
					    <label for="exampleInputEmail1" class="form-label">Email address</label>
					    <input type="email" class="form-control" name="email" id="email" required="required" aria-describedby="emailHelp">
					  </div>
					  
					  <div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Password</label>
					    <input type="password" class="form-control" name="password" id="password" required="required">
					  </div>
					  
					  <button type="submit" class="btn btn-primary">Login</button>
					 	<div class="mb-3">
					    <label for="exampleInputPassword1" class="form-label">Don't have an account? You may register <span> </span><a href="{{ route('register')}}">Click Here</a></label>
					    
					  </div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>