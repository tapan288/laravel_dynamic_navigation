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
                    <h3 class="card-title">Site Settings</h3>
                </div>
            </div>
            <div class="card card-info">
                <!-- <div class="card-header">
                    <h3 class="card-title">Add a Category</h3>
                </div> -->
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('settings.update') }}" method="post" id="validate_form"
                    enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label class="switch">
                                    <input type="checkbox" id="checkbox">
                                    <span class="slider round"></span>
                                </label>
                                &nbsp; Enable Nepali Keyboard
                                <br>
                                <br>
                                <label for="site_name">Site Name</label>
                                <a rel="nofollow" href="http://naya.com.np" ; title="Nepali Social Network"
                                    class="naya_convert"></a>
                                <input type="text" class="form-control" id="site_name" placeholder="Site Name"
                                    name="site_name" required data-parsley-trigger="keyup" minlength="3"
                                    value="{{ $setting->site_name }}">
                            </div>
                        </div>
                        @if($setting->logo)
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="">Currently Selected Logo</label><br>
                                <img src="{{ asset($setting->logo) }}" alt="" height="100" class="img img-rounded">
                            </div>
                        </div>
                        @endif
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="logo">Upload a new Logo</label>
                                <input type="file" class='form-control' name="logo">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="contact">Contact Number</label>
                                <input type="number" class="form-control" id="" placeholder="Contact Number"
                                    name="contact" value="{{ $setting->contact }}" required data-parsley-trigger="keyup"
                                    data-parsley-length="[10,10]"
                                    data-parsley-length-message="The phone number should be exactly 10 characters long">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="address">Address</label>
                                <a rel="nofollow" href="http://naya.com.np" ; title="Nepali Social Network"
                                    class="naya_convert"></a>
                                <input type="text" class="form-control" id="address" placeholder="Address"
                                    name="address" required data-parsley-trigger="keyup" minlength="3"
                                    value="{{ $setting->address }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="twitter_link">Twitter Link</label>
                                <input type="text" class="form-control" id="" placeholder="Twitter link"
                                    name="twitter_link" value="{{ $setting->twitter_link }}" required
                                    data-parsley-trigger="keyup" data-parsley-type="url">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="facebook_link">Facebook Link</label>
                                <input type="text" class="form-control" id="" placeholder="Facebook Link"
                                    name="facebook_link" value="{{ $setting->facebook_link }}" required
                                    data-parsley-trigger="keyup" data-parsley-type="url">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="instagram_link">Instagram Link</label>
                                <input type="text" class="form-control" id="" placeholder="Instagram Link"
                                    name="instagram_link" value="{{ $setting->instagram_link }}" required
                                    data-parsley-trigger="keyup" data-parsley-type="url">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="youtube_link">Youtube Link</label>
                                <input type="text" class="form-control" id="" placeholder="Youtube Link"
                                    name="youtube_link" value="{{ $setting->youtube_link }}"
                                    data-parsley-trigger="keyup" data-parsley-type="url">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="" placeholder="Site Email" name="email"
                                    required data-parsley-trigger="keyup" data-parsley-type="email"
                                    value="{{ $setting->email }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <label for="about">About</label>
                                <a rel="nofollow" href="http://naya.com.np" ; title="Nepali Social Network"
                                    class="naya_convert"></a>
                                <textarea class="form-control" id="about" rows="5" placeholder="About" name="about"
                                    required data-parsley-trigger="keyup"
                                    minlength="15">{{ $setting->about }}</textarea>
                            </div>
                        </div>

                    </div>

                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Settings</button>
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
        var siteName;
        var address;
        var about;
        var checkbox = document.querySelector('input[type="checkbox"]');
        checkbox.addEventListener('change', function () {
    if (checkbox.checked) {
        siteName = nepalify.interceptElementById("site_name");
        address = nepalify.interceptElementById("address");
        about = nepalify.interceptElementById("about");
    } else {
      // do that
      siteName.disable();
      address.disable();
      about.disable();
    }
    });
        $('#validate_form').parsley();
    });
</script>
@endsection
