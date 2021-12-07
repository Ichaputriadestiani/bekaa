<?php

namespace App\Http\Controllers;

use App\Models\ConsultSession;
use App\Models\User;
use App\Models\Post;

class FrontendController extends Controller
{
    public function index()
    {
        $data = [
            //'title' => 'Blog List',
            'post' => Post::orderBy('created_at','desc')->paginate(3),
        ];
        //dd($data);
        return view('/frontend.home',$data);

    }

    public function consult()
    {
        $data = [
            'sessions' => ConsultSession::where('user_id', auth()->user()->id)->get(),
            'mentor' => User::where('role', 'mentor')->get(),
        ];
        return view('frontend.consult', $data);
    }

    public function about()
    {
        return view('frontend.about');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
}
