<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio de Sesion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{asset('loginV2/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('loginV2/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('loginV2/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('loginV2/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('loginV2/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('loginV2/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('loginV2/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('loginV2/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{asset('loginV2/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('loginV2/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('loginV2/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                    @csrf
                    <span class="login100-form-title p-b-48">
                        <img src="{{asset('HTML/img/logopap.png')}}"  height="150" alt="SYSPAP" />
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input id="email" type="email" class="input100" name="email" data-validate = "Valid email is: a@b.c" required autofocus>
                        <span class="focus-input100" data-placeholder="Correo"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <span class="btn-show-pass">
                            <i class="zmdi zmdi-eye"></i>
                        </span>
                        <input id="password" type="password" class="input100" name="password" required>
                        <span class="focus-input100" data-placeholder="Contraseña"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" style="background-color: #f8428d;">
                                Entrar
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-115">
                        <span class="txt1">
                            Don’t have an account?
                        </span>

                        <a class="txt2" href="#">
                            Sign Up
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="{{asset('loginV2/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('loginV2/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('loginV2/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('loginV2/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('loginV2/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('loginV2/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('loginV2/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('loginV2/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('loginV2/js/main.js')}}"></script>

</body>
</html>
