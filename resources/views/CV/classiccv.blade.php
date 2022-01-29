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
                doc.addImage(img,'PNG',0,0,210,300);
                doc.save('Resume');
            });


        }
    </script>
</head>
<body class="body5">
<nav class="navbar navbar-fixed-top" style="background-color: transparent; color:black;font-size: large">
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
<div id="capture">
{{--    personel information--}}
    <section class="main3"  style="background-color: transparent ">
        <div class="container" style="text-align: left; margin-left: 55px;">
            <h1 contenteditable="true">{!!Auth::user()->name!!}</h1>
            <h2 contenteditable="true">{!!$cv->jobTitle!!}</h2>
            @if(Auth::user()->address != null)
                <h6>
                    <i class="fa fa-lg fa-home" style="padding-right: 5px"></i>
                    {!!Auth::user()->address!!}
                </h6>
            @endif
            @if(Auth::user()->phone != null)
                <h6>
                    <i class="fa fa-phone fa-lg" style="padding-right: 5px"></i>
                    {!!Auth::user()->phone!!}
                </h6>
            @endif
            @if(Auth::user()->email != null)
                <div>
                    <i class=" glyphicon glyphicon-envelope" style="padding-right: 5px"></i>
                    <a href="{!!Auth::user()->email!!}">{!!Auth::user()->email!!}</a>
                </div>
            @endif
            <div style="display: block ; clear: both"></div>
            @if(Auth::user()->linkedin!= null)
                <span>
                  <i class="fa fa-linkedin fa-lg" style="padding-right: 5px"></i>
                  <a href="{!!Auth::user()->linkedin!!}" contenteditable="true">{!!Auth::user()->linkedin!!}</a>
                </span>
            @endif
        </div>
    </section>

{{--    <!--    end section of informations-->--}}

{{--    skills info section--}}
    <section class="sec4" style="text-align: left">
        <div class="container">
            <div class="row">
                @if($cv->about != null)
                    <div class="co-lg-8">
                         <h4 class="col-lg-12" style="border-bottom:2px solid black;color: #1581B0">Profile</h4>
                        <p contenteditable="true">{!!$cv->about!!}</p>
                    </div>
                @endif
                @if($cv->education != null)
                    <div class="co-lg-8">
                         <h4 class="col-lg-12" style="border-bottom:2px solid black;color: #1581B0">Education</h4>
                        <p  contenteditable="true">{!!$cv->education!!}</p>
                    </div>
                @endif
                @if($cv->experience != null)
                    <div class="co-lg-8">
                         <h4 class="col-lg-12" style="border-bottom:2px solid black;color: #1581B0">Experience</h4>
                        <p  contenteditable="true">{!!$cv->experience!!}</p>
                    </div>
                @endif
                @if($cv->skills != null)
                    <div class="co-lg-8">
                         <h4 class="col-lg-12" style="border-bottom:2px solid black;color: #1581B0">Skills</h4>
                        <p  contenteditable="true">{!!$cv->skills!!}</p>
                    </div>
                 @endif
                 @if($cv->projects != null)
                    <div class="co-lg-8">
                         <h4 class="col-lg-12" style="border-bottom:2px solid black;color: #1581B0">Projects</h4>
                        <p  contenteditable="true">{!!$cv->projects!!}</p>
                    </div>
                @endif
                @if($cv->courses != null)
                    <div class="co-lg-8">
                         <h4 class="col-lg-12" style="border-bottom:2px solid black;color: #1581B0">Courses</h4>
                        <p  contenteditable="true">{!!$cv->courses!!}</p>
                    </div>
                 @endif
                @if($cv->languages != null)
                    <div class="co-lg-8">
                         <h4 class="col-lg-12" style="border-bottom:2px solid black;color: #1581B0">Languages</h4>
                        <p  contenteditable="true">{!!$cv->languages!!}</p>
                    </div>
                @endif
                @if($cv->vulWorks != null)
                    <div class="co-lg-8">
                         <h4 class="col-lg-12" style="border-bottom:2px solid black;color: #1581B0">Excercies</h4>
                        <p contenteditable="true">{!!$cv->vulWorks!!}</p>
                    </div>
                 @endif
                @if($cv->hobbits)
                    <div class="co-lg-8">
                         <h4 class="col-lg-12" style="border-bottom:2px solid black;color: #1581B0">Hobbits</h4>
                        <p  contenteditable="true">{!!$cv->hobbits!!}</p>
                    </div>
                @endif
                @if($cv->portfolio)
                    <div class="co-lg-8">
                         <h4 class="col-lg-12" style="border-bottom:2px solid black;color: #1581B0">Portfolio</h4>
                        <p  contenteditable="true"><a href="{{strip_tags($cv->portfolio)}}" style="cursor: pointer">{!!$cv->portfolio!!}</a></p>
                    </div>
                 @endif
            </div>
        </div>

    </section>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</body>
</html>