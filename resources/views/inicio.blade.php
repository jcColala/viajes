@extends('componentes.base')

@section('content')
@include('componentes.plantilla.menu_inicio')

<div class="banner-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-12">
                <div class="banner-content">
                    <div class="content">
                        <div class="banner-content-slides owl-carousel owl-theme">
                            <div class="inner-content plr-15">
                                <h1>Web And Mobile App Development</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                <a href="contact.html" class="default-btn">
                                    <i class="bx bxs-hot"></i>
                                    Contact Us
                                    <span></span>
                                </a>
                            </div>
                            <div class="inner-content plr-15">
                                <h1>Solve Business Challenges With IT</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                <a href="contact.html" class="default-btn">
                                    <i class="bx bxs-hot"></i>
                                    Contact Us
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="banner-img banner-video">
                    <div class="d-table">
                    <div class="d-table-cell">
                        <div class="video-box">
                            <a href="https://www.youtube.com/watch?v=0gv7OC9L2s8" class="video-btn popup-youtube">
                            <i class="bx bx-play"></i>
                            </a>
                            <div class="shape1"><img src="assets/img/shape/1.png" alt="image"></div>
                            <div class="shape2"><img src="assets/img/shape/2.png" alt="image"></div>
                            <div class="shape3"><img src="assets/img/shape/3.png" alt="image"></div>
                            <div class="shape4"><img src="assets/img/shape/4.png" alt="image"></div>
                            <div class="shape5"><img src="assets/img/shape/5.png" alt="image"></div>
                            <div class="shape6"><img src="assets/img/shape/6.png" alt="image"></div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape19"><img src="assets/img/shape/18.png" alt="image"></div>
    <div class="shape22"><img src="assets/img/shape/21.png" alt="image"></div>
    <div class="shape23"><img src="assets/img/shape/22.svg" alt="image"></div>
    <div class="shape24"><img src="assets/img/shape/23.png" alt="image"></div>
    <div class="shape25"><img src="assets/img/shape/24.png" alt="image"></div>
    <div class="shape26"><img src="assets/img/shape/25.png" alt="image"></div>
    <div class="shape20"><img src="assets/img/shape/19.png" alt="image"></div>
</div>

<section class="features-area pt-100 pb-70 bg-f4f6fc">
    <div class="container max-width-1290">
        <div class="section-title">
            <h2>Our amazing features</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="features-box-one wow fadeInLeft" data-wow-delay=".1s">
                    <i class='bx bx-cog bg-13c4a1'></i>
                    <h3>Fast and Optimized</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="features-box-one wow fadeInLeft" data-wow-delay=".2s">
                    <i class='bx bxs-check-shield bg-6610f2'></i>
                    <h3>Full Security</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="features-box-one wow fadeInLeft" data-wow-delay=".3s">
                    <i class='bx bx-timer bg-ffb700'></i>
                    <h3>Time Saving</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="features-box-one wow fadeInLeft" data-wow-delay=".4s">
                    <i class='bx bx-badge-check bg-fc3549'></i>
                    <h3>Easily Manage</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="features-box-one wow fadeInLeft" data-wow-delay=".5s">
                    <i class='bx bxs-lock-open bg-00d280'></i>
                    <h3>Quick Access</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="features-box-one wow fadeInLeft" data-wow-delay=".6s">
                    <i class='bx bxs-droplet-half bg-ff612f'></i>
                    <h3>Drag and Drop</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-area ptb-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="services-image wow fadeInLeft" data-wow-delay=".3s">
                <div class="image">
                    <img src="assets/img/home-saas/feature1.png" alt="image">
                </div>
            </div>
            <div class="services-content it-service-content">
                <div class="content">
                    <div class="features-inner-content">
                        <div class="features-item wow fadeInRight" data-wow-delay=".1s">
                            <i class='bx bx-phone-call bg-13c4a1 blt-radius-0'></i>
                            <h3>Free Caliing Service</h3>
                            <p>Plan ahead by day, week, or month, and see project status at a glance. Search and filter to focus in on anything form a single project to an individual person's workload.</p>
                        </div>
                        <div class="features-item wow fadeInRight" data-wow-delay=".2s">
                            <i class='bx bx-gift bg-6610f2 blt-radius-0'></i>
                            <h3>Daily Free Gift</h3>
                            <p>Plan ahead by day, week, or month, and see project status at a glance. Search and filter to focus in on anything form a single project to an individual person's workload.</p>
                        </div>
                        <div class="features-item wow fadeInRight" data-wow-delay=".3s">
                            <i class='bx bx-code-alt bg-ff612f blt-radius-0'></i>
                            <h3>QR Code Scaner</h3>
                            <p>Plan ahead by day, week, or month, and see project status at a glance. Search and filter to focus in on anything form a single project to an individual person's workload.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape9">
    <img src="assets/img/shape/9.png" alt="image">
    </div>
</section>


<section class="faq-area ptb-100">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                <div class="faq-accordion">
                    <h2>Get to know about <span>Strax</span></h2>
                    <ul class="accordion">
                    <li class="accordion-item">
                        <a class="accordion-title active" href="javascript:void(0)">
                            <i class="bx bx-plus"></i>
                            What access do I have on the free plan?
                        </a>
                        <p class="accordion-content show">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </li>
                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="bx bx-plus"></i>
                            What access do I have on a free trial?
                        </a>
                        <p class="accordion-content">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                         </p>
                    </li>
                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="bx bx-plus"></i>
                            Does the price go up as my team gets larger?
                        </a>
                        <p class="accordion-content">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </li>
                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="bx bx-plus"></i>
                            How can I cancel/pause my subscription?
                        </a>
                        <p class="accordion-content">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </li>
                    <li class="accordion-item">
                        <a class="accordion-title" href="javascript:void(0)">
                            <i class="bx bx-plus"></i>
                            Can I pay via an invoice?
                        </a>
                        <p class="accordion-content">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="faq-image">
                    <img src="assets/img/faq-img1.png" alt="image">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features-area pt-100 pb-70 bg-f4f6fc">
    <div class="container">
        <div class="section-title">
            <h2>Our Amazing Features</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-features-box wow fadeInRight" data-wow-delay=".1s">
                    <div class="icon">
                        <i class='bx bxs-badge-check'></i>
                    </div>
                    <h3>IT Solutions</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-features-box wow fadeInRight" data-wow-delay=".2s">
                    <div class="icon">
                        <i class='bx bx-cog'></i>
                    </div>
                    <h3>Flexible Functionality</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-features-box wow fadeInRight" data-wow-delay=".3s">
                    <div class="icon">
                        <i class='bx bx-conversation'></i>
                    </div>
                    <h3>IT Consultancy</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-features-box wow fadeInRight" data-wow-delay=".4s">
                    <div class="icon">
                        <i class='bx bxs-dashboard'></i>
                    </div>
                    <h3>Simple Dashboard</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-features-box wow fadeInRight" data-wow-delay=".5s">
                    <div class="icon">
                        <i class='bx bxs-info-circle'></i>
                    </div>
                    <h3>Information Retrieval</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-features-box wow fadeInRight" data-wow-delay=".6s">
                    <div class="icon">
                        <i class='bx bxs-bell-ring'></i>
                    </div>
                    <h3>Deadline Reminders</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="testimonials-area pt-100 pb-70">
<div class="container">
<div class="section-title">
<h2>Whats Our Clients Said About <span>Strax</span></h2>
</div>
<div class="row">
<div class="col-lg-6 col-sm-6">
<div class="single-testimonials-item">
<div class="client-info">
<img src="assets/img/author-image/6.jpg" alt="image">
<h3>Michel John</h3>
<span>CEO at Envato</span>
</div>
<div class="testimonials-desc">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
<div class="rating">
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="single-testimonials-item">
<div class="client-info">
<img src="assets/img/author-image/7.jpg" alt="image">
<h3>Sarah Taylor</h3>
<span>CEO at EnvyTheme</span>
</div>
<div class="testimonials-desc">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
<div class="rating">
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="single-testimonials-item">
<div class="client-info">
<img src="assets/img/author-image/8.jpg" alt="image">
<h3>James Andy</h3>
<span>CEO at 3S</span>
</div>
<div class="testimonials-desc">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
<div class="rating">
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="single-testimonials-item">
<div class="client-info">
<img src="assets/img/author-image/9.jpg" alt="image">
<h3>Jisan James</h3>
<span>CEO at IT4u</span>
</div>
<div class="testimonials-desc">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse.</p>
<div class="rating">
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
<i class="bx bxs-star"></i>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="our-loving-clients ptb-100 bg-color-f8fbfa">
<div class="container">
<div class="section-title">
<h2>Our Loving Clients</h2>
</div>
<div class="clients-logo-list align-items-center">
<div class="single-clients-logo">
<a href="#">
<img src="assets/img/clients-image/1.png" alt="image">
</a>
</div>
<div class="single-clients-logo">
<a href="#">
<img src="assets/img/clients-image/2.png" alt="image">
</a>
</div>
<div class="single-clients-logo">
<a href="#">
<img src="assets/img/clients-image/3.png" alt="image">
</a>
</div>
<div class="single-clients-logo">
<a href="#">
<img src="assets/img/clients-image/4.png" alt="image">
</a>
</div>
<div class="single-clients-logo">
<a href="#">
<img src="assets/img/clients-image/5.png" alt="image">
</a>
</div>
<div class="single-clients-logo">
<a href="#">
<img src="assets/img/clients-image/6.png" alt="image">
</a>
</div>
<div class="single-clients-logo">
<a href="#">
<img src="assets/img/clients-image/7.png" alt="image">
</a>
</div>
<div class="single-clients-logo">
<a href="#">
<img src="assets/img/clients-image/8.png" alt="image">
</a>
</div>
<div class="single-clients-logo">
<a href="#">
<img src="assets/img/clients-image/9.png" alt="image">
</a>
</div>
</div>
</div>
</section>


<section class="app-download-area ptb-100">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-5 col-md-12">
<div class="app-download-image">
<img src="assets/img/mobile.png" alt="image">
</div>
</div>
<div class="col-lg-7 col-md-12">
<div class="app-download-content">
<span class="sub-title">Download App</span>
<h2>Supporting your customers on the go with our mobile app</h2>
<div class="btn-box">
<a href="#" class="apple-store-btn">
<img src="assets/img/applestore.png" alt="image">
Download on the
<span>Apple Store</span>
</a>
<a href="#" class="play-store-btn">
<img src="assets/img/playstore.png" alt="image">
Get it on
<span>Google Play</span>
</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="subscribe-area bg-f4f5fe">
<div class="container">
<div class="subscribe-content">
<h2>We always try to be as close to you as possible</h2>
<form class="newsletter-form" data-bs-toggle="validator">
<div class="row align-items-center">
<div class="col-lg-8 col-md-8">
<input type="email" class="input-newsletter" placeholder="hello@strax.com" name="EMAIL" required autocomplete="off">
</div>
<div class="col-lg-4 col-md-4">
<button type="submit"><i class="bx bxs-hot"></i> Subscribe Now</button>
</div>
<div class="col-lg-12 col-md-12">
<div id="validator-newsletter" class="form-result"></div>
</div>
</div>
</form>
<div class="shape14"><img src="assets/img/shape/13.png" alt="image"></div>
<div class="shape15"><img src="assets/img/shape/14.png" alt="image"></div>
<div class="shape16"><img src="assets/img/shape/15.png" alt="image"></div>
<div class="shape17"><img src="assets/img/shape/16.png" alt="image"></div>
<div class="shape18"><img src="assets/img/shape/17.png" alt="image"></div>
</div>
</div>
</section>


<section class="free-trial-area ptb-100 bg-f4f5fe">
<div class="container">
<div class="free-trial-content">
<h2>We always try to be the best support to you as possible</h2>
<p>Qualify your leads & recognize the value of word your customer will love you</p>
<a href="contact.html" class="default-btn">
<i class="bx bxs-hot"></i>
Contact Us
<span></span>
</a>
</div>
</div>
<div class="shape10"><img src="assets/img/shape/10.png" alt="image"></div>
<div class="shape11"><img src="assets/img/shape/7.png" alt="image"></div>
<div class="shape12"><img src="assets/img/shape/11.png" alt="image"></div>
<div class="shape13"><img src="assets/img/shape/12.png" alt="image"></div>
</section>

@endsection