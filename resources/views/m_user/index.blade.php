@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="align-middle">CRUD User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">CRUD User</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="float-right">
                    <a class="btn btn-success" href="{{ route('m_user.create') }}"> Input User</a>
                </div>
            </div>
        </div>
        <div class="mb-4"></div> <!-- Added space below the header -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th width="20px" class="text-center">User ID</th>
                    <th width="150px" class="text-center">Level ID</th>
                    <th width="200px" class="text-center">Username</th>
                    <th width="200px" class="text-center">Nama</th>
                    <th width="150px" class="text-center">Password</th>
                    <th width="200px" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($useri as $m_user)
                    <tr>
                        <td class="text-center">{{ $m_user->user_id }}</td>
                        <td class="text-center">{{ $m_user->level_id }}</td>
                        <td>{{ $m_user->username }}</td>
                        <td>{{ $m_user->nama }}</td>
                        <td>{{ $m_user->password }}</td>
                        <td class="text-center">
                            <div class="btn-group" role="group" aria-label="Actions">
                                <a class="btn btn-info btn-sm action-btn" href="{{ route('m_user.show', $m_user->user_id) }}">Show</a>
                                <a class="btn btn-primary btn-sm action-btn" href="{{ route('m_user.edit', $m_user->user_id) }}">Edit</a>
                                <form action="{{ route('m_user.destroy', $m_user->user_id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm action-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $useri->links('vendor.pagination.bootstrap-4') }} <!-- Pagination links -->
        </div>
    </div>
</section>
@endsection

@section('css')
<style>
    .margin-tb {
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .table {
        margin-top: 20px;
    }
    .btn-group .btn {
        margin-right: 5px;
    }
    .alert-success {
        margin-top: 20px;
    }
    .action-btn {
        min-width: 75px;
        padding: 5px 10px;
        margin-right: 5px; /* Ensure consistent spacing */
        height: 38px; /* Set a fixed height for all buttons */
        line-height: 1.5; /* Center text vertically */
    }
    .btn-info, .btn-primary, .btn-danger {
        width: 75px; /* Ensure all buttons have the same width */
    }
    .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
    }
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }
    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
    }
    .content-header h1 {
        margin-bottom: 0;
        line-height: 1.5;
    }
    .content-header .align-middle {
        padding-top: 7px; /* Adjust this value as needed */
    }
    .content {
        padding-bottom: 20px; /* Add padding to the bottom */
    }
</style>
@endsection