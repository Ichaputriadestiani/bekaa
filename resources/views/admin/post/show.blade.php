@extends('layouts.admin.app')

@section('content')
<div class="main-content" style="min-height: 555px;">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ url()->previous() }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Posts</h1>
            <div class="section-header-button">
                <a href="{{ route('post.edit', $post) }}" class="btn btn-primary">Edit This</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Post</a></div>
                <div class="breadcrumb-item">Detail Post</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Detail Post</h2>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center mb-4">
                        <img src="{{ asset('images/banners/'.$post->banner) }}" style="max-height: 300px" alt="" class="img-thumbnail">
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Title : <b>{{ $post->title }}</b></p>
                        <p>Created By : <b>{{ $post->user->name }}</b></p>
                        <p>Category : <b>{{ $post->category->category_name }}</b></p>
                    </div>
                    <span>Excerpt: {{ $post->excerpt }}</span>
                    <p>Body :</p>
                    {!! $post->body !!}
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
