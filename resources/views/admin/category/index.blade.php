@extends('layouts.admin.app')
@section ('content')
<div class="main-content" style="min-height: 555px;">
        <section class="section">
          <div class="section-header">
            <h1>Category</h1>
            <div class="section-header-button">
              <a href="{{ $route }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Category</a></div>
              <div class="breadcrumb-item">All Category</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Category</h2>
            <p class="section-lead">
              You can manage all category, such as editing, deleting and more.
            </p>


            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Category</h4>
                  </div>
                  <div class="card-body">


                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>Category</th>
                                <th>Slug</th>
                                <th>Date</th>
                                <th>Created By</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($category as $cat)
                            <tr>
                                <td>{{ $cat->category_name }}<div class="table-links">
                              <a href="{{ route('category.edit',$cat->id) }}">Edit</a>
                              <div class="bullet"></div>
                              <a href="#" class="delete-data">Delete</a>
                              <form action="{{ route('category.destroy',$cat->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                </form>
                            </div></td>
                                <td>{{ $cat->category_slug }}</td>
                                <td>{{ $cat->created_at }}</td>
                                <td>{{ $cat->user->name }}</td>
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
