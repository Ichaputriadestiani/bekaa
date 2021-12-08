<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'List Galeri',
            'post'  => Post::get(),
            'route' => route('post.create'),
        ];
        return view('admin.galeri.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'New Galeri',
            'method' => 'POST',
            'categories' => category::All(),
            'route' => route('post.store'),
        ];
        return view('admin.galeri.editor', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $user_id = auth()->user()->id;

        $file = $request->file('banner');
        $banner = 'banner-'.uniqid().'.'.$file->getClientOriginalExtension();
        $file->move('images/banners/', $banner);

        $post->user_id = $user_id;
        $post->banner = $banner;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category_id = $request->category;
        $post->save();
        return redirect()->route('galeri.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
            $data = [
                'title' => 'Post Detail',
                'post' => Post::where('slug',$slug)->first()
            ];
            //dd($data);
            return view('frontend.post',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Galeri',
            'method' => 'PUT',
            'route' => route('galeri.update', $id),
            'post' => Post::where('id', $id)->first(),
            'categories' => Category::get(),
        ];
        return view('admin.galeri.editor', $data);
        //dd($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $user_id = auth()->user()->id;

        if($request->hasFile('banner')){
            $file = $request->file('banner');
            if(file_exists(public_path('images/banners/'.$post->banner))){
                unlink(public_path('images/banners/'.$post->banner));
            }
            $banner = 'banner'.uniqid().'.'.$file->getClientOriginalExtension();
            $file->move('images/banners/', $banner);
            $post->banner = $banner;
        }

        //$post->user_id = $user_id;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category_id = $request->category;
        $post->update();
        return redirect()->route('galeri.index');
        //dd($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Post::where('id', $id);
        $destroy->delete();
        return redirect(route("galeri.index"));
    }
}
