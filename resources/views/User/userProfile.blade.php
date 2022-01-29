<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!first mobile meta -->

    <title>Dashboard</title>
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
            <a class="navbar-brand" href="/" title="Home">Visual CV</a>
        </div>

        <div class="collapse navbar-collapse" id="ournavbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <img  src="{{asset('assets/images/letters')}}/{{Auth::user()->photo}}" alt="{{Auth::user()->name}}" title="{{Auth::user()->name}}" height="60px" width="60px" >
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

<div style="clear: both"></div>
<section class="search" style="margin: 200px 80px">
     <h2 style="color: orangered">Create New CV <a href="{{route('cvselection')}}"><i  class="fa fa-plus-circle" style="cursor: pointer"></i></a></h2>
        <table>
            <tr>
                <th style="color: red">Id</th>
                <th>CV title</th>
                <th>your profile</th>
                <th>education</th>
                <th>experience</th>
                <th>skills</th>
                <th>projects</th>
                <th>courses</th>
                <th>languages</th>
                <th>hobbits</th>
                <th>exercises</th>
                <th>portfolio</th>
                <th>Downloads</th>
                <th style="color: red">options</th>
            </tr>
            @if($cvs != null)
               <p hidden> {{$i = 1}}</p>
                @foreach($cvs as $cv)
                    <tr>
                        <td style="color: red">{{$i++}}</td>
                        <td>{{strip_tags( $cv->title )}}</td>
                        <td>{{  substr(str_replace("&nbsp;", '',strip_tags($cv->about)),0,30)}}</td>
                        <td>{{ substr(str_replace("&nbsp;", '',strip_tags($cv->education)),0,30)}}</td>
                        <td>{{ substr(str_replace("&nbsp;", '',strip_tags($cv->experience)),0,30)}}</td>
                        <td>{{ substr(str_replace("&nbsp;", '', strip_tags($cv->skills)),0,30)}}</td>
                        <td>{{ substr(str_replace("&nbsp;", '',strip_tags($cv->projects)),0,30)}}</td>
                        <td>{{ substr(str_replace("&nbsp;", '',strip_tags($cv->courses)),0,30)}}</td>
                        <td>{{ substr(str_replace("&nbsp;", '',strip_tags($cv->languages)),0,30)}}</td>
                        <td>{{ substr(str_replace("&nbsp;", '',strip_tags($cv->hobbits)),0,30)}}</td>
                        <td>{{ substr(str_replace("&nbsp;", '',strip_tags($cv->exercises)),0,30)}}</td>
                        <td><a href="{{strip_tags($cv->portfolio)}}">{{substr(strip_tags($cv->portfolio),0,30)}}</a></td>
                        <td>{{$cv->downloads}}</td>
                        <td >
                            <a  href="{{route('editCV',['id'=>$cv->id])}}"><i class="fa fa-edit" style="font-weight: bold;color: purple;font-size: 20px"></i></a>
                            <a  onclick="confirm('Do You want to delete this CV ?') || event.stopImmediatePropagation()" href="{{route('cv.delete',['id'=>$cv->id])}}" > <i class="fa fa-times fa-2x"></i> </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr style="font-size: 20px; color: purple"><td colspan="15">You don't have any cv Yet you Can add one <a href="{{route('cvselection')}}"><i  class="fa fa-plus-circle" style="cursor: pointer"></i></a></td></tr>
            @endif
        </table>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset("assets/js/plugin.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
</body>
</html>