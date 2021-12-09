@extends('layouts.admin.app')
@section ('content')
<div class="main-content" style="min-height: 555px;">
        <section class="section">
          <div class="section-header">
            <h1>Posts</h1>
            <div class="section-header-button">
              <a href="{{ $route }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Posts</a></div>
              <div class="breadcrumb-item">All Posts</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Posts</h2>
            <p class="section-lead">
              You can manage all posts, such as editing, deleting and more.
            </p>


            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Posts</h4>
                  </div>
                  <div class="card-body">


                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Category</th>
                                <th>Date</th>
                                <th>Created By</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($post as $ps)
                            <tr>
                                <td>{{ $ps->title }}
                                    <div class="table-links">
                                        <a href="{{ route('post.edit',$ps->id) }}">Edit</a>
                                        <div class="bullet"></div>
                                        <a href="#" class="delete-data">Delete</a>
                                        <form class="d-inline" action="{{ route('post.destroy',$ps->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                        <div class="bullet"></div>
                                        <a href="{{ route('post.show', $ps) }}">Show</a>
                                    </div>
                                </td>
                                <td>{{ $ps->slug }}</td>
                                <td>{{ $ps->category->category_name }}</td>
                                <td>{{ $ps->created_at }}</td>
                                <td>{{ $ps->user->name }}</td>
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

@section('script')
    <script>
        $(document).ready( function () {
        $('#table_id').DataTable();
    } );
</script>
@endsection
