<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('assets/signUp/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/signUp/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/signUp/fonts/iconic/css/material-design-iconic-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.css" >
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/signUp/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/signUp/vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/signUp/vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/signUp/vendor/daterangepicker/daterangepicker.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/signUp/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/signUp/css/main.css')}}">
    <!--===============================================================================================-->
    <style type="text/css">
        .fa{
            font-size: 20px;
        }
        .fa-eye{
            position: absolute;
            right: 100px;
            top: 50px;
            color: #0285A1;
        }
        .fa-eye-slash{
            color: red;
        }

    </style>
</head>
<body style="background-color: #999999;">

<div class="limiter">
    <div class="container-login100">
        <div class="login100-more" style="background-image: url('{{asset('assets/signUp/images/bg-01.jpg')}}');"></div>

        <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
            <x-jet-validation-errors class="mb-4" />
            <form class="login100-form validate-form"  action="{{route('register')}}"  method="POST" >
                @csrf
					<span class="login100-form-title p-b-59">
						Sign Up
					</span>
                <div class="wrap-input100 validate-input" data-validate="Required">
                    <span class="label-input100">Full Name</span>
                    <input class="input100" type="text" name="name" placeholder="enter Your Full Name...">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" name="email" placeholder="Email addess...">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="password" id="password" placeholder="Enter Your password">
                    <i class="fa fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Required">
                    <span class="label-input100">Confirm Password</span>
                    <input class="input100" type="password" name="password_confirmation" id="new_password" placeholder="confirm your password">
                    <i class="fa fa-eye" id="togglePassword2" style="margin-left: -30px; cursor: pointer;"></i>
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Required">
                    <span class="label-input100">address</span>
                    <input class="input100" type="text" name="address" placeholder="Your Address...">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Required">
                    <span class="label-input100">Phone</span>
                    <input class="input100" type="text" name="phone" placeholder="Enter your Phone">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Required">
                    <span class="label-input100">linkedin</span>
                    <input class="input100" type="text" name="linkedin" placeholder="Enter your Linkedin">
                    <span class="focus-input100"></span>
                </div>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <input type="submit" class=" login100-form-btn btn btn-submit" value="Register" name="submit" style="color: white; cursor: pointer;background-color: #0285A1" >
                    </div>

                    <a href="/login" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                        Sign in
                        <i class="fa fa-long-arrow-right m-l-5"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/signUp/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/signUp/vendor/bootstrap/js/popper.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/signUp/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/signUp/vendor/daterangepicker/moment.min.js')}}"></script>
<script src="{{asset('assets/signUp/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/signUp/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('assets/signUp/js/main.js')}}"></script>
<script src="{{asset('assets/js/eyepass.js')}}"></script>

</body>
</html>