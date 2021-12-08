@extends('layouts.admin.app')

@section ('content')
<div class="main-content" style="min-height: 524px;">
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ url()->previous() }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Create New Student</h1>
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
                        <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
                            <div class="d-flex justify-content-center">
                                <img id="preview-img" src="{{ asset('assets/gallery/'.($gallery->picture??'1.jpg')) }}" style="max-height: 150px" alt="" class="img-thumbnail">
                            </div>
                            @csrf
                            @method($method)
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Picture</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file" name="picture" class="form-control @error('picture') is-invalid @enderror" value="{{ old('picture', $gallery->picture??'') }}">
                                        @error('picture') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $gallery->title??'') }}">
                                        @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" style="min-height: 100px">{{ old('description', $gallery->description??'') }}</textarea>
                                        @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
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

@section('script')
    <script>
        $('input[name=picture]').on('change', function(){
            const [file] = $(this)[0].files;
            if(file){
                $('#preview-img').attr('src', URL.createObjectURL(file));
            }
        })
    </script>
@endsection
