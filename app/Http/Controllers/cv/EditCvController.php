<?php

namespace App\Http\Controllers\cv;

use App\Http\Controllers\Controller;
use App\Models\Cv;
use App\Traits\saveImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditCvController extends Controller
{
    use saveImage;

    public function edit($cv_id){
        $cv = CV::where('user_id',Auth::user()->id)->where('id' , $cv_id)->first();
        if (isset($cv) && $cv != null){
                return view('CV/editCv',['cv'=>$cv]);
            }else{
                return redirect(route('home'));
            }

    }


    public function updated(Request $request){
        $id = $request->id;
         $cvForm  = CV::find($id);
        $this->validate($request,[
            'title'    => 'required',
            'jobTitle' => 'required',
            'about'    => 'required',
            'education'    => 'required',
        ]);
        if($request->has('cvphoto')){
            if (isset($cvForm->cvphoto)){
                unlink('assets/images/person'.'/'.  $cvForm->cvphoto);
            }
            $cvForm->cvphoto = $this->saveImage($request->file('cvphoto'),'person');
        }
         $cvForm->title      = $request->title;
         $cvForm->about      = $request->about;
         $cvForm->education  = filter_var($request->education,FILTER_SANITIZE_STRING);
         $cvForm->experience = $request->experience;
         $cvForm->projects  = $request->projects;
         $cvForm->skills    = $request->skills;
         $cvForm->courses   = $request->courses;
         $cvForm->hobbits   = $request->hobbits;
         $cvForm->languages = $request->languages;
         $cvForm->portfolio = $request->portfolio;
         $cvForm->vulWorks  =  $request->vulWorks;
         $cvForm->save();

         return redirect(route('cv',[$cvForm->title]))->with(['cv'=>$cvForm]);
    }
}
