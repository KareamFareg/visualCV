<?php

namespace App\Http\Controllers\cv;

use App\Http\Controllers\Controller;
use App\Models\Cv;
use App\Traits\saveImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateCvController extends Controller
{
    use saveImage;

    public function create(){
        return view('CV/createCv');
    }

    public function createCV(Request $request){
        if($request->has('cvphoto')){
            $photo = $this->saveImage($request->file('cvphoto'),'person');
        }
        $this->validate($request,[
            'title'    => 'required',
            'jobTitle' => 'required',
            'about'    => 'required',
            'education'    => 'required',
        ]);
        Cv::create([
            'title'      => $request->title,
            'jobTitle'      => filter_var($request->jobTitle,FILTER_SANITIZE_STRING),
            'about'      => $request->about,
            'education'  => $request->education,
            'experience' => $request->experience,
            'projects'   => $request->projects,
            'skills'     => $request->skills,
            'courses'    => $request->courses,
            'languages'  => $request->languages,
            'hobbits'    => $request->hobbits,
            'portfolio'  => $request->portfolio,
            'vulWorks'   => $request->vulWorks,
            'cvphoto'    => $photo,
            'user_id'    => Auth::user()->id,
        ]);
            $cv = CV::where('user_id',Auth::user()->id)->where('jobTitle',$request->jobTitle)->first();
          return view('CV/'.$request->title,['cv'=>$cv]);
    }

}
