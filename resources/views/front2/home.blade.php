@extends('front2.layout')
@section('home')

    <div id="hero" class="hero overlay">
        <div class="hero-content">
            <div class="hero-text">
{{--                <h1>Designing the future of digital experiences.</h1>--}}
                <a href="#services" class="btn btn-border"><b>Learn more</a>
                <a href="{{ route('contact.us.index') }}" class="btn btn-border"><b>Contact us</a>
            </div><!-- /.hero-text -->
        </div><!-- /.hero-content -->
    </div><!-- /.hero -->

    <main id="main" class="site-main">


        <section id="services" class="site-section section-services gray-bg text-center">
            <div class="container">
                <h2 class="heading-separator">Our Services</h2>
                <p class="subheading-text">The agency for brands with a problem to solve.</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service">
                            <div class="portfolio-item">
                                <img src="{{asset('../assets/img/programer.jpg')}}" class="img-res" alt="">
                                <h4 class="portfolio-item-title">Professional Image Editing</h4>
                                <a href="{{route('image-editing')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                            <h3 class="service-title"><a href="{{route('image-editing')}}">Professional Image Editing</a></h3>
                            <p class="service-info">Our skilled team utilizes industry-leading software like Photoshop
                                to provide high-quality image editing and manipulation services. Whether you need photo
                                retouching, background removal, or image enhancement, we can bring your visuals to
                                life.</p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-4">
                        <div class="service">
                            <div class="portfolio-item">
                                <img src="{{asset('../assets/images/home/dizajn/evo.jpg')}}" class="img-res" alt="">
                                <h4 class="portfolio-item-title">Custom Illustrations</h4>
                                <a href="{{route('custom-illustrations')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                            <h3 class="service-title"><a href="{{route('custom-illustrations')}}">Custom Illustrations</a></h3>
                            <p class="service-info">With our expertise in Illustrator, we offer exceptional vector
                                graphics and illustrations that are versatile and scalable. From creating logos and
                                icons to designing stunning artwork, our team brings creativity and precision to every
                                project. </p>
                        </div><!-- /.service -->
                    </div>
                    <div class="col-md-4">
                        <div class="service">
                            <div class="portfolio-item">
                                <img src="{{asset('../assets/img/uiux.jpg')}}" class="img-res" alt="">
                                <h4 class="portfolio-item-title">UI/UX Design</h4>
                                <a href="{{route('uiux-design')}}"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                            </div>
                            <h3 class="service-title"><a href="{{route('uiux-design')}}">UI/UX Design</a></h3>
                            <p class="service-info">For seamless user interface (UI) and user experience (UX) design, we
                                rely on Figma's collaborative design platform. Our team creates intuitive and visually
                                appealing designs that enhance user engagement and deliver exceptional digital
                                experiences.</p>
                        </div><!-- /.service -->
                    </div>
                </div>
            </div>
        </section><!-- /.section-services -->

        <section class="site-section section-features">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>Effective User Experience (UX) Design</h2>
                        <p>Effective User Experience (UX) design focuses on creating digital experiences that are intuitive, user-friendly, and engaging. It involves understanding user behaviors, needs, and goals to design interfaces that provide seamless interactions and enhance user satisfaction.</p>
                    </div>
                    <div class="col-sm-7 hidden-xs">
                        <img src="assets/img/laptop.png" alt="User Experience (UX) Design">
                    </div>
                </div>
            </div>
        </section><!-- /.section-features -->




        <section class="site-section section-map-feature text-center">
            <div class="container">
                <h2>Delivering Results with Responsive Web Design</h2>
                <p>Responsive web design ensures that your website adapts and performs flawlessly across all devices. It provides an optimal viewing experience, enhancing user engagement and satisfaction.</p>
                <a href="#" class="btn btn-fill">Learn More</a>
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="counter-item">
                            <p class="counter" data-to="500" data-speed="2000">0</p>
                            <h3>Satisfied Clients</h3>
                        </div><!-- /.counter-item -->
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="counter-item">
                            <p class="counter" data-to="1000" data-speed="2000">0</p>
                            <h3>Successful Projects</h3>
                        </div> <!-- /.counter-item -->
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="counter-item">
                            <p class="counter" data-to="250" data-speed="1000">0</p>
                            <h3>Positive Reviews</h3>
                        </div><!-- /.counter-item -->
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="counter-item">
                            <p class="counter" data-to="100" data-speed="1000">0</p>
                            <h3>Years of Experience</h3>
                        </div><!-- /.counter-item -->
                    </div>
                </div>
            </div>
        </section><!-- /.section-map-feature -->


        <section class="site-section section-portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="heading-separator">Latest Work</h2>
                    <p class="subheading-text">This is some of our best work</p>
                </div>

                <div class="row">
                    @foreach($posts as $post)
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

        <section class="site-section section-newsletter text-center">
            <div class="container">
                <h2>Subscribe to Our Newsletter</h2>
                <form class="form-group newsletter-group" action="{{ route('subscribe') }}" method="POST">
                    @csrf
                    <input type="email" class="form-control" name="email" placeholder="Your e-mail" required>
                    <button class="btn btn-green" type="submit">Subscribe</button>
                </form><!-- /.newsletter-group -->
            </div>
        </section><!-- /.section-newsletter -->


    </main><!-- /#main -->

@endsection
