
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>

<head>
    <title>Login — firs</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="ag-ensg-ts.com" name="author">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="Login to your account AGF." name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="shortcut icon">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('assets/css/lib.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css?version=4.4.0') }}" rel="stylesheet">
</head>

<body class="auth-wrapper">
    <div class="all-wrapper">
        <div class="auth-box-w">
            <div class="logo-w">
                <a href="index.php">
                  <img alt="" src="assets/img/logo-x2.png" style="height: 150px;">
                </a>
            </div>
            <h4 class="auth-header">
                Login to your account
            </h4>
            <form method="POST"  data-toggle="validator" role="form" action="{{ route('login') }}" style="padding: 20px calc(50px + 3%) 60px calc(50px + 3%)">
                @csrf
                <div class="col-sm-12 pt-4 text-center">
                    <?php
                    //  if (isset($errors)) { 
                    //     foreach ($errors as $error) { 
                            ?>
                        <!-- <div class="alert alert-danger"> -->
                                <?php 
                                // echo $error;
                                 ?>
                        <!-- </div> -->
                    <?php 
                    //     }
                    // }
                    // if (Session::exists('login')) { 
                        ?>
                        <!-- <div class="alert alert-danger"> -->
                                <?php 
                                // echo Session::flash('login'); 
                                ?>
                        <!-- </div> -->
                    <?php 
                    // } 
                    ?>
                </div>
                <div class="form-group has-feedback">
                    <label for="username">Email or Phone Number</label>
                    <input name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email or phone number" id="username" value="">
                    <div class="pre-icon os-icon os-icon-user-male-circle"></div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Enter your password" type="password">
                    <div class="pre-icon os-icon os-icon-fingerprint"></div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="custom-control custom-checkbox">
                    <input name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }} class="custom-control-input" id="defaultChecked">
                    <label class="custom-control-label" for="defaultChecked">Remember Me</label>
                </div>
                <div class="buttons-w text-center pt-4">
                    <input class="btn btn-primary btn-block" value="Continue" type="submit" name="submit">
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/validator.min.js"></script>
</body>
</html>
