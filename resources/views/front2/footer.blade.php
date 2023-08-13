<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-4 col-xs-6">
                <a class="site-title"><span>Lab</span>Links</a>
                <p>We're a digital agency focused on creative and results-driven solutions.</p>
                <p>We measure our success by the results we drive for our clients.</p>
            </div>
            <div class="col-lg-offset-4 col-md-3 col-sm-4 col-md-offset-2 col-sm-offset-0 col-xs-6 ">
                <h3>Keep in touch</h3>
                <ul class="list-unstyled contact-links">
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@agencyperfect.com">info@lablinks.com</a></li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:++38100800000">+381 (00) 80 00 00 </a></li>
                    <li><i class="fa fa-fax" aria-hidden="true"></i><a href="+38100900000">+381 (00) 90 00 00</a></li>
                    <li><i class="fa fa-map-marker" aria-hidden="true"></i><p>Kosovska Mitrovica, Serbia</p></li>
                </ul>
            </div>
            <div class="clearfix visible-xs"></div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                <h3>Featured links</h3>
                <ul class="list-unstyled">
                    <li class="{{ Request::routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                    <li class="{{ Request::routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Services</a></li>
                    <li class="{{ Request::routeIs('portfolio') ? 'active' : '' }}"><a href="{{ route('portfolio') }}">Porfolio</a></li>
                    <li class="{{ Request::routeIs('contact.us.index') ? 'active' : '' }}"><a href="{{ route('contact.us.index') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-xs-8">
                    <div class="social-links">
                        <a class="twitter-bg" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="facebook-bg" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a>
                        <a class="linkedin-bg" href="#"><i class="fa fa-linkedin"></i></a>
                    </div><!-- /.social-links -->
                </div>
                <div class="col-xs-4">
                    <div class="text-right">
                        <p>&copy; LabLinks</p>
                        <p>All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.copyright -->
</footer><!-- /#footer -->
