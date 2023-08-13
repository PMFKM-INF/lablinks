@extends('layouts.admin')

@section('create_service')
    <div class="container px-5 mt-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Create Service</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container px-5">
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('service.index')}}">Service</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create a Service</li>
        </ol>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
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
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Inputs</h6>
                        <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="Title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="Title" name="Title"
                                       value="Amiah Burton" placeholder="Title">
                            </div>
                            <div class="mb-3">
                                <label for="Title" class="form-label">Price starts from</label>
                                <input type="text" class="form-control" id="Price" name="Price"
                                       value="" placeholder="Title">
                            </div>
                            <div class="mb-3">
                                <label for="Description" class="form-label">Description</label>
                                <textarea class="form-control" id="Description" name="Description" rows="5"
                                          placeholder="Description"></textarea>
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
