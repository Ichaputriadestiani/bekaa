<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\User;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= [
            'title' => 'List Todo',
            'todo'  => Todo::get(),
            'route' => route('todo.create'),
        ];
        return view('admin.todo.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'New Todo',
            'method' => 'POST',
            'categories' => todo::All(),
            'route' => route('todo.store'),
            'users' => User::All(),
        ];
        return view('admin.todo.editor',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $td = new Todo;
            $user_id = auth()->user()->id;
            $td->user_id = $user_id;
            $td->todo = $request->todo;
            $td->assigned_to = $request->assignto;
            $td->start_date = $request->start;
            $td->end_date = $request->end;
            $td->save();
            return redirect()->route('todo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            'title' => 'Edit Todo',
            'method' => 'PUT',
            'route' => route('todo.update', $id),
            'td' => Todo::where('id', $id)->first(),
            'todo' => Todo::get(),
        ];
        return view('admin.todo.editor', $data);
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
        $td = Todo::find($id);
        $user_id = auth()->user()->id;
        $td->user_id = $user_id;
        $td->todo = $request->todo;
        $td->assigned_to = $request->assignto;
        $td->start_date = $request->start;
        $td->end_date = $request->end;
        $td->update();
        return redirect()->route('todo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Todo::where('id', $id);
        $destroy->delete();
        return redirect(route("todo.index"));
    }
}
