@extends('backend.master')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Cuisines List</h3>

                        <!-- <div class="card-tools">
                            <a href="" class="btn btn-success">Add a Cuisine</a>
                        </div> -->
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @if($users)
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->contact }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->status }}</td>
                            <td>{{ $user->image }}</td>
                            <td> 
                            <div class="btn-group-justified">
                                <button onclick="window.location='{{ route('user.edit',$user->id) }}';"  class="btn btn-success btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                <button class="btn btn-danger btn-sm" onclick="handleDelete({{ $user->id }} )"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            </div>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                        
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>

</div>


@endsection

@section('modal')

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="GET" id="deleteUser">
        @method('DELETE')
        @csrf
        <div class="modal-body">
            <p class="text-center">Are you sure you want to delete this User?</p>
            <input type="hidden">
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
        </div>
      
      </form>
      
    </div>
  </div>
</div>


<script>
    function handleDelete(id){
            
            var form = document.getElementById('deleteUser');
            form.action = '/admin/user/delete/' + id;
            $('#delete').modal('show');
        }
</script>


@endsection