@extends('layout')
<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  	<div class="container-fluid">
		    
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#">Welcome, {{ Auth::user()->name }}</a>
		        </li>		        
		      </ul>
		      <form action="{{ route('logout')}}" method="POST">
		      	@csrf
		      	@method('DELETE')
		      <button class="btn btn-outline-success">Logout</button>
			  </form>

		    </div>
		  </div>
		</nav>
		

		<div class="container">

			 @if(Session::has('success'))
              <div class="alert alert-success" role="alert">
                {{ Session::get('success')}}
              </div>

       		@endif
			
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal" data-bs-whatever="@mdo">Create</button>
			@include('createmodal')

			<a href="{{route('summarydata')}}" class="btn btn-primary"> See Summary</a>
		</div>
		<div class="container"> 

				<table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">First Name</th>
				      <th scope="col">Last Name</th>
				      <th scope="col">Gender</th>
				      <th scope="col">Birthday</th>
				      <th scope="col">Monthly Salary</th>
				      <th>Actions</th>

				    </tr>
				  </thead>
				  <tbody>
				  	@foreach ($emp as $empinfo)
					    <tr>
					      <th scope="row">{{$empinfo->fname}}</th>
					      <td>{{$empinfo->lname}}</td>
					      <td>{{$empinfo->gender}}</td>
					      <td>{{$empinfo->birthd}}</td>
					      <td><?php $monthlysalry = $empinfo->mosalary;
					      $formatmos = number_format($monthlysalry,2, '.',',');
					      echo $formatmos;
					      ?></td>
					      <td><a href="#editModal{{$empinfo->empid}}" data-bs-toggle="modal" class="btn btn-primary"> Edit</a> 
					      	@include('editmodal')
					      	
					      	<!-- <form method="POST" action="{{ route('delemployee', $empinfo->empid)}}">
					      		  {{ method_field('DELETE') }}
                                  {{ csrf_field() }} -->

                   <a href="#delModal{{$empinfo->empid}}" data-bs-toggle="modal" class="btn btn-danger"> Delete</a> 
                   @include('deleteconfirm')
					      	<!-- <button type="submit" class="btn btn-danger" title="Delete" onclick="return confirm(&quot;Confirm delete?&quot;)"> Delete</button></td> -->
					  <!--    	</form> -->
					    </tr>
				   	@endforeach
				  </tbody>
				</table>
	  			

	  	</div>	



	  @include('boostrapscript')


</body>
</html>