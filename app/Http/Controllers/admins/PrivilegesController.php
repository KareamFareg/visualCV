<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\User;

class PrivilegesController extends Controller
{

    public function editUserType($user_id,$type){
        $user = User::find($user_id);
        $user->utype = $type;
        $user->save();
        return redirect()->route('admin.profile');
    }
    public function deleteUser($user_id){
        $user = User::find($user_id);
        $user->delete();
        return redirect()->route('admin.profile');
    }
}
