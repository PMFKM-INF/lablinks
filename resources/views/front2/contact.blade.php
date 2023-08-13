@extends('front2.layout')
@section('contact')

    <div id="hero" class="hero overlay subpage-hero contact-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Contact</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Contact</li>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section subpage-site-section gray-bg section-contact-us">

            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <h2>Send a message</h2>
                        <form method="POST" action="{{ route('contact.us.store') }}">
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
                            </div>
                            <div class="form-group">
                                <label for="message">Subject:</label>
                                <input class="form-control" name="subject" id="subject" value="{{ old('subject') }}"
                                       required></input>
                                @if ($errors->has('subject'))
                                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea class="form-control form-control-comment" name="message" id="message"
                                          required>{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                            <div class="text-center">
                                <button class="btn btn-green" type="submit">Contact us</button>
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


        <section id="team" class="site-section section-services  text-center">
            <div class="container">
                <h2 class="heading-separator">Our Team</h2>
                <p class="subheading-text">The agency for brands with a problem to solve.</p>
                <div class="row">
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="{{asset('../assets/images/about/ja.jpg')}}" alt="">
                            <h3 class="service-title">Popovic Vukasin</h3>
                            <p class="service-info"> Founder &amp; CEO</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="{{asset('../assets/images/about/nace.jpg')}}" alt="">
                            <h3 class="service-title">Nazlam Limance</h3>
                            <p class="service-info">CFO </p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="{{asset('../assets/images/about/djole.jpg')}}" alt="">
                            <h3 class="service-title">Djordje Markovic</h3>
                            <p class="service-info">Operations Manager</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-3 col-xs-6">
                        <div class="service">
                            <img src="{{asset('../assets/images/about/ilic.jpg')}}" alt="">
                            <h3 class="service-title">Nikola Ilic</h3>
                            <p class="service-info">CTO</p>
                        </div><!-- /.service -->
                    </div>
                </div>
            </div>
        </section><!-- /.section-services -->

    </main><!-- /#main -->

@endsection
