@extends('front2.layout')
@section('uiux')

    <div id="hero" class="hero overlay subpage-hero uiux-hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1>UI/UX Design</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">UI/UX Design</li>
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
                            <img src="{{asset('../assets/images/home/uiux/dobra.jpg')}}" class="img-res" alt="">
                        </div><!-- /.project-img -->
                        <div class="project-img">
                            <img src="{{asset('../assets/images/home/uiux/sve.png')}}" class="img-res" alt="">
                        </div><!-- /.project-img -->


                    </div>
                    <aside class="col-md-4">
                        <div class="project-info">
                            <h5>Description</h5>
                            <p>Starts from $39.99</p>
                            <p class="project-description">Our UI/UX design services offer a seamless and user-centric
                                approach to create visually stunning and intuitive digital experiences. Whether you need
                                a website, mobile app, or software interface, our skilled team of designers will deliver
                                high-quality results that engage and delight your users.</p>

                            <p>With our UI/UX design service, we prioritize the needs and preferences of your target
                                audience. We conduct thorough research and user testing to understand their behaviors,
                                expectations, and pain points. This allows us to create designs that are not only
                                visually appealing but also highly functional and user-friendly.</p>

                            <p>Our experienced designers specialize in creating clean, modern, and aesthetically
                                pleasing interfaces. We pay meticulous attention to typography, color schemes,
                                iconography, and overall layout to ensure a harmonious and visually cohesive design. By
                                incorporating the latest design trends and best practices, we deliver designs that are
                                both contemporary and timeless.</p>

                            <p>We believe that a great user experience is the key to success in the digital realm. Our
                                designers are adept at creating intuitive and interactive interfaces that guide users
                                seamlessly through the flow of your product. From clear navigation structures to
                                intuitive interactions and visual cues, we focus on enhancing usability and ensuring a
                                smooth user journey.</p>

                            <p>Collaboration is at the core of our UI/UX design process. We work closely with you to
                                understand your business goals, brand identity, and project requirements. By
                                incorporating your feedback and ideas throughout the design process, we ensure that the
                                final product aligns perfectly with your vision and objectives.</p>




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
                    @foreach($webDevelopmentPosts as $post)
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
