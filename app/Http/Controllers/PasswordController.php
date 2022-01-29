<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{

    public function passEdit(){
        return view('changePassword');
    }

    public function changePassword(Request $request){
        $this->validate($request,[
            'current_password'=>'required',
             'new_password' => 'required|min:6',
            'password_confirmation' => 'required|same:new_password'
        ]);
        if(Hash::check($request->current_password,Auth::user()->password)){ //check if user type his password true or not
            if( $request->new_password === $request->password_confirmation)
            {
                $user = User::findOrFail(Auth::user()->id);
                $user->password = Hash::make($request->new_password);     //encrypt user new password
                $user->save();
                session()->flash('change-pass' , 'You change password successfully');
            }else{
                session()->flash('change-error' , 'Password dose not Match !');
            }

        }else{
            session()->flash('change-error' , ' Your old Password dose not Correct !');
        }
        return view('changePassword');
    }
}
