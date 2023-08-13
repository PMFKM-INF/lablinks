@extends('front2.layout')
@section('image')

    <div id="hero" class="hero overlay subpage-hero image-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Image Editing</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Image Editing</li>
                </ol>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="site-section subpage-site-section section-project">

            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="project-img">
                            <img src="{{asset('../assets/images/home/dizajn/dobar2.jpeg')}}" class="img-res" alt="">
                        </div><!-- /.project-img -->

                        <div class="project-img">
                            <img src="{{asset('../assets/images/home/dizajn/sve.png')}}" class="img-res" alt="">
                        </div><!-- /.project-img -->

                    </div>
                    <aside class="col-md-4">
                        <div class="project-info">
                            <h5>Description</h5>
                            <p>Starts from $39.99</p>
                            <p class="project-description">Our professional image editing services can transform your
                                photos and make them look stunning. Whether you need retouching, color correction,
                                background removal, or any other enhancement, our skilled team will deliver high-quality
                                results.</p>

                            <p>With our image retouching service, we can eliminate imperfections, smooth out skin tones,
                                and enhance the overall appearance of your photos. Our experienced editors pay attention
                                to detail, ensuring that the final result looks natural and professional.</p>

                            <p>Color correction is another aspect we specialize in. We can adjust the colors, tones, and
                                contrast of your images to create a visually appealing look. Whether you want vibrant
                                and dynamic colors or a more subdued and moody atmosphere, we can achieve the desired
                                effect.</p>

                            <!-- /.project-cat -->

                            <a class="btn btn-gray" href="{{route('orders.create')}}">
                                Order now
                            </a>

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

        <section class="site-section subpage-site-section section-related-projects">
            <div class="container">
                <div class="text-left">
                    <h2>Related projects from our portfolio</h2>
                </div>
                <div class="row">
                    @foreach($images as $post)
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
            </div>
        </section><!-- /.section-portfolio -->

    </main><!-- /#main -->
@endsection
