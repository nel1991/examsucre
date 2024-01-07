<div class="modal fade" id="editModal{{$empinfo->empid}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Modal</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

       
      <div class="modal-body">
        <form action="{{ route('updateemployee', $empinfo->empid)}}" method="post">

             {{ csrf_field() }}
            {{ method_field('PATCH') }}
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">First Name</label>
            
            <input type="text" class="form-control" id="fname" name="fname" value="{{$empinfo->fname}}" required="required">
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname" value="{{$empinfo->lname}}" required="required">
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Gender</label>
          <!--   <input type="text" class="form-control" id="gender" name="gender" value="{{$empinfo->gender}}" required="required"> -->

              <select class="form-select" name="gender" aria-label="Default select example">     <option selected>{{$empinfo->gender}}</option>          
                  <option value="Female">Female</option>
                  <option value="Male">Male</option>                  
            </select>
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Birth Date</label>
            <input type="date" class="form-control" id="birthd" name="birthd" value="{{$empinfo->birthd}}" required="required">
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Monthly Salary</label>
            <input type="number" class="form-control" id="mosalary" name="mosalary" value="{{$empinfo->mosalary}}" required="required">
          </div>

         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>