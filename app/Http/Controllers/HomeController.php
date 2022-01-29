<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Cv;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
//        $admin = Admin::find(1);
        $admin = User::where('utype','ADM')->first();
        $allDowns = Cv::sum('downloads');
        $allUsers = User::all()->count();
        return view('home',['allDowns'=>$allDowns,'allUsers'=>$allUsers, 'admin'=>$admin]);
    }
}
