


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
    <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
    <title>Kode</title>
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    <!-- ========== Css Files ========== -->
    <link href="admin/css/root.css" rel="stylesheet">
    <style type="text/css">
        body{background: #F5F5F5;}
    </style>
</head>
<body>

<div class="login-form">
    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
        <div class="top">
            <img src="img/kode-icon.png" alt="icon" class="icon">
            <h1>SLOW JUN</h1>
            <h4>Bootstrap Admin Template</h4>
        </div>
        <div class="form-area">
            <div class="group">
                {{--<input type="text" class="form-control" placeholder="Username">--}}
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                <i class="fa fa-user"></i>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="group">
                {{--<input type="password" class="form-control" placeholder="Password">--}}
                <input id="password" type="password" class="form-control" name="password" required>
                <i class="fa fa-key"></i>
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="checkbox checkbox-primary">
                <input id="checkbox101" type="checkbox" checked>
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </div>
            <button type="submit" class="btn btn-default btn-block">LOGIN</button>
        </div>
    </form>
    <div class="footer-links row">
        <div class="col-xs-6"><a href="#"><i class="fa fa-external-link"></i> Register Now</a></div>
        <div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i> Forgot password</a></div>
    </div>
</div>

</body>
</html>