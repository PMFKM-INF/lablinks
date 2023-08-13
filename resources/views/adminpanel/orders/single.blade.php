@extends('layouts.admin')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Order Details</h1>
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('orders.index') }}">Orders</a></li>
            <li class="breadcrumb-item active" aria-current="page">Order ID:{{ $order->id }}</li>
        </ol>

        <div class="card shadow mb-4">
            <div class="card-body">
                <h5 class="card-title">Order Information</h5>
                <p><strong>Name:</strong> {{ $order->name }}</p>
                <p><strong>Email:</strong> {{ $order->email }}</p>
                <p><strong>Phone number:</strong> {{ $order->phone_number }}</p>
                <p><strong>Type:</strong> {{ $order->type }}</p>
                <p><strong>Description:</strong> {{ $order->description }}</p>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-body">
                <h5 class="card-title">Download Images</h5>
                <div class="row">
                    @foreach ($order->images as $image)
                        <div class="col-md-4 mb-3">
                            <img src="{{ asset('images/' . $image->image) }}" class="img-fluid" alt="Image {{ $loop->iteration }}">
                        </div>
                    @endforeach
                </div>
                <div class="text-center">
                    @foreach ($order->images as $image)
                        <a href="{{ asset('images/' . $image->image) }}" class="btn btn-primary" download>Download Image {{ $loop->iteration }}</a>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
