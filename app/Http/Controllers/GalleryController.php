<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Add Picture';
        $method = 'POST';
        $route = route('gallery.store');
        return view('admin.gallery.editor', compact('title', 'method', 'route'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'picture' => 'required|image'
        ]);
        $picture = $request->file('picture');
        $name = uniqid().'.'.$picture->getClientOriginalExtension();
        $picture->move('assets/gallery/', $name);
        $validate['picture'] = $name;
        Gallery::create($validate);
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $title = 'Edit Picture';
        $method = 'PUT';
        $route = route('gallery.update', $gallery);
        return view('admin.gallery.editor', compact('title', 'method', 'route', 'gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $validate = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'picture' => 'sometimes|image'
        ]);
        if($request->hasFile('picture')){
            if(file_exists(public_path('assets/gallery/'.$gallery->picture))){
                unlink(public_path('assets/gallery/'.$gallery->picture));
            }
            $picture = $request->file('picture');
            $name = uniqid().'.'.$picture->getClientOriginalExtension();
            $picture->move('assets/gallery/', $name);
            $validate['picture'] = $name;
        }
        $gallery->update($validate);
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        if(file_exists(public_path('assets/gallery/'.$gallery->picture))){
            unlink(public_path('assets/gallery/'.$gallery->picture));
        }
        $gallery->delete();
        return back();
    }
}
