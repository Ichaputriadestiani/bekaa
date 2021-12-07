@extends('layouts.admin.app')
@section ('content')
@php
$url = Route::current()->getName();
@endphp
<div class="main-content" style="min-height: 524px;">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ url()->previous() }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Create New {{ $title }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">{{ $title }}s</a></div>
                <div class="breadcrumb-item">Create New {{ $title }}</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Create New {{ $title }}</h2>
            <p class="section-lead">
                On this page you can create a new {{ $title }} and fill in all fields.
            </p>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Write Your {{ $title }}</h4>
                        </div>
                        <form action="{{ $route }}" method="POST">
                            @csrf
                            @method($method)
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Topik</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="topic" class="form-control" value="{{ str_contains($url, 'edit') ? $consult->topic : '' }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Siswa</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="user_id" id="siwa" class="form-control" required autofocus>
                                            <option disabled>Siswa</option>
                                            @foreach($student as $s)
                                            <option value="{{ str_contains($url, 'edit') ? $consult->user->id : $s->id }}">{{ $s->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Mentor</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select name="mentor_id" id="mentor" class="form-control" required autofocus>
                                            <option disabled>Mentor</option>
                                            @foreach($mentor as $m)
                                            <option value="{{ str_contains($url, 'edit') ? $consult->user->id : $m->id }}">{{ $m->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Dimulai</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="datetime-local" name="start_at" class="form-control" value="{{ str_contains($url, 'edit') ? $consult->start_at : $m->start_at }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Berakhir</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="datetime-local" name="end_at" class="form-control" value="{{ str_contains($url, 'edit') ? $consult->end_at : $m->end_at }}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tautan</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="link" class="form-control" value="{{ str_contains($url, 'edit') ? $consult->link : '' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </form>
</div>
</section>
</div>
@endsection
