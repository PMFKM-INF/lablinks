@extends('front2.layout')
@section('portfolio')

    <div id="hero" class="hero overlay subpage-hero portfolio-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Portfolio</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Portfolio</li>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section subpage-site-section section-portfolio">
            <div class="container">
                <ul class="list-inline text-center">
                    <li><a href="{{ route('portfolio') }}"
                           class="btn btn-gray {{ !request('Category') ? ' active' : '' }}">All</a></li>
                    <li><a href="{{ route('portfolio', ['Category' => 'Image Editing']) }}"
                           class="btn btn-gray {{ request('Category') == 'Image Editing' ? ' active' : '' }}">Image Editing</a></li>
                    <li><a href="{{ route('portfolio', ['Category' => 'Custom Illustration']) }}"
                           class="btn btn-gray {{ request('Category') == 'Custom Illustration' ? ' active' : '' }}">Custom Illustration</a></li>
                    <li><a href="{{ route('portfolio', ['Category' => 'UI/UX Design']) }}"
                           class="btn btn-gray {{ request('Category') == 'UI/UX Design' ? ' active' : '' }}">UI/UX Design</a></li>
                </ul><!-- /.portfolio-sorting  -->

                <div id="grid" class="row">
                    @foreach ($posts as $post)
                        @if($post->Status == 1)
                            <div class="col-lg-3 col-md-4 col-xs-6">
                                <div class="portfolio-item">
                                    @if ($post->images->first())
                                        <img src="{{ asset('images/' . $post->images->first()->image) }}"
                                             class="img-res"
                                             style="height: 300px; object-fit: cover;"
                                             alt="Post Image">
                                    @else
                                        <img src="{{ asset('../assets/images/default-image.jpg') }}" class="img-res"
                                             style="height: 300px; object-fit: cover;"
                                             alt="Default Image">
                                    @endif
                                    <h4 class="portfolio-item-title">{{ $post->Title }}</h4>

                                    <a href="{{ route('postovi.show', $post->id) }}"><i class="fa fa-arrow-right"
                                                                                        aria-hidden="true"></i></a>
                                </div><!-- /.portfolio-item -->
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="text-center">
                    <a class="btn btn-gray" href="#" id="loadMore">Load More</a>
                </div>

            </div>
        </section><!-- /.section-portfolio -->

    </main><!-- /#main -->

@endsection
