@extends('front2.layout')
@section('order')

    <div id="hero" class="hero overlay subpage-hero order-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Order</h1>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section subpage-site-section gray-bg section-contact-us">

            <div class="container">
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
                    <div class="col-sm-7">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <h2>ORDER</h2>
                        <form method="POST" action="{{ route('orders.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               value="{{ old('name') }}" required>
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">E-mail:</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                               value="{{ old('email') }}" required>
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Phone number:</label>
                                        <input type="number" class="form-control" name="phone_number" id="phone_number"
                                               value="{{ old('phone_number') }}" required>
                                        @if ($errors->has('phone_number'))
                                            <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <select name="type" id="type" class="selectpicker" required>
                                        <option value="Photo editing">Photo editing</option>
                                        <option value="Illustration">Illustration</option>
                                        <option value="UI/UX design">UI/UX design</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Upload Image's:</label>
                                <input class="form-control" type="file" id="formFile" id="image" name="image[]" multiple>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea class="form-control form-control-comment" name="description" id="description"
                                          required>{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                            <div class="text-center">
                                <button class="btn btn-green" type="submit">Order now</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-5">
                        <div class="contact-info">
                            <h2>Contact information</h2>
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3>Address</h3>
                                    <ul class="list-unstyled">
                                        <li>Kosovska Mitrovica, Serbia</li>
                                        <li>100 Kralja Petra I</li>
                                    </ul>
                                    <h3>E-mail</h3>
                                    <a>lablinks@gmail.com</a>
                                    <h3>Phone</h3>
                                    <a>(+381) 65 65 65 65</a>
                                </div>
                            </div>
                        </div><!-- /.contact-info -->
                    </div>
                </div>
            </div>

        </section><!-- /.section-contact-us -->


    </main><!-- /#main -->

@endsection
