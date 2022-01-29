
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create CV</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  />
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
    <script src="https://cdn.tiny.cloud/1/7z8zn802mzqo7exzuuj4dn84bf1f82dzekcf6frlbq2m9gp3/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{asset('assets/js/tinyeditor.js')}}"> </script>
</head>
<body style="background-color: #999999;">

<div class="limiter">
    <div class="container-login100">
        <div class="login100-more" style="background-image: url('{{asset('assets/signUp/images/bg-01.jpg')}}');"></div>

        <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
            <x-jet-validation-errors class="mb-4" />

            <form class="login100-form validate-form" method="post" action="{{route('cv')}}" enctype="multipart/form-data">
                @csrf
					<span class="login100-form-title p-b-59">
						Create Your Professional Cv
					</span>
                <div class="wrap-inputg100 validate-input" data-validate="Required">
                    <select name="title" required style="padding: 5px" >
                        <option value="">Choose CV Type</option>
                        <option value="classiccv">Classic</option>
                        <option value="moderncv">Modern</option>
                        <option value="proffessionalcv">Proffesional</option>
                        <option value="newcv">New</option>
                    </select>
                    @error('title')<span class="focus-input100 text-danger">{{$message}}</span>@enderror
                </div>
                <div class="wrap-input100 validate-input" data-validate="Required">
                    <span class="label-input100">Job Title</span>
                    <textarea class="input100"  name="jobTitle" placeholder="Enter Your Job Title ..." ></textarea>
                    @error('jobTitle')<span class="focus-input100 text-danger">{{$message}}</span>@enderror
                </div>
                <div class="wrap-input100 validate-input" data-validate="Required">
                    <span class="label-input100">Professional Profile</span>
                    <textarea class="input100" type="text" name="about" placeholder="enter some phrases about you ..." id="profile"></textarea>
                    @error('about')<span class="focus-input100 text-danger">{{$message}}</span>@enderror
                </div>

                <div class="wrap-input100 validate-input"  data-validate="Required">
                    <span class="label-input100">Education</span>
                    <input class="input100" type="text" name="education" placeholder="Enter Your  college..." id="education">
                    @error('education')<span class="focus-input100 text-danger">{{$message}}</span>@enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate="Required">
                    <span class="label-input100">Your Experience</span>
                    <textarea class="input100" type="text" name="experience" placeholder="Enter your experience with dates..." id="experience"></textarea>
                    @error('education')<span class="focus-input100 text-danger">{{$message}}</span>@enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Required">
                    <span class="label-input100">Skills </span>
                    <textarea class="input100"  name="skills" placeholder="Enter Your Skills seperated by - " id="skills"></textarea>
                    @error('skills')<span class="focus-input100 text-danger">{{$message}}</span>@enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Required">
                    <span class="label-input100">Projects</span>
                    <textarea class="input100"  name="projects" placeholder="Enter your projects...." id="projects"></textarea>
                    @error('projects')<span class="focus-input100 text-danger">{{$message}}</span>@enderror
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Required">
                    <span class="label-input100">Courses</span>
                    <textarea class="input100"  name="courses" placeholder="Enter your courses...." id="courses"></textarea>
                    @error('courses')<span class="focus-input100 text-danger">{{$message}}</span>@enderror
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Required">
                    <span class="label-input100">Languages</span>
                    <textarea class="input100"  name="languages" placeholder="Enter your languages...." id="languages"></textarea>
                    @error('languages')<span class="focus-input100 text-danger">{{message}}</span>@enderror
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Required">
                    <span class="label-input100">Exercises</span>
                    <textarea class="input100" name="vulWorks" placeholder="Enter your sharing Exercises...." id="vulWorks"></textarea>
                    @error('vulWorks')<span class="focus-input100 text-danger">{{$message}}</span>@enderror
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Required">
                    <span class="label-input100">Hobbits</span>
                    <textarea class="input100" name="hobbits" placeholder="Enter your Hobbits...." id="hobbits"></textarea>
                    @error('hobbits')<span class="focus-input100 text-danger">{{$message}}</span>@enderror
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Required">
                    <span class="label-input100">Portfolio</span>
                    <input class="input100"  name="portfolio" placeholder="Enter your Portfolio URL...." id="portfolio">
                    @error('portfolio')<span class="focus-input100 text-danger">{{$message}}</span>@enderror
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Required">
                    <input class="input100" type="file" name="cvphoto" placeholder="Select your Photo " required>
                    @error('cvphoto')<span class="focus-input100 text-danger">{{$message}}</span>@enderror
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <input  class="login100-form-btn" style="color: white; cursor: pointer;background-color: #0285A1" type="submit" value="Save CV">

                    </div>

                    <a href="{{route('user.profile')}}" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                        Dashboard
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
</body>
</html>