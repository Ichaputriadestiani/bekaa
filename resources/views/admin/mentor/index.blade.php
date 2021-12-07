@extends('layouts.admin.app')
@section ('content')
<div class="main-content" style="min-height: 555px;">
    <section class="section">
        <div class="section-header">
            <h1>Mentor</h1>
            <div class="section-header-button">
                <a href="{{ $route }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">{{ $title }}</a></div>
                <div class="breadcrumb-item">All {{ $title }}</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">{{ $title }}</h2>
            <p class="section-lead">
                You can manage all {{ $title }}, such as editing, deleting and more.
            </p>


            <div class="row mt-4">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All {{ $title }}</h4>
                        </div>
                        <div class="card-body">


                            <div class="clearfix mb-3"></div>

                            <div class="table-responsive">
                                <table id="table_id" class="display">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $u)
                                        <tr>
                                            <td>{{ $u->name }}
                                                <div class="table-links">
                                                    <a href="{{ route('user.student.edit',$u->id) }}">Edit</a>
                                                    <div class="bullet"></div>
                                                    <a href="#" onclick="event.preventDefault(); $('#destroy-{{ $u->id }}').submit()">Delete</a>
                                                    <form id="destroy-{{ $u->id }}" action="{{ route('user.student.destroy',$u->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            </td>
                                            <td>{{ $u->email }}</td>
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
    $(document).ready(function() {
        $('#table_id').DataTable();
    });

</script>
@endsection
