<?php

namespace App\Http\Controllers\cv;

use App\Http\Controllers\Controller;
use App\Models\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CvController extends Controller
{

    public function index(Request $request){
//            $user= Auth::user();
            $path= explode('/',$request->path());
            if(isset($path[1]) && $path[1]!= null){
                $cvform= CV::where('user_id',Auth::user()->id)->where('title',$path[1])->first();
                if($cvform != null){
                    return view('CV/'.$path[1],['cv'=>$cvform]);
                }else{
                    return redirect(route('home'));
                }
            }else{
                return redirect(route('home'));
            }

    }
    public function download($cv_id){
        $cv = Cv::find($cv_id);
        $cv->downloads = $cv->downloads + 1;
        $cv->save();
        return redirect()->route('cv',['title'=>$cv->title]);
    }
    public function deleteCV($cv_id){
        $cv = Cv::find($cv_id);
        $cv->delete();
        return redirect()->route('user.profile');
    }
    public function selection(){
        return view('CV/cvSelection');
    }
}
