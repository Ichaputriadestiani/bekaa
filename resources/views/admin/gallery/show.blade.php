@extends('layouts.admin.app')

@section('content')
<div class="main-content" style="min-height: 555px;">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ url()->previous() }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Galleries</h1>
            <div class="section-header-button">
                <a href="{{ route('gallery.edit', $gallery) }}" class="btn btn-primary">Edit This</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Gallery</a></div>
                <div class="breadcrumb-item">Detail Gallery</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Detail Gallery</h2>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="{{ asset('assets/gallery/'.$gallery->picture) }}" style="max-height: 300px" alt="" class="img-thumbnail">
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" name="title" class="form-control" readonly value="{{ $gallery->title }}">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                        <div class="col-sm-12 col-md-7">
                            <textarea name="description" class="form-control" readonly style="min-height: 100px">{{ $gallery->description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
