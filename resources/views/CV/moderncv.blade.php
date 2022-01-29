<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!first mobile meta -->

    <title> CV FORM </title>
    <link rel="stylesheet"  href="{{asset("assets/css/bootstrap.css")}}" >
    <link rel="stylesheet"  href="{{asset("assets/css/style4.css")}}" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>


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
                doc.addImage(img,'PNG',0,0,210,300);
                doc.save('Resume');
            });

        }

    </script>

</head>
<body class="body4" style="background-color:#CFAD9B;">
<nav  class="navbar navbar-fixed-top" style="background-color: transparent; color:black;font-size: large;">
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
    <section style="margin-bottom: 20px">
        <div class="container-fluid">
            <div class="Row" >
                <div class="col-lg-4">
                    <div class="nav4">
                        <div class="topic1 text-center">
                            <h1  contenteditable="true" style="color: #000;">{{Auth::user()->name}}</h1>
                            @if($cv->cvphoto != null)
                                 <img src="{{asset("assets/images/person")}}/{{$cv->cvphoto}}" rel="{{Auth::user()->name}}" title="{{Auth::user()->name}}">
                            @else
                                <img  src="{{asset('assets/images/letters')}}/{{Auth::user()->photo}}" alt="{{Auth::user()->name}}" title="{{Auth::user()->name}}" >
                            @endif
                            <h2  contenteditable="true">{!! $cv->jobTitle !!}</h2>
                            <h3 >C O N T A C T</h3>
                            <table>
                                @if(Auth::user()->address != null)
                                    <tr>
                                        <td >
                                            <span class="fa fa-lg fa-home" aria-hidden="true"></span>
                                        </td>
                                        <td>
                                            <p contenteditable="true">{{Auth::user()->address}}</p>
                                        </td>
                                    </tr>
                                @endif
                                 @if(Auth::user()->phone != null)
                                    <tr>
                                        <td >
                                            <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
                                        </td>
                                        <td >
                                            <p contenteditable="true">{{Auth::user()->phone}}</p>
                                        </td>
                                    </tr>
                                @endif
                                @if(Auth::user()->email != null)
                                    <tr>
                                        <td >
                                            <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                        </td>
                                        <td >
                                            <p><a href="{{Auth::user()->email}}" contenteditable="true">{{Auth::user()->email}}</a></p>
                                        </td>
                                    </tr>
                               @endif
                                @if(Auth::user()->linkedin != null)
                                    <tr>
                                        <td >
                                            <span><i class="fa fa-linkedin fa-lg"></i></span>
                                        </td>
                                        <td>
                                            <p><a href="{{Auth::user()->linkedin}}" contenteditable="true">{{Auth::user()->linkedin}}</a></p>
                                        </td>
                                    </tr>
                                @endif
                            </table>
                        </div>
                        @if(!is_null($cv->courses))
                            <div class="topic3" contenteditable="true" >
                                <h2 class="BgHeader2">Courses</h2>
                                <ul class="list-unstyled ">
                                    <li contenteditable="true">{!! $cv->courses !!}</li>
                                </ul>
                            </div>
                        @endif
                        @if(!is_null($cv->languages))
                            <div class=" topic2" contenteditable="true" >
                                <h2 class="BgHeader2">Languages</h2>
                                <ul class="list-unstyled ">
                                    <li contenteditable="true">{!! $cv->languages !!}</li>
                                </ul>
                            </div>
                        @endif
                        @if(!is_null($cv->hobbits))
                            <div class="topic3" contenteditable="true" >
                                <h2 class="BgHeader2">Hobbits</h2>
                                <ul class="list-unstyled " >
                                    <li contenteditable="true">{!! $cv->hobbits !!}</li>
                                </ul>
                            </div>
                         @endif
                    </div>
                </div>
                <div class="col-lg-8 " style="background-color:gainsboro; height:auto">
                    @if($cv->about != null)
                        <div class="topic11" contenteditable="true" >
                            <h2 >PROFESSIONAL PROFILE</h2>
                            {!! $cv->about !!}
                        </div>
                    @endif
                    @if($cv->education != null)
                        <div class="topic21" contenteditable="true" style="margin-top: 40px">
                            <h2 >Education</h2>
                            {!! $cv->education !!}
                        </div>
                     @endif
                    @if($cv->experience != null)
                        <div class="topic21" contenteditable="true" style="margin-top: 50px">
                            <h2 >WORK EXPERINCE</h2>
                            {!! $cv->experience !!}
                        </div>
                    @endif
                    @if( $cv->skills != null )
                        <div class="topic21"  contenteditable="true">
                            <h2 >SKILLS</h2>
                           {!! $cv->skills !!}
                        </div>
                    @endif
                    @if(!is_null($cv->projects))
                        <div class="topic21" contenteditable="true" >
                            <h2 >Projects</h2>
                            {!! $cv->projects !!}
                        </div>
                    @endif
                    @if(!is_null($cv->vulWorks))
                        <div class="topic21" contenteditable="true" >
                            <h2 >Vul Excercies</h2>
                            {!! $cv->vulWorks !!}
                        </div>
                    @endif

                    @if(!is_null($cv->portfolio))
                            <div class="topic21" style="margin-bottom: 30px" contenteditable="true" >
                                <h2 >Portfolio</h2>
                                <a href="{{strip_tags($cv->portfolio)}}">{!! $cv->portfolio !!}</a>
                            </div>
                    @endif

                </div>
            </div>
        </div>
    </section>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>