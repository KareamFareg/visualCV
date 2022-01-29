<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <!--
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!first mobile meta -->

    <title>Visual CV</title>
    <link rel="stylesheet"  href="{{asset("assets/css/bootstrap.css")}}" >
    <link rel="stylesheet"  href="{{asset("assets/css/style.css")}}" >
    <link rel="stylesheet"  href="{{asset("assets/css/animate.css")}}" >
    <link rel="stylesheet"  href="{{asset("assets/css/font-awesome.min.css")}}" />

    <!--[if it IE 9]>
    <script src="{{asset("assets/js/html5shiv.min.js")}}" ></script>
    <script src="{{asset("assets/js/respond.min.js")}}"></script>
    <![endif]-->
</head>
<body>
<section class="cont">
    <nav class="navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournavbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span><a class="navbar-brand2 visible-xs" href="#">Visual CV</a></span>

            </div>

            <div class="collapse navbar-collapse " id="ournavbar">
                <ul class="nav navbar-nav">
                    <li><a class="active" href="#">Home<span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Contact US</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><span class="hidden-xs "><a href="#" class="navbar-brand" href="#" >Visual CV</a></span></li>
                    <li><a href="#">Services</a></li>
                    <li>
                        @if(Route::has('login'))
                            @auth
                                @if(Auth::user()->utype === 'ADM')
                                    <div class="homeDropdown">
                                        <button class="homeDropbtn">
                                            My Account {{Auth::user()->name}}
                                            <i class="fa fa-caret-down"></i>
                                        </button>
                                        <div class="homeDropdown-content">
                                            <a style="margin:0px" title="Dashboard" href="{{route('admin.profile')}}">Dashboard</a>
                                            <a style="margin:0px" title="Dashboard" href="{{route('admin.profile')}}">Settings</a>
                                            <a  style="margin: 0px; color:red" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                            <form id="logout-form" method="POST" action="{{route('logout')}}">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                    </li>
                    @else
                        <li class="menu-item menu-item-has-children parent" >
                            <a title="My Account" href="{{route('user.profile')}}">
                                <img src="{{asset('assets/images/users')}}/{{Auth::user()->profile_photo_path}}" width="32px" height="32px" style="border-radius: 50%">
                                My Account {{Auth::user()->name}}<i class="fa fa-angle-down" aria-hidden="true">
                                </i></a>

                            <ul class="submenu" >
                                <li class="menu-item" >
                                    <a title="Dashboard" href="{{route('user.profile')}}">Dashboard</a>
                                </li>
                                {{--                                        <li class="menu-item" >--}}
                                {{--                                            <a title="Change Password" href="{{route('user.changePassword')}}">Change Password</a>--}}
                                {{--                                        </li>--}}
                                <li class="menu-item" >
                                    <a  href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                                <form id="logout-form" method="POST" action="{{route('logout')}}">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @endif
                    @else
                        <li class="menu-item" ><a title="Register or Login" href="{{route('login')}}">Login</a></li>
                        <li class="menu-item" ><a title="Register or Login" href="{{route('register')}}">Register</a></li>

                    @endif
                    @endif
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
</section>



<!-- start footer section-->
<section class="footer">
    <div class="container text-center">
        <p>Copyright © 2018 Visual CV rights reserved. by <span>Karim Fareg</span></p>
    </div>
</section>

{{--<!--    start loadin <!----}}
{{--    <section class="loading">--}}
{{--     <div class="sk-folding-cube">--}}
{{--      <div class="sk-cube1 sk-cube"></div>--}}
{{--      <div class="sk-cube2 sk-cube"></div>--}}
{{--      <div class="sk-cube4 sk-cube"></div>--}}
{{--      <div class="sk-cube3 sk-cube"></div>--}}
{{--     </div>--}}
{{--   </section>--}}
-->
<!--    download as pdf-->
<!--
    <a href="#" onclick="return xepOnline.Formatter.Format('content',{render:'download'});">
            Download
    </a>

-->
<script src="{{asset("assets/js/jquery-3.2.1.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.min.js")}}></script>
<script src="{{asset("assets/js/plugin.js")}}></script>
<script src="{{asset("assets/js/wow.min.js")}}></script>
<script>new WOW().init();</script>
<script src="{{asset("assets/js/jquery.nicescroll.min.js")}}"></script>
<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="http://www.cloudformatter.com/Resources/Pages/CSS2Pdf/Script/xepOnline.jqPlugin.js"></script>
<script src="xepOnline.jqPlugin.js"></script>
-->
</body>
</html>
