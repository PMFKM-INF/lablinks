@extends('front2.layout')
@section('single')

    <div id="hero" class="hero overlay subpage-hero portfolio-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Project Name</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('portfolio')}}">Portfolio</a></li>
                    <li class="breadcrumb-item active">{{$post->Title}}</li>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section subpage-site-section section-project">

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @foreach($post->images as $image)
                            <div class="project-img">
                                <img src="{{asset('images/'.$image->image)}}" class="img-res" alt="">
                            </div><!-- /.project-img -->
                        @endforeach

                    </div>
                    <aside class="col-md-4">
                        <div class="project-info">
                            <h5>Description</h5>

                            <p class="project-description">{{$post->Description}}</p>

                            <div class="project-date-category">
                                <p><span>Date:</span> {{$post->created_at0}}</p>
                                <p><span>Category:</span> {{$post->Category}}</p>
                            </div><!-- /.project-cat -->

                            <a href="#" class="btn btn-gray">Visit Site</a>

                            <div class="social-links">
                                <a class="twitter-bg" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="facebook-bg" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                                <a class="linkedin-bg" href="#"><i class="fa fa-linkedin"></i></a>
                            </div><!-- /.social-links -->

                        </div><!-- /.project-description -->
                    </aside>
                </div>
            </div>

        </section><!-- /.section-project -->


    </main><!-- /#main -->

@endsection
