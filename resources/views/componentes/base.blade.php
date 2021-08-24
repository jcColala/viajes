<!-- header -->
        @include('componentes.plantilla.header')
<!-- End header -->

<body>

<div class="preloader-area">
        <div class="spinner">
                <div class="inner">
                        <div class="disc"></div>
                        <div class="disc"></div>
                        <div class="disc"></div>
                </div>
        </div>
</div>

<!-- contenido  -->    
        @yield('content')
<!-- End contenido -->


<footer class="footer-area">
<div class="divider"></div>
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-footer-widget">
<div class="logo">
<a href="index.html"><img src="assets/img/white-logo.png" alt="image"></a>
</div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>
</div>
<div class="col-lg-2 col-md-6 col-sm-6">
<div class="single-footer-widget">
<h3>Company</h3>
<ul class="services-list">
<li><a href="about.html">About Us</a></li>
<li><a href="services-1.html">Services</a></li>
<li><a href="features-1.html">Features</a></li>
<li><a href="pricing.html">Our Pricing</a></li>
<li><a href="blog-1.html">Latest News</a></li>
</ul>
</div>
</div>
<div class="col-lg-2 col-md-6 col-sm-6">
<div class="single-footer-widget">
<h3>Support</h3>
<ul class="support-list">
<li><a href="faq.html">FAQ's</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms & Conditions</a></li>
<li><a href="about.html">Community</a></li>
<li><a href="contact.html">Contact Us</a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
<div class="single-footer-widget">
<h3>Contact Info</h3>
<ul class="footer-contact-info">
<li>Location: <a href="https://goo.gl/maps/MQ78iGP5g9VgZcJ38" target="_blank">6th Floor, Elegant Tower, York, USA</a></li>
<li>Email: <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#e8808d848487a89b9c9a8990c68b8785"><span class="__cf_email__" data-cfemail="0169646d6d6e4172757360792f626e6c">[email&#160;protected]</span></a></li>
<li>Phone: <a href="tel:+321754754">+0 (321) 984 754</a></li>
</ul>
<ul class="social">
<li><a href="#" target="_blank"><i class="bx bxl-facebook"></i></a></li>
<li><a href="#" target="_blank"><i class="bx bxl-twitter"></i></a></li>
<li><a href="#" target="_blank"><i class="bx bxl-linkedin"></i></a></li>
<li><a href="#" target="_blank"><i class="bx bxl-instagram"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="copyright-area">
<p>Copyright @ 2021 Strax. Designed by <a href="http://envytheme.com/" target="_blank">EnvyTheme</a></p>
</div>
</div>
</footer>

<div class="go-top"><i class='bx bx-chevron-up'></i></div>

<!-- footer -->
        @include('componentes.plantilla.footer')
<!-- End footer -->