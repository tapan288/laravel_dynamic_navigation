@extends('backend.master')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit User Details</h3>
                </div>
            </div>
            <div class="card card-info">
                <!-- <div class="card-header">
                    <h3 class="card-title">Add a Category</h3>
                </div> -->
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('user.update',$user->id) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="" placeholder="User Name" name="name" value="{{ $user->name }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="" placeholder="Email" name="email" value="{{ $user->email }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="contact">Contact</label>
                                <input type="text" class="form-control" id="" placeholder="Contact" name="contact" value="{{ $user->contact }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="" placeholder="Address" name="address" value="{{ $user->address }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="name">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="active">Active</option>
                                    <option value="inactive">InActive</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Edit User Details</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
</div>

@endsection