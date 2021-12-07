<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsultSession;
use App\Models\User;

class ConsultSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Konsultasi',
            'method' => 'GET',
            'route' => route('consult-session.create'),
            'consult' => ConsultSession::get()
        ];

        return view('admin.consult-session.index', $data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Buat Konsultasi',
            'method' => 'POST',
            'mentor' => User::where('role', 'mentor')->get(),
            'student' => User::where('role', 'student')->get(),
            'route' => route('consult-session.store')
        ];

        return view('admin.consult-session.editor', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'topic' => 'required',
            'user_id' => 'required',
            'mentor_id' => 'required',
            'start_at' => 'required',
            'link' => 'required',
        ]);

        $consult = new ConsultSession;
        $consult->topic = $request->topic;
        $consult->user_id = $request->user_id;
        $consult->mentor_id = $request->mentor_id;
        $consult->start_at = date('Y-m-d H:i:s', strtotime($request->start_at));
        $consult->end_at = date('Y-m-d H:i:s', strtotime($request->end_at));
        $consult->link = $request->link;
        $consult->save();

        return redirect()->route('consult-session.index')->with('success', 'Consult has been created');
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
            'title' => 'Ubah Konsultasi',
            'method' => 'PUT',
            'mentor' => User::where('role', 'mentor')->get(),
            'student' => User::where('role', 'student')->get(),
            'route' => route('consult-session.update', $id),
            'consult' => ConsultSession::find($id)
        ];

        return view('admin.consult-session.editor', $data);
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
        $request->validate([
            'topic' => 'required',
            'user_id' => 'required',
            'mentor_id' => 'required',
            'start_at' => 'required',
            'link' => 'required',
        ]);

        $consult = ConsultSession::where('id', $id)->first();
        $consult->topic = $request->topic;
        $consult->user_id = $request->user_id;
        $consult->mentor_id = $request->mentor_id;
        $consult->start_at = date('Y-m-d H:i:s', strtotime($request->start_at));
        $consult->end_at = date('Y-m-d H:i:s', strtotime($request->end_at));
        $consult->link = $request->link;
        $consult->save();

        return redirect()->route('consult-session.index')->with('success', 'Consult has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ConsultSession::find($id)->delete();
        return redirect()->route('consult-session.index')->with('success', 'Consult has been deleted');
    }
}
