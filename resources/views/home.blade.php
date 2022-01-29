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
{{--    <link rel="stylesheet"  href="{{asset("assets/css/animate.css")}}">--}}
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.css" >

{{--    <link rel="stylesheet"  href="{{asset("assets/css/font-awesome.min.css")}}">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  />

    <!--[if it IE 9]>
    <script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('assets/js/respond.min.js')}}"></script>
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
                <span><a class="navbar-brand2 visible-xs" href="/">Visual CV</a></span>
            </div>
            <div class="collapse navbar-collapse" id="ournavbar">
                <ul class="nav navbar-nav ">
                    <li><a class="active" href="/">Home<span class="sr-only">(current)</span></a></li>
                    <li><a href="/contact">Contact US</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><span class="hidden-xs "><a href="#" class="navbar-brand" href="#" >Visual CV</a></span></li>
                    <li><a href="#services" style="color: white">Services</a></li>
                    <li>
                        @if(Route::has('login'))
                            @auth
                                @if(Auth::user()->utype === 'ADM')
                                    <img  src="{{asset('assets/images/letters')}}/{{Auth::user()->photo}}" alt="{{Auth::user()->name}}" title="{{Auth::user()->name}}"  height="60px" width="60px" style="border-radius: 50%"/>
                                    <div class="homeDropdown">
                            <button class="homeDropbtn">
                                {{Auth::user()->name}}
                                <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="homeDropdown-content">
                                <a style="margin:0px" title="Dashboard" href="{{route('admin.profile')}}">Dashboard</a>
                                <a style="margin:0px" title="Dashboard" href="{{route('user.edit')}}">Settings</a>
                                <a style="margin:0px" title="Dashboard" href="{{route('password.edit')}}">Change Password</a>
                                <a  style="margin: 0px; color:red" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" method="POST" action="{{route('logout')}}">
                                     @csrf
                                 </form>
                            </div>
                        </div>
                                @elseif(Auth::user()->utype === 'USR')
                                    <img  src="{{asset('assets/images/letters')}}/{{Auth::user()->photo}}" alt="{{Auth::user()->photo}}"  height="60px" width="60px" style="border-radius: 50%"/>
                                    <div class="homeDropdown">
                                        <button class="homeDropbtn">
                                           {{Auth::user()->name}}
                                            <i class="fa fa-caret-down"></i>
                                        </button>
                                        <div class="homeDropdown-content">
                                            <a style="margin:0px" title="Dashboard" href="{{route('user.profile')}}">Dashboard</a>
                                            <a style="margin:0px" title="Dashboard" href="{{route('user.edit')}}">Settings</a>
                                            <a style="margin:0px" title="Dashboard" href="{{route('password.edit')}}">Change Password</a>
                                            <a  style="margin: 0px; color:red" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                            <form id="logout-form" method="POST" action="{{route('logout')}}">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
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
    <div class="menu visible-lg ">
        <h2 class="wow bounceInLeft"data-wow-duration="3s"  data-wow-offset="550">Create a standout resume in minutes</h2>
        <p class="wow bounceInRight"data-wow-duration="3s" data-wow-delay="1s"  data-wow-offset="350">
            Easily create professional resumes, portfolios
            and personal landing pages.
        </p>
        <a class="create-btn center wow bounceInUp"  data-wow-duration="3s" data-wow-delay="2s"  data-wow-offset="300" href="{{route('cvselection')}}" style="border: 2px solid purple;">
            Build Your CV
        </a>

    </div>
</section>

<!--  start  about section-->


<section class="about text-center hidden-lg">
    <h2 class="wow bounceInLeft"data-wow-duration="3s"  data-wow-offset="350" style="visibility:visisble" >Create a standout resume in minutes</h2>
    <span class="wow bounceInRight"data-wow-duration="3s" data-wow-delay="1s"  data-wow-offset="350">
               Easily create professional resumes, portfolios
               and personal landing pages.
            </span>
    <a class="create-btn center wow bounceInUp"data-wow-duration="3s" data-wow-delay="2s"  data-wow-offset="300" href="{{route('cvselection')}}" style="border: 2px solid purple;">Build Your CV
    </a>
</section>


<!--  end  about section-->
<!--    start (Feature) section-->
<section class=" feature text-center">
    <h2 class="wow  bounceIn" data-wow-duration="3s" data-wow-offset="100">OUR FEATURES</h2>
    <div class="row ">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow  bounceInLeft" data-wow-duration="3s" data-wow-offset="200">
            <div>
                <span class="glyphicon glyphicon-ok "></span>
                <h4>100%responsive</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, expedita soluta mollitia accusamus ut architecto maiores cum fugiat. Pariatur ipsum officiis fuga deleniti alias quia nostrum veritatis enim doloremque eligendi?</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow  bounceInUp" data-wow-duration="3s" data-wow-offset="200">
            <div>
                <span class="glyphicon glyphicon-eye-open "></span>
                <h4>Awesome display</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, expedita soluta mollitia accusamus ut architecto maiores cum fugiat. Pariatur ipsum officiis fuga deleniti alias quia nostrum veritatis enim doloremque eligendi?</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow  bounceInDown" data-wow-duration="3s" data-wow-offset="200">
            <div>
                <span class="glyphicon glyphicon-pencil"></span>
                <h4>Well decomented</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, expedita soluta mollitia accusamus ut architecto maiores cum fugiat. Pariatur ipsum officiis fuga deleniti alias quia nostrum veritatis enim doloremque eligendi?</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow  bounceInRight" data-wow-duration="3s" data-wow-offset="200">
            <div>
                <span class="glyphicon glyphicon-thumbs-up "></span>
                <h4>Retina Ready</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, expedita soluta mollitia accusamus ut architecto maiores cum fugiat. Pariatur ipsum officiis fuga deleniti alias quia nostrum veritatis enim doloremque eligendi?</p>
            </div>
        </div>
    </div>


</section>
<!--    end (Feature) section-->

<!--       start of testimonials-->
<section class="testimonial visible-lg">
    <div class="testimonial-box " >
        <div class="wow zoomIn"  data-wow-duration="2s" data-wow-offset="400">
            <h2 class="text-center">WHAT OUR CLIENT SAY  </h2>
            <div class="container">
                <!-- start of carousel  -->

                <div id="secondcarousel" class="carousel slide " data-ride="carousel">

                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <p class="testi-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, expedita soluta mollitia accusamus ut architecto maiores cum fugiat. Pariatur ipsum officiis fuga deleniti alias quia nostrum veritatis enim doloremque eligendi?
                            </p>
                        </div>

                        <div class="item">
                            <p class="testi-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, expedita soluta mollitia accusamus ut architecto maiores cum fugiat. Pariatur ipsum officiis fuga deleniti alias quia nostrum veritatis enim doloremque eligendi?
                            </p>
                        </div>

                        <div class="item">
                            <p class="testi-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, expedita soluta mollitia accusamus ut architecto maiores cum fugiat. Pariatur ipsum officiis fuga deleniti alias quia nostrum veritatis enim doloremque eligendi?
                            </p>
                        </div>
                        <div class="item">
                            <p class="testi-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, expedita soluta mollitia accusamus ut architecto maiores cum fugiat. Pariatur ipsum officiis fuga deleniti alias quia nostrum veritatis enim doloremque eligendi?
                            </p>

                        </div>
                    </div>
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#secondcarousel" data-slide-to="0" class="active">
                            <img src="{{asset("assets/images/1.jpg")}}" alt="karem">
                        </li>
                        <li data-target="#secondcarousel" data-slide-to="1">
                            <img src="{{asset("assets/images/2.png")}}" alt="hassan">
                        </li>
                        <li data-target="#secondcarousel" data-slide-to="2">
                            <img src="{{asset("assets/images/3.jpg")}}" alt="ahmed">
                        </li>
                        <li data-target="#secondcarousel" data-slide-to="3">
                            <img src="{{asset("assets/images/4.png")}}" alt="ibrahim">
                        </li>

                    </ol>

                </div>
                <!-- End of carousel  -->

            </div>
        </div>
    </div>
</section>  <!-- End of testimonial section  -->

<!-- start  steps section-->
<section class="steps text-center" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 wow  bounceInLeft" data-wow-duration="3s" data-wow-offset="300">
                <img src="{{asset("assets/images/step1.png")}}">
                <h2>1. Choose Your Design</h2>
                <p>Whether it's a mind-blowing web portfolio or a professional PDF, every VisualCV template is carefully crafted to get you from application to interview.
                </p>
            </div>
            <div class="col-lg-4 wow  bounceInDown" data-wow-duration="3s" data-wow-offset="300">
                <img src="{{asset("assets/images/step2.png")}}">
                <h2>2. Create Custom Versions</h2>
                <p>In today's competitive market, customization is key. Easily manage multiple VisualCV versions, personalized for each application
                </p>
            </div>
            <div class="col-lg-4 wow  bounceInRight" data-wow-duration="3s" data-wow-offset="300">
                <img src="{{asset("assets/images/step3.png")}}">
                <h2>3. Track The Results</h2>
                <p>Don't get lost in the resume black hole. VisualCV analytics will let you know when your resume is viewed or downloaded so you can follow up.
                </p>
            </div>
        </div>
{{--        <a class="create-btn center wow  bounceInUp" data-wow-duration="3s" data-wow-offset="50" href="{{route('cvselection')}}" style="border: 2px solid purple;">Build Your CV</a>--}}
    </div>
</section>
<!--  end  steps section-->

<!--    start statics section -->
<section class="statistics">
    <div class="container">
        <div class="row">
            <h2 class="text-center wow  bounceInDown" data-wow-duration="2s" data-wow-offset="200">Our Main Statistics</h2>
            <h4 class="wow  bounceInLeft" data-wow-duration="3s" data-wow-offset="300">We Expect <span style="font-weight: bold">Excellence</span> Services</h4>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="stats text-center wow bounceInUp"data-wow-duration="3s"  data-wow-offset="300">
                    <i class="fa fa-users"></i>
                    <h6>{{$allUsers}} </h6>
                    <p> Users </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="stats text-center wow bounceInUp"data-wow-duration="3s" data-wow-delay="1s"  data-wow-offset="300">
                    <i class="glyphicon glyphicon-cloud-download"></i>
                    <h6>{{$allDowns}}</h6>
                    <p> DownLoad</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="stats text-center wow bounceInUp"data-wow-duration="3s" data-wow-delay="2s"  data-wow-offset="300">
                    <i class="glyphicon glyphicon-file"></i>
                    <h6>3</h6>
                    <p> CV Form Available </p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="stats text-center wow bounceInUp"data-wow-duration="3s" data-wow-delay="3s"  data-wow-offset="300">
                    <i class="fa fa-trophy"></i>
                    <h6>06</h6>
                    <p> Awards </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    end statics section -->
<!--       start of testimonials 2 section-->
<section class="testimonial2 text-center visible-lg">
    <!--        <h1 class="text-center">our Amazin  </h1>-->
    <div class="container ">
        <!-- start of carousel  -->

        <div id="thirdcarousel" class="carousel slide visible-lg" data-ride="carousel">

            <div class="carousel-inner" role="listbox">
                <div class=" item active">
                    <div class="row ">
                        <div class="col-lg-4">
                            <img src="{{asset("assets/images/cvform1.png")}}" style="width: 260px;height: 290px;" title="Modern CV">
                        </div>
                        <div class="col-lg-4">
                            <img src="{{asset("assets/images/cvform4.png")}}" style="width: 260px;height: 290px;"  title="Classic CV">
                        </div>
                        <div class="col-lg-4">
                            <img src="{{asset("assets/images/cvform3.png")}}" style="width: 260px;height: 290px;"  title="Professional CV">
                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="row ">
                        <div class="col-lg-4">
                            <img src="{{asset("assets/images/CV_Template4.png")}}">
                        </div>
                        <div class="col-lg-4">
                            <img src="{{asset("assets/images/CV_Template5.png")}}">
                        </div>
                        <div class="col-lg-4">
                            <img src="{{asset("assets/images/CV_Template6.png")}}">
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="row ">
                        <div class="col-lg-4">
                            <img src="{{asset("assets/images/CV_Template7.jpg")}}">
                        </div>
                        <div class="col-lg-4">
                            <img src="{{asset("assets/images/CV_Template8.png")}}">
                        </div>
                        <div class="col-lg-4">
                            <img src="{{asset("assets/images/CV_Template6.png")}}">
                        </div>
                    </div>
                </div>

            </div>
            <!-- Indicators -->
{{--            <ol class="carousel-indicators text-center">--}}
{{--                <li data-target="#thirdcarousel" data-slide-to="0" class="active">--}}
{{--                </li>--}}
{{--                <li data-target="#thirdcarousel" data-slide-to="1">--}}
{{--                </li>--}}
{{--                <li data-target="#thirdcarousel" data-slide-to="2">--}}
{{--                </li>--}}

{{--            </ol>--}}

        </div>
        <!-- End of carousel  -->
    </div>
</section>  <!-- End of testimonial2 section  -->


<!--    start our team section-->
<section class="our-team text-center" >
    <div class="team-box">
        <div class="container">
            <h2>Meat Our Awesome Team</h2>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="person wow zoomIn"  data-wow-duration="2s" data-wow-offset="300">
                        <img class="img-circle"src="{{asset("assets/images/tm2.jpg")}}" alt="Chris coiler" title="Chris coiler">
                        <h3>Chris coiler</h3>
                        <i class="fa fa-google-plus fa-lg"></i>
                        <i class="fa fa-facebook fa-lg"></i>
                        <i class="fa fa-twitter fa-lg"></i>
                        <i class="fa fa-instagram fa-lg"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="person wow zoomIn"  data-wow-duration="2s" data-wow-offset="300">
                        <img class="img-circle"src="{{asset("assets/images/tm3.jpg")}}" alt="John Deep" title="John Deep">
                        <h3>John Deep </h3>
                        <i class="fa fa-google-plus fa-lg"></i>
                        <i class="fa fa-facebook fa-lg"></i>
                        <i class="fa fa-twitter fa-lg"></i>
                        <i class="fa fa-instagram fa-lg"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="person wow zoomIn"  data-wow-duration="2s" data-wow-offset="300">
                        <img class="img-circle"src="{{asset("assets/images/tm4.jpg")}}" alt="Marrisa" title="Marrisa">
                        <h3>Marrisa</h3>
                        <i class="fa fa-google-plus fa-lg"></i>
                        <i class="fa fa-facebook fa-lg"></i>
                        <i class="fa fa-twitter fa-lg"></i>
                        <i class="fa fa-instagram fa-lg"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="person wow zoomIn"  data-wow-duration="2s" data-wow-offset="300">
                        <img class="img-circle"src="{{asset("assets/images/tm5.jpg")}}" alt="CR7" title="CR7">
                        <h3>C.Ronaldo</h3>
                        <i class="fa fa-google-plus fa-lg"></i>
                        <i class="fa fa-facebook fa-lg"></i>
                        <i class="fa fa-twitter fa-lg"></i>
                        <i class="fa fa-instagram fa-lg"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section> <!--    end our team section-->
<section class="subscribe text-center" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <h2>WHO WE ARE</h2>
                <p>Lorem ipsum is simply dummy text of the printing and typesetting industry.</p>
                <table>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-earphone" style="padding-right: 35px" aria-hidden="true"></span>
                        </td>
                        <td>
                            <p>{{$admin->phone}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-envelope" style="padding-right: 35px" aria-hidden="true"></span>
                        </td>
                        <td>
                            <p><a href="{{$admin->email}}">{{$admin->email}}</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="glyphicon glyphicon-map-marker" style="padding-right: 35px" aria-hidden="true"></span>
                        </td>
                        <td>
                            <p>{{$admin->address}}</p>
                        </td>
                    </tr>

                </table>

            </div>
            <div class="col-lg-8 col-sm-6">
                <h2>Keep in Touch</h2>
                <p>Please Subscribe to follow our works and keep in touch with us </p>
                <form class="form-inline" >
                    <input class="form-control input-lg" type="text" placeholder="Write your e-mail">
                    <button class="btn btn-danger btn-lg"> <i class="fa fa-edit fa-lg"></i> Subscribe</button>
                </form>
                <div class="social">
                    <i class=" fa fa-google-plus fa-lg"></i>
                    <i class="fa fa-facebook fa-lg"></i>
                    <i class="fa fa-twitter fa-lg"></i>
                    <i class="fa fa-instagram fa-lg"></i>
                </div>

            </div>
        </div>
    </div>

</section>


<!-- start footer section-->
<section class="footer">
    <div class="container text-center">
        <p>Copyright © 2018 Visual CV rights reserved. by <span>Karim Fareg</span></p>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset("assets/js/plugin.js")}}"></script>
<script src="{{asset("assets/js/wow.min.js")}}"></script>
<script> new WOW().init(); </script>
<script src="{{asset('assets/js/jquery.nicescroll.min.js')}}"></script>

</body>
</html>
