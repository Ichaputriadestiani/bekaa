@extends('layouts.admin.app')
@section ('content')
<div class="main-content" style="min-height: 555px;">
        <section class="section">
          <div class="section-header">
            <h1>Todo</h1>
            <div class="section-header-button">
              <a href="{{ $route }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Todos</a></div>
              <div class="breadcrumb-item">All Todos</div>
            </div>
          </div>
          <div class="section-body">
            <h2 class="section-title">Todo</h2>
            <p class="section-lead">
              You can manage all Todo, such as assign user, editing, deleting and more.
            </p>


            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>All Todos</h4>
                  </div>
                  <div class="card-body">


                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>Todo</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Created By</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($todo as $td)
                            <tr>
                                <td>{{ $td->todo }}<div class="table-links">
                              <a href="{{ route('todo.edit',$td->id) }}">Edit</a>
                              <div class="bullet"></div>
                              <a href="#" onclick="event.preventDefault(); $('#destroy-{{ $td->id }}').submit()">Delete</a>
                              <form id="destroy-{{ $td->id }}" action="{{ route('todo.destroy',$td->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                </form>
                            </div></td>
                                <td>{{ $td->start_date }}</td>
                                <td>{{ $td->end_date }}</td>
                                <td>{{ $td->created_at }}</td>
                                <td>{{ $td->user->name }}</td>
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
