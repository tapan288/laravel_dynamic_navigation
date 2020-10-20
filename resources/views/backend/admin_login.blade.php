<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $settings->site_name }} | Admin Login</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('backend/css/app/font-awesome.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/css/app/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/app/parsley.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page">

    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>{{ $settings->site_name }}</b></a>
            <h3>Admin Login</h3>
        </div>
        <!-- /.login-logo -->
        @include('backend.includes.errors')
        @include('backend.includes.flash_message')
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{ route('admin_login.validate') }}" method="post" id="validate_form">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email" required
                            data-parsley-trigger="keyup" data-parsley-type="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required
                            minlength="8" data-parsley-trigger="keyup">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" name="remember_me" class="form-check-input">
                            <label for="remember" class="form-check-label">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('backend/js/app/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('backend/js/app/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/js/app/parsley.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#validate_form').parsley();
        });
    </script>
</body>

</html>
