<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!first mobile meta -->

    <title>Visual CV</title>
    <link rel="stylesheet"  href="{{asset("assets/css/bootstrap.css")}}" >
    <link rel="stylesheet"  href="{{asset("assets/css/style3.css")}}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  />
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.css" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--[if it IE 9]>
    <script src="{{asset('js/html5shiv.min.js')}}" ></script>
    <script src="{{asset('js/respond.min.js')}}" ></script>
    <![endif]-->
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
            <a class="navbar-brand" href="/">Visual CV</a>
        </div>

        <div class="collapse navbar-collapse" id="ournavbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                            <img  src="{{asset('assets/images/letters')}}/{{Auth::user()->photo}}" alt="{{Auth::user()->photo}}">
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
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>

<div style="clear: both"></div>
<section class="search">
    <div class="container">
        <div class="searchbox text-center" style="margin-bottom:75px">
            <p style="color: orangered;font-size: 40px;
                      display: inline-block;  margin-right: 86px;"
            >Total Downloads</p>
            <span class="counter" style="font-size: 40px" data-target="{{$cv1Down+$cv2Down+$cv3Down+$cv4Down}}" >0</span>
        </div>
        <div class="all-cvs">
            <span><i class="fa fa-user-circle"> {{$cv1Count}}</i></span>
            <span><i class="fa fa-download"> {{$cv1Down}}</i></span>
            <img  src="{{asset("assets/images/cvform1.png")}}" width="200px" height="300px">
            <span><i class="fa fa-user-circle"> {{$cv2Count}}</i></span>
            <span><i class="fa fa-download"> {{$cv2Down}}</i></span>
            <img  src="{{asset("assets/images/cvform2.png")}}" width="200px" height="300px">
            <span><i class="fa fa-user-circle"> {{$cv3Count}}</i></span>
            <span><i class="fa fa-download"> {{$cv3Down}}</i></span>
            <img  src="{{asset("assets/images/cvform3.png")}}" width="200px" height="300px">
            <span><i class="fa fa-user-circle"> {{$cv4Count}}</i></span>
            <span><i class="fa fa-download"> {{$cv4Down}}</i></span>
            <img  src="{{asset("assets/images/cvform4.png")}}" width="200px" height="300px">
        </div>
    </div>
</section>
<section class="search" style="text-align: center;justify-content: center;margin-left: 200px">
{{--    admin table--}}
    <h2 style="margin-bottom: 20px;margin-right: 235px;color: blueviolet">This Admins Table </h2>
    <table style="width: 900px">
        <thead>
        <tr>
            <td>Admin id</td>
            <td>Name</td>
            <td>Email </td>
            <td>Created at</td>
            <td colspan="2" class="text-center">Action</td>
        </tr>
        </thead>
        <tbody>
        @if($admins != null)
            @foreach($admins as $admin)
                <tr>
                    <td>{{$admin->id}}</td>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->email}}</td>
                    <td>{{$admin->created_at}}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                                Change Type
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a  onclick="confirm('Are You Sure That You Want to Add this Admin to Users list ?') || event.stopImmediatePropagation()"  href="{{route('admin.privileges.edit',['id'=>$admin->id,'utype'=>'USR'])}}" >User</a></li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <a  onclick="confirm('Do You want to delete this Admin ?') || event.stopImmediatePropagation()" href="{{route('admin.privileges.delete',['id'=>$admin->id])}}" > <i class="fa fa-times fa-2x"></i> </a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr><td colspan="7">You are the only Admin Here</td></tr>
        @endif
        </tbody>
    </table>
{{--  USER TABLE--}}
    <h2 style="margin-bottom: 20px;margin-right: 235px;color: blueviolet">This Users Table </h2>

    <table style="width: 900px">
        <thead>
        <tr>
            <td>User id</td>
            <td>Name</td>
            <td>Email </td>
            <td>Created at</td>
            <td colspan="2" class="text-center">Action</td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                            Change Type
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a  onclick="confirm('Are You Sure That You Want to Add this User to Admin Team?') || event.stopImmediatePropagation()"  href="{{route('admin.privileges.edit',['id'=>$user->id,'utype'=>'ADM'])}}" >Admin</a></li>
                        </ul>
                    </div>
                </td>
                <td>
                    <a  onclick="confirm('Do You want to delete this User ?') || event.stopImmediatePropagation()" href="{{route('admin.privileges.delete',['id'=>$user->id])}}" > <i class="fa fa-times fa-2x"></i> </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</section>

<!-- start footer section-->
<section class="footer" style="background-color: black;padding: 10px;color: white">
    <div class="container text-center">
        <p>Copyright © 2022 Visual CV rights reserved by <span style="color: purple">Karim Fareg</span></p>
    </div>
</section>

<script src="{{asset("assets/js/plugin.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="{{asset("assets/js/counter.js")}}"></script>

</body>
</html>