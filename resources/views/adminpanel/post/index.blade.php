@extends('layouts.admin')
@section('post_index')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Portfolio Posts</h1>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('adminpanel.dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Portfolio Posts</li>
        </ol>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a class="btn btn-success" href="{{ route('post.create') }}"> Create New Post</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($posts as $item)
                            <tr>
                                <td>{{ $item->Title }}</td>
                                <td>{{ $item->Category }}</td>
                                <td class="description-cell">{{ $item->Description }}</td>
                                <td>{{ $item->Status }}</td>
                                <td>
                                    <a href="{{ route('post.show', $item->id) }}" class="btn btn-primary">Show</a>
                                    <a href="{{ route('post.edit', $item->id) }}" class="btn btn-secondary">Edit</a>
                                    <form action="{{ route('post.destroy', $item->id) }}" method="POST"
                                          class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="col d-flex justify-content-end">
                        {{ $posts->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->


@endsection
