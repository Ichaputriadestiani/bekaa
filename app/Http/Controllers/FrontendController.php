<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ConsultSession;
use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

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
    public function blog(Request $request)
    {
        $data = [
            'title' => 'Blog List',
            'posts' => Post::orderBy('created_at','desc')->paginate(5),
            'categories' => Category::all()
        ];
        if($request->has('q')){
            $data['posts'] = Post::where('title', 'like', '%'.$request->q.'%')->orderBy('created_at','desc')->paginate(5);
        }
        return view('frontend.blog', $data);
    }
    public function post(Post $post)
    {
        return view('frontend.post', compact('post'));
    }
    public function gallery()
    {
        $galleries = \App\Models\Gallery::all();
        return view('frontend.gallery', compact('galleries'));
    }
}
