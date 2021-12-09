@extends('layouts.admin.app')

@section('content')
<div class="main-content" style="min-height: 555px;">
    <section class="section">
        <div class="section-header">
            <h1>Galleries</h1>
            <div class="section-header-button">
                <a href="{{ route('gallery.create') }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Gallery</a></div>
                <div class="breadcrumb-item">All Gallery</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Gallery</h2>
            <p class="section-lead">
                You can manage all Gallery, such as editing, deleting and more.
            </p>

            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Gallery</h4>
                        </div>
                        <div class="card-body">


                            <div class="clearfix mb-3"></div>

                            <div class="table-responsive">
                                <table id="table_id" class="display">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($galleries as $gallery)
                                        <tr>
                                            <td>{{ $gallery->title }}
                                                <div class="table-links">
                                                    <a href="{{ route('gallery.edit',$gallery) }}">Edit</a>
                                                    <div class="bullet"></div>
                                                    <a href="#" class="delete-data">Delete</a>
                                                    <form class="d-inline" action="{{ route('gallery.destroy', $gallery) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    <div class="bullet"></div>
                                                    <a href="{{ route('gallery.show', $gallery) }}">Show</a>
                                                </div>
                                            </td>
                                            <td>{{ $gallery->created_at }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
