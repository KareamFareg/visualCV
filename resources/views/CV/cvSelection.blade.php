<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!first mobile meta -->

    <title>CV Form selection</title>
    <link rel="stylesheet"  href="{{asset("assets/css/bootstrap.css")}}" >
    <link rel="stylesheet"  href="{{asset("assets/css/style3.css")}}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  />

</head>
<body class="admprof">
<nav class="navbar  navbar-fixed-top text-center">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournavbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"  title="Home">Visual CV</a>
        </div>

        <div class="collapse navbar-collapse" id="ournavbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <img  src="{{asset('assets/images/letters')}}/{{Auth::user()->photo}}" alt="{{Auth::user()->name}}" title="{{Auth::user()->name}}"height="60px" width="60px" >
                    <div class="homeDropdown">
                        <button class="homeDropbtn">
                            {{Auth::user()->name}}
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="homeDropdown-content">
                            <a style="margin:0px" title="My account" href="{{route('user.profile')}}">Dashboard</a>
                            <a style="margin:0px" title="Change personal info" href="{{route('user.edit')}}">Settings</a>
                            <a style="margin:0px" title="Change account password" href="{{route('password.edit')}}">Change Password</a>
                            <a  style="margin: 0px; color:red" title="sign out" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" method="POST" action="{{route('logout')}}">
                                @csrf
                            </form>
                        </div>
                    </div>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
<h2 style="text-align: center;margin-top: 110px; margin-bottom:50px;font-weight: bold;color: purple">Choose one of those Resumes</h2>
<div class="content-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="product-holder">
                    <div class="product-item-2">
                        <div class="product-thumb">
                            <a href="{{route('createCV')}}"><img style="width: 260px;height: 290px;" src="{{asset("assets/images/cvform1.png")}}"></a>
                        </div> <!-- /.product-thumb -->
                        <div class="product-content overlay text-center">
                            <h1><a href="{{ route('createCV')}}">Modern CV</a></h1>
                            <h5 class="tagline">Free</h5>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-2 -->
                    <div class="clearfix"></div>
                </div> <!-- /.product-holder -->
            </div> <!-- /.col-md-3-->


            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="product-holder">
                    <div class="product-item-2">
                        <div class="product-thumb">
                            <a href="{{route('createCV')}}"><img style="width: 260px;height: 290px;" src="{{asset("assets/images/cvform2.png")}}"></a>
                        </div> <!-- /.product-thumb -->
                        <div class="product-content overlay text-center">
                            <h1><a  href="{{route('createCV')}}">Proff CV</a></h1>
                            <h5 class="price">Free</h5>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-2 -->
                    <div class="clearfix"></div>
                </div> <!-- /.product-holder -->
            </div> <!-- /.col-md-3-->


            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="product-holder">
                    <div class="product-item-2">
                        <div class="product-thumb">
                            <a href="{{route('createCV')}}"><img style="width: 260px;height: 290px;" src="{{asset("assets/images/cvform4.png")}}"></a>
                        </div> <!-- /.product-thumb -->
                        <div class="product-content overlay text-center">
                            <h1><a  href="{{route('createCV')}}">Classic CV</a></h1>
                            <h5 class="price">Free</h5>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-2 -->
                    <div class="clearfix"></div>
                </div> <!-- /.product-holder -->
            </div> <!-- /.col-md-3-->


            <div class="col-lg-3 col-sm-6 col-xs-12">
                <div class="product-holder">
                    <div class="product-item-2">
                        <div class="product-thumb">
                            <a href="CvForm4.html"><img style="width: 260px;height: 290px;"  src="{{asset("assets/images/cvform3.png")}}"></a>
                        </div> <!-- /.product-thumb -->
                        <div class="product-content overlay text-center">
                            <h1><a  href="{{route('createCV')}}">New CV</a></h1>
                            <h5 class="price">Free</h5>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item-2 -->
                    <div class="clearfix"></div>
                </div> <!-- /.product-holder -->
            </div> <!-- /.col-md-3-->
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
</body>
</html>