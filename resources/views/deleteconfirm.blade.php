<div class="modal fade" id="delModal{{$empinfo->empid}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('delemployee', $empinfo->empid)}}">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}

        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Are you sure you want to delete?</label>
           
          </div>


        <button type="submit" class="btn btn-danger">Delete</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
         </form>                         
      </div>
    <!--   <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div> -->
    </div>
  </div>
</div>