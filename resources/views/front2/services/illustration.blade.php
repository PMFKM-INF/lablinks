@extends('front2.layout')
@section('illustration')

    <div id="hero" class="hero overlay subpage-hero illustration-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>Custom Illustraion</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Custom Illustraion</li>
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
                            <img src="{{asset('../assets/images/home/dizajn/Treca.jpg')}}" class="img-res" alt="">
                        </div><!-- /.project-img -->
                        <div class="project-img">
                            <img src="{{asset('../assets/images/home/ill/sve.png')}}" class="img-res" alt="">
                        </div><!-- /.project-img -->


                    </div>
                    <aside class="col-md-4">
                        <div class="project-info">
                            <h5>Description</h5>
                            <p>Starts from $39.99</p>
                            <p class="project-description">Our custom illustration services offer a creative and
                                artistic approach to transform your ideas into visually captivating designs. Whether you
                                need illustrations for a book, website, marketing materials, or any other project, our
                                skilled team of illustrators will deliver high-quality results.</p>

                            <p>With our custom illustration service, we can bring your concepts to life with precision
                                and attention to detail. Our experienced illustrators work closely with you to
                                understand your vision and create illustrations that perfectly match your requirements.
                                From character designs to intricate landscapes, we can create stunning visuals that
                                engage your audience.</p>

                            <p>We specialize in a variety of illustration styles, including traditional, digital, and
                                mixed media. Whether you prefer a classic and timeless look or a modern and vibrant
                                style, we can adapt our techniques to suit your needs. Our illustrators have expertise
                                in shading, color palettes, and composition, ensuring that each illustration is visually
                                appealing and harmonious.</p>

                            <p>Our custom illustrations can be tailored to match the tone and theme of your project.
                                Whether you're aiming for a whimsical and playful atmosphere or a sophisticated and
                                elegant aesthetic, our illustrators will carefully select the appropriate techniques and
                                elements to create the desired effect.</p>

                            <p>Partnering with us means receiving personalized attention and a collaborative approach.
                                We value your input and strive to exceed your expectations throughout the creative
                                process. With our custom illustration services, you can elevate your project with unique
                                and eye-catching visuals that leave a lasting impression.</p>


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
                    @foreach($illustration as $post)
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
