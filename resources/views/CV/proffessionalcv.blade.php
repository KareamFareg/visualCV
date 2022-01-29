<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!first mobile meta -->

    <title> CV FORM</title>
    <link rel="stylesheet"  href="{{asset("assets/css/bootstrap.css")}}" >
    <link rel="stylesheet"  href="{{asset("assets/css/style2.css")}}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
    <!--[if it IE 9]>
    <script src="{{asset('js/html5shiv.min.js')}}" ></script>
    <script src="{{asset('js/respond.min.js')}}" ></script>
    <![endif]-->

    <script type="text/javascript">
        window.html2canvas = html2canvas ;
        window.jsPDF=window.jspdf.jsPDF;
        function makePDF() {
            html2canvas(document.querySelector("#capture"),{
                allowTaint:true,
                useCORS: true,
                logging:true,
                dpi:1200,
                letterRendering:true,

            }).then(canvas => {
                var img = canvas.toDataURL("image/png");
                var doc = new  jsPDF();
                doc.setFontSize(12);

                // doc.addImage(img,'PNG',7,13,195,105);
                doc.addImage(img,'PNG',0,0,210,290);
                doc.save('Resume');
            });


        }
    </script>
</head>
<body>
<nav class="navbar navbar-fixed-top" style="background-color: transparent; color:black;font-size: large;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournavbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse " id="ournavbar">
            <ul class="nav navbar-nav" style="position: absolute;right:20px; ">
                <li><span class="hidden-xs "> <a href="#" class="navbar-brand" id="download" href="#" style="background-color: steelblue;color: white;"
                                                 onclick="makePDF();
                                                         function inc(){
                                                         window.location.href = '{{route('cv.download',['id'=>$cv->id])}}';
                                                         }
                                                         setTimeout(inc ,10000);" >Download</a>
                    </span></li>
                <li><a href="/editCV/{!!$cv->id!!}" style="background-color: green;color: white;">Edit & Save</a></li>
                <li><a href="{{route('user.profile')}}" style="background-color: purple;color: white;">Dashboard</a></li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>

{{--START OF CV--}}
<div id="capture">
    <section class="main2"  style="background-color: burlywood">
        <div class="container text-center">
            @if($cv->cvphoto != null)
                <img src="{{asset("assets/images/person")}}/{{$cv->cvphoto}}" rel="{{Auth::user()->name}}" title="{{Auth::user()->name}}">
            @else
                <img  src="{{asset('assets/images/letters')}}/{{Auth::user()->photo}}" alt="{{Auth::user()->name}}" title="{{Auth::user()->name}}" >
            @endif
             <h1 contenteditable="true">{{Auth::user()->name}}</h1>
            <h2  contenteditable="true">{!! $cv->jobTitle !!}</h2>
            <ul class="list-unstyled">
                @if(Auth::user()->address != null)
                    <li contenteditable="true">
                        <span class="fa fa-lg fa-home" aria-hidden="true"></span>
                        {{Auth::user()->address}}
                    </li>
                @endif
                @if(Auth::user()->phone != null)
                    <li contenteditable="true">
                        <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                        {{Auth::user()->phone}}
                    </li>
                @endif
                @if(Auth::user()->email != null)
                    <li style="border: none">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                        <a href="{{Auth::user()->email}}" contenteditable="true">{{Auth::user()->email}}</a>
                    </li>
                @endif
            </ul>
            <div style="display: block ; clear: both"></div>
            @if(Auth::user()->linkedin != null)
            <span>
              <i class="fa fa-linkedin fa-lg" style="padding-right: 5px"></i>
              <a href="{{Auth::user()->linkedin}}" contenteditable="true"> {{Auth::user()->linkedin}}</a>
            </span>
            @endif
        </div>
    </section>
    <section class="info2">
        <div class="container">
            <div class="Row">

                <div class="left text-center" >
                    <table>
                        @if($cv->about != null)
                            <tr>
                                <td></td>
                                <td>
                                    <h2 class="BgHeader2">PROFESSIONAL PROFILE</h2>
                                    {!! $cv->about !!}
                                </td>
                            </tr>
                        @endif
                        @if($cv->education != null)
                            <tr>
                                <td></td>
                                <td>
                                    <h2 class="BgHeader2" >EDUCATION</h2>
                                    <p>{!! $cv->education !!}</p>
                                </td>
                            </tr>
                        @endif
                        @if($cv->experience != null)
                            <tr>
                                <td></td>
                                <td>
                                    <h2 class="BgHeader2" >WORK EXPERINCE</h2>
                                   {!! $cv->experience !!}
                                </td>
                            </tr>
                        @endif
                        @if($cv->skills != null)
                            <tr>
                                <td></td>
                                <td>
                                    <h2 class="BgHeader2" >Skills</h2>
                                    {!!$cv->skills  !!}
                                </td>
                            </tr>
                        @endif
                        @if($cv->courses != null)
                            <tr>
                                <td></td>
                                <td>
                                    <h2 class="BgHeader2" >Courses</h2>
                                   {!!$cv->courses  !!}
                                </td>
                            </tr>
                        @endif
                        @if($cv->projects != null)
                            <tr>
                                <td></td>
                                <td>
                                    <h2 class="BgHeader2" >Projects</h2>
                                    {!! $cv->projects !!}
                                </td>
                            </tr>
                        @endif
                        @if($cv->languages != null)
                            <tr>
                                <td></td>
                                <td>
                                    <h2 class="BgHeader2">LANGUAGES</h2>
                                    {!! $cv->languages !!}
                                </td>
                            </tr>
                        @endif
                        @if($cv->vulWorks != null)
                            <tr>
                                <td></td>
                                <td>
                                    <h2 class="BgHeader2">VUL EXERCISES</h2>
                                   {!! $cv->vulWorks !!}
                                </td>
                            </tr>
                        @endif
                        @if($cv->hobbits != null)
                            <tr>
                                <td></td>
                                <td>
                                    <h2 class="BgHeader2">HOBBITS</h2>
                                  {!! $cv->hobbits !!}
                                </td>
                            </tr>
                        @endif
                        @if($cv->portfolio != null)
                            <tr>
                                <td></td>
                                <td>
                                    <h2 class="BgHeader2">PORTFOLIO</h2>
                                   <a href="{{strip_tags($cv->portfolio)}}">{!!$cv->portfolio  !!}</a>
                                </td>
                            </tr>
                         @endif
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>