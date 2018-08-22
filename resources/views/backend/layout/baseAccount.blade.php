<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đăng nhập</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ asset('') }}" >
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="backend/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <style>
        body {
            height: 100vh;
            color: #8A3724;
        }

        button[type=submit] {
            background: #8A3724;
        }

        button[type=submit]:hover {
            background: #86645e;
        }

        .bg {
            background: url('backend/img/login-bg.jpg') no-repeat;
            background-position: center;
            height: 100vh;
            background-size: cover;
        }

        .validate-form {
            padding-top: 10rem;
        }

        .error,
        .has-val,
        .require {
            color: #CD0F38;
        }

        .error {
            display: block;
            text-align: center;
        }

        .login {
            margin: 0 auto;
            width: 40rem;
        }

        .input-password {
            position: relative;
        }

        .btn-show-pass {
            font-size: 15px;
            color: #999999;
            align-items: center;
            position: absolute;
            height: 100%;
            top: 5px;
            right: 0;
            padding-right: 5px;
            cursor: pointer;
        }

        .orgot-password {
            
        }

    </style>
</head>
<body>
    <div class="container-fluid bg">
        <div class="row login">
            
                @yield('content')
            
        </div>
    </div> 
    <!-- /container -->
        
    <!--===============================================================================================-->
    <script src="backend/js/jquery.min.js"></script>
    <!--===============================================================================================-->
    <script src="backend/js/popper.js"></script>
    <script src="backend/js/bootstrap.min.js"></script>
    <script src="backend/js/main.js"></script>
</body>
</html>
