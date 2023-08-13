@extends('layouts.admin')
@section('edit_post')
    <div class="container px-5 mt-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Edit Post</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-5">
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('post.index')}}">Portfolio</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit a post</li>
        </ol>
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Inputs</h6>
                        <form action="{{ route('post.update', $post->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="Title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="Title" name="Title"
                                       value="{{ $post->Title }}" placeholder="Title">
                            </div>
                            <div>
                                <label class="form-label">Category</label>
                                <select class="form-select form-select-lg" id="Category" name="Category">
                                    <option value="Image Editing">Image Editing</option>
                                    <option value="Custom Illustration">Custom Illustration</option>
                                    <option value="UI/UX Design">UI/UX Design</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="Description" class="form-label">Description</label>
                                <textarea class="form-control" id="Description" name="Description" rows="5"
                                          placeholder="Description">{{ $post->Description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-switch mb-2">
                                    <input type="hidden" name="Status" value="0">
                                    <input type="checkbox" class="form-check-input" id="statusCheckbox" name="Status"
                                           value="1" {{ $post->Status === 1 ? 'checked' : '' }}>

                                    <label class="form-check-label" for="statusCheckbox">Toggle this switch
                                        element</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="formFile">File upload</label>
                                <input class="form-control" type="file" id="formFile" name="image[]" multiple>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
