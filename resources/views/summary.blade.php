@extends('layout')
<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  	<div class="container-fluid">
		    
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <!-- <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="#">Welcome, {{ Auth::user()->name }}</a>
		        </li>	 -->
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Home</a>
		        </li>		        
		      </ul>

		       <span class="navbar-text">
        			Welcome, {{ Auth::user()->name }}	
      			</span>
		      <form action="{{ route('logout')}}" method="POST" class="del">
		      	@csrf
		      	@method('DELETE')
		           
		     
		      <button class="btn btn-outline-success">Logout</button>
			  </form>

		    </div>
		  </div>
		</nav>
		

		<div class="container text-center">
		  <div class="row justify-content-center">		 
			    <div class="col">
			    	<table class="table table-bordered border-primary">
						  <thead class="table-primary">
						    <tr>
						      <th col="">Gender</th>
						      <th scope="col">Total</th>
						      
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <th scope="row">Female</th>
						      <td>{{$countfem}}</td>
						      
						    </tr>
						    <tr>
						      <th scope="row">Male</th>
						      <td>{{$countmale}}</td>					      
						    </tr>					 
						  </tbody>
					</table>
			    </div>
			  </div>

				<div class="row justify-content-center">
				  
				    <div class="col">
				    	<table class="table table-bordered border-info">
							  <thead class="table-info">
							    <tr>
							      <th scope="col">Average Age of all Employees</th>
							     
							      
							    </tr>
							  </thead>
							  <tbody>
							    <tr>

							    	
							      <th scope="row">{{$average}}</th>
							
							      
							    </tr>
							
							
							  </tbody>
						</table>
				    </div>
				</div>

				  <div class="row justify-content-center">
				  
				    <div class="col">
				    	<table class="table table-bordered border-secondary">
					  <thead class="table-secondary">
					    <tr>
					      <th scope="col">Total Monthly Salary of All Employees</th>
					  
					      
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					    	
					      <th scope="row"><?php $total = $sumemp->sum('mosalary'); 
					      	$totalformat = number_format($total,2, '.',',');
					      	echo $totalformat;

					  		?></th>
					     	
					      
					    </tr>
					    
					  
					  </tbody>
					</table>


				    </div>
				  </div>

		</div><!-- -- last
 -->

</body>
</html>