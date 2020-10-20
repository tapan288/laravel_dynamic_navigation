@extends('backend.master')


@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add a SubMenu Item</h3>
                </div>
            </div>
            <div class="card card-info">
                <form id="validate_form" action="{{ route('submenu.store') }}" method="post"
                    enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-group">
                            <div class="col-sm-10">

                                <label for="name">Menu Name</label>
                                <input type="text" name="name"
                                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                    placeholder="Name" required>
                                @if($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">

                                <label for="name">Select Menu Item</label>
                                <select name="menuItem" id="" class="form-control">
                                    @foreach ($menuItems as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="status">Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="enabled">
                                        Enabled
                                    </option>
                                    <option value="disabled">
                                        Disabled
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="link">SubMenu Item Link</label>
                                <input type="text" class="form-control" placeholder="Enter link" name="link">
                            </div>
                        </div>
                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add Menu Item</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
