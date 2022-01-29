<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use App\Models\Cv;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminsController extends Controller
{
    public function index(){
        $cv1Count = Cv::where('title','moderncv')->count();
        $cv2Count = Cv::where('title','proffessionalcv')->count();
        $cv3Count = Cv::where('title','newcv')->count();
        $cv4Count = Cv::where('title','classiccv')->count();
        $cv1Down = Cv::where('title','moderncv')->sum('downloads');
        $cv2Down = Cv::where('title','proffessionalcv')->sum('downloads');
        $cv3Down = Cv::where('title','newcv')->sum('downloads');
        $cv4Down = Cv::where('title','classiccv')->sum('downloads');
        $allDowns = Cv::sum('downloads');
        $admins = User::where('utype','ADM')->get()->except(Auth::user()->id);
        $users = User::where('utype','USR')->get();

        return view('Admin/adminProfile',[
            'admins'=>$admins,
            'users'=>$users,
            'cv1Count'=>$cv1Count,
            'cv2Count'=>$cv2Count,'cv3Count'=>$cv3Count,'cv4Count'=>$cv4Count,
            'cv1Down'=>$cv1Down, 'cv2Down'=>$cv2Down,
            'cv3Down'=>$cv3Down,'cv4Down'=>$cv4Down, 'allDowns' => $allDowns
            ]);
    }

}
