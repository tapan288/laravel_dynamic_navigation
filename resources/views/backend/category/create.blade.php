@extends('backend.master')

@section('styles')

<style>
    /* The switch - the box around the slider */
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 30px;
    }

    /* Hide default HTML checkbox */
    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    /* The slider */
    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 22px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>
@endsection



@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Add a Category</h3>
                </div>
            </div>
            <div class="card card-info">
                <form id="validate_form" action="{{ route('category.store') }}" method="post"
                    enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <!-- Rounded switch -->
                                <label class="switch">
                                    <input type="checkbox" id="checkbox">
                                    <span class="slider round"></span>
                                </label>
                                &nbsp; Enable Nepali Keyboard
                                <br>
                                <br>
                                <label for="name">Category Name</label>
                                <a rel="nofollow" href="http://naya.com.np" ; title="Nepali Social Network"
                                    class="naya_convert"></a>
                                <input type="text" name="name"
                                    class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                    placeholder="Name" required data-parsley-trigger="keyup" minlength="3" id="editor"
                                    {{ old('name') }}>
                                @if($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add Category</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script type="text/javascript" src="{{ asset('backend/js/app/nepalify.production.min.js') }}"></script>

<script>
    $(document).ready(function(){
        var categoryInput;
        var checkbox = document.querySelector('input[type="checkbox"]');
        checkbox.addEventListener('change', function () {
    if (checkbox.checked) {
        categoryInput = nepalify.interceptElementById("editor");
    } else {
      // do that
      categoryInput.disable();
    }
    });
        $('#validate_form').parsley();
    });
</script>
@endsection
