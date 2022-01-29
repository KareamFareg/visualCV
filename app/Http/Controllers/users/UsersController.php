<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\Cv;
use App\Traits\saveImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    use saveImage;


    public function index(){
        $cvs = Cv::where('user_id',Auth::user()->id)->get();

        return view('User/userProfile',['cvs'=>$cvs]);
    }


    public function edit(){
        return view('settings');
    }


    public function updated(Request $request){
      $user = Auth::user();
      $this->validate($request,[
          'name' => 'required',
          'email' => 'required|email',
          'linkedin' => 'required|email',
          'phone' =>'required|numeric',
      ]);
      $user->name =  $request->name;
      $user->email = $request->email;
      $user->address = $request->address;
      $user->phone   = $request->phone;
      $user->linkedin = $request->linkedin;
      if($request->has('photo')){
          $user->photo = $this->saveImage($request->file('photo'),'letters');
      }

      $user->save();
        session()->flash('success_message','You Edit Your Profile successfully');
        return view('settings');
    }



}
