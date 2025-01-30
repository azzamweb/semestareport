@extends('layouts.app')

@section('title', 'Home - Laporan Semesta')

@section('content')


 <!-- Start Hero Area -->
 <section class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="hero-content">
                        <h4>Laporkan. Pantau. Selesaikan.</h4>
                        <h1>SEMESTA Report System</h1>
                        <p>Aplikasi pelaporan untuk dunia yang lebih baik. Laporkan masalah di sekitar Anda sekarang!
                        </p>
                        <div class="button">
                            <a href="about-us.html" class="btn ">Lapor Sekarang!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="hero-image wow fadeInRight" data-wow-delay=".4s">
                        <img class="main-image" src="{{ asset('assets2/images/heroimage.webp') }}" alt="#" style="border-radius: 67% 33% 37% 63% / 59% 30% 70% 41% ;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

     <!-- Start Features Area -->
    <section class="freatures section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-12">
                    <div class="image wow fadeInLeft" data-wow-delay=".3s">
                        <img src="{{ asset('assets2/images/maps.webp') }}" alt="#" style="border-radius: 30% 70% 70% 30% / 30% 30% 70% 70% ;">
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="content">
                        <h3 class="heading wow fadeInUp" data-wow-delay=".5s"><span>Core Features</span>Tiga fitur utama untuk sistem Laporan Semesta</h3>
                        <!-- Start Single Feature -->
                        <div class="single-feature wow fadeInUp" data-wow-delay=".6s">
                            <div class="f-icon">
                                <i class="lni lni-dashboard"></i>
                            </div>
                            <h4>Pelaporan Cepat dan Mudah</h4>
                            <p>Dengan antarmuka yang intuitif, pengguna dapat melaporkan masalah lingkungan, sosial, atau infrastruktur hanya dalam beberapa klik, lengkap dengan foto dan lokasi.</p>
                        </div>
                        <!-- End Single Feature -->
                        <!-- Start Single Feature -->
                        <div class="single-feature wow fadeInUp" data-wow-delay=".7s">
                            <div class="f-icon">
                                <i class="lni lni-pencil-alt"></i>
                            </div>
                            <h4>Peta Interaktif</h4>
                            <p>Menampilkan lokasi laporan secara real-time pada peta interaktif, memudahkan pemantauan dan prioritas penyelesaian masalah oleh pihak terkait.</p>
                        </div>
                        <!-- End Single Feature -->
                        <!-- Start Single Feature -->
                        <div class="single-feature wow fadeInUp" data-wow-delay="0.8s">
                            <div class="f-icon">
                                <i class="lni lni-vector"></i>
                            </div>
                            <h4>Pantau Progres Laporan</h4>
                            <p>Pengguna dapat melacak status laporan mereka, mulai dari pengajuan, proses investigasi, hingga penyelesaian, dengan notifikasi yang transparan.

    </p>
                        </div>
                        <!-- End Single Feature -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Area -->



    <!-- Start Services Area -->
    <!-- <div class="services section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">What we offer</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Services</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-service">
                        <div class="main-icon">
                            <i class="lni lni-grid-alt"></i>
                        </div>
                        <h4 class="text-title">Brand Identity Design</h4>
                        <p>Invest in Bitcoin on the regular or save with one of the highest interest rates on the
                            market.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-service">
                        <div class="main-icon">
                            <i class="lni lni-keyword-research"></i>
                        </div>
                        <h4 class="text-title">Digital Marketing</h4>
                        <p>Invest in Bitcoin on the regular or save with one of the highest interest rates on the
                            market.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-service">
                        <div class="main-icon">
                            <i class="lni lni-vector"></i>
                        </div>
                        <h4 class="text-title">Design and Development</h4>
                        <p>Invest in Bitcoin on the regular or save with one of the highest interest rates on the
                            market.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".2s">
                    <div class="single-service">
                        <div class="main-icon">
                            <i class="lni lni-book"></i>
                        </div>
                        <h4 class="text-title">IT Consulting Service</h4>
                        <p>Invest in Bitcoin on the regular or save with one of the highest interest rates on the
                            market.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <div class="single-service">
                        <div class="main-icon">
                            <i class="lni lni-cloud-network"></i>
                        </div>
                        <h4 class="text-title">Cloud Computing</h4>
                        <p>Invest in Bitcoin on the regular or save with one of the highest interest rates on the
                            market.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="single-service">
                        <div class="main-icon">
                            <i class="lni lni-display-alt"></i>
                        </div>
                        <h4 class="text-title">Graphics Design</h4>
                        <p>Invest in Bitcoin on the regular or save with one of the highest interest rates on the
                            market.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Services Area -->

    <!-- Start Pricing Table Area -->
    
    <!--/ End Pricing Table Area -->

    <!-- Start Intro Video Area -->
    <section class="intro-video-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="inner-content-head">
                        <div class="inner-content">
                            <img class="shape1" src="{{asset ('assets2/images/video/shape1.svg') }}" alt="#">
                            <img class="shape2" src="{{asset ('assets2/images/video/shape2.svg') }}" alt="#">
                            <div class="section-title">
                                <span class="wow zoomIn" data-wow-delay=".2s">Create your own experience</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">Watch Our intro video</h2>
                                <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of
                                    Lorem
                                    Ipsum available, but the majority have suffered alteration in some form.</p>
                            </div>
                            <div class="intro-video-play">
                                <div class="play-thumb wow zoomIn" data-wow-delay=".2s">
                                    <a href="https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM"
                                        class="glightbox video"><i class="lni lni-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Intro Video Area -->

    <!-- Start Team Area -->
    <section class="team section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Expert Team</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Meet Our Team</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".3s">
                    <!-- Start Single Team -->
                    <div class="single-team">
                        <div class="team-image">
                            <img src="{{ asset('assets/img/team/team-1.jpg') }}" alt="#">
                        </div>
                        <div class="content">
                            <h4>Deco Milan
                                <span>Founder</span>
                            </h4>
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Team -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".5s">
                    <!-- Start Single Team -->
                    <div class="single-team">
                        <div class="team-image">
                        <img src="{{ asset('assets/img/team/team-2.jpg') }}" alt="#">
                        </div>
                        <div class="content">
                            <h4>Liza Marko
                                <span>Developer</span>
                            </h4>
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Team -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".7s">
                    <!-- Start Single Team -->
                    <div class="single-team">
                        <div class="team-image">
                        <img src="{{ asset('assets/img/team/team-3.jpg') }}" alt="#">
                        </div>
                        <div class="content">
                            <h4>John Smith
                                <span>Designer</span>
                            </h4>
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Team -->
                </div>
                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".9s">
                    <!-- Start Single Team -->
                    <div class="single-team">
                        <div class="team-image">
                        <img src="{{ asset('assets/img/team/team-4.jpg') }}" alt="#">
                        </div>
                        <div class="content">
                            <h4>Amion Doe
                                <span>Co-Founder</span>
                            </h4>
                            <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Team -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Team Area -->

   

    <!-- Start Blog Section Area -->
    <section class="blog-section section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Blogs</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Latest News</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".4s">
                    <!-- Start Single Blog Grid -->
                    <div class="single-blog-grid">
                        <div class="blog-img">
                            <a href="blog-single.html">
                            <img src="{{ asset ('assets2/images/heroimage.webp') }}" alt="#">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="meta-info">
                                <a class="date" href="javascript:void(0)"><i class="lni lni-timer"></i> 10 June 2023
                                </a>
                                <a class="author" href="javascript:void(0)"><i class="lni lni-user"></i> Anjelio Joly
                                </a>
                            </div>
                            <h4>
                                <a href="blog-single.html">Branding Involves Developing a Strategy to Creating.</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, adipscing elitr, sit gifted sed diam nonumy eirmod tempor
                                ividunt dolore.</p>
                            <div class="button">
                                <a href="blog-single.html" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog Grid -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".6s">
                    <!-- Start Single Blog -->
                    <div class="single-blog-grid">
                        <div class="blog-img">
                            <a href="blog-single.html">
                            <img src="{{ asset ('assets2/images/heroimage.webp') }}" alt="#">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="meta-info">
                                <a class="date" href="javascript:void(0)"><i class="lni lni-timer"></i> 5 Aug 2023
                                </a>
                                <a class="author" href="javascript:void(0)"><i class="lni lni-user"></i> Kumila ksusi
                                </a>
                            </div>
                            <h4>
                                <a href="blog-single.html">Design is a Plan or The Construction of an
                                    Object.</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, adipscing elitr, sit gifted sed diam nonumy eirmod tempor
                                ividunt dolore.</p>
                            <div class="button">
                                <a href="blog-single.html" class="btn">Read Blog</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog Grid -->
                </div>
                <div class="col-lg-4 col-md-6 col-12 wow fadeInUp" data-wow-delay=".8s">
                    <!-- Start Single Blog Grid -->
                    <div class="single-blog-grid">
                        <div class="blog-img">
                            <a href="blog-single.html">
                            <img src="{{ asset ('assets2/images/heroimage.webp') }}" alt="#">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="meta-info">
                                <a class="date" href="javascript:void(0)"><i class="lni lni-timer"></i> 25 Dec 2023
                                </a>
                                <a class="author" href="javascript:void(0)"><i class="lni lni-user"></i> Alex Jendro
                                </a>
                            </div>
                            <h4>
                                <a href="blog-single.html">The Data-Driven Approach to Understanding.</a>
                            </h4>
                            <p>Lorem ipsum dolor sit amet, adipscing elitr, sit gifted sed diam nonumy eirmod tempor
                                ividunt dolore.</p>
                            <div class="button">
                                <a href="blog-single.html" class="btn">Read Blog</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog Grid -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Section Area -->

    <!-- Start Faq Area -->
    <section class="faq section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3 class="wow zoomIn" data-wow-delay=".2s">Faq</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">frequently asked questions</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have
                            suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    <span class="title">Can I cancel my subscription at anytime?</span><i
                                        class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur sit
                                        amet ante nec vulputate. Nulla aliquam, justo auctor consequat tincidunt, arcu
                                        erat mattis lorem.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur sit
                                        amet ante nec vulputate.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    <span class="title">Can I change my plan later on?</span><i
                                        class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute. non cupidatat skateboard dolor
                                        brunch. Foosd truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                    </p>
                                    <p>
                                        sunt alqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim ke ffiyeh helvetica, Spark beer labore wes anderson
                                        cred nesciunt sapiente ea proident.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    <span class="title">Will you renew my subscription automatically?</span><i
                                        class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas expedita,
                                        repellendus est nemo cum quibusdam optio, voluptate hic a tempora facere, nihil
                                        non itaque alias similique quas quam odit consequatur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 xs-margin">
                    <div class="accordion" id="accordionExample2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading11">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                    <span class="title">How many sites can I install the widgets of this app
                                        to?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur sit
                                        amet ante nec vulputate. Nulla aliquam, justo auctor consequat tincidunt, arcu
                                        erat mattis lorem.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur sit
                                        amet ante nec vulputate.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading22">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                    <span class="title">Do you offer any discounts?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="heading22"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                        richardson ad squid. 3 wolf moon officia aute. non cupidatat skateboard dolor
                                        brunch. Foosd truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                                    </p>
                                    <p>
                                        sunt alqua put a bird on it squid single-origin coffee nulla assumenda
                                        shoreditch et. Nihil anim ke ffiyeh helvetica, Spark beer labore wes anderson
                                        cred nesciunt sapiente ea proident.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading33">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse33" aria-expanded="false" aria-controls="collapse33">
                                    <span class="title">Do I get updates for the app?</span><i class="lni lni-plus"></i>
                                </button>
                            </h2>
                            <div id="collapse33" class="accordion-collapse collapse" aria-labelledby="heading33"
                                data-bs-parent="#accordionExample2">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas expedita,
                                        repellendus est nemo cum quibusdam optio, voluptate hic a tempora facere, nihil
                                        non itaque alias similique quas quam odit consequatur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Faq Area -->

    <!-- Start Call Action Area -->
    <!-- <section class="call-action">
        <div class="container">
            <div class="inner-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7 col-12">
                        <div class="text">
                            <h2>Download Our App &
                                <br> Start your free trial today.
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-12">
                        <div class="button">
                            <a href="pricing.html" class="btn"><i class="lni lni-apple"></i> App Store
                            </a>
                            <a href="about-us.html" class="btn btn-alt"><i class="lni lni-play-store"></i> Google
                                Play</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Call Action Area -->

<!-- ========================= JS here ========================= -->
<script src="{{ asset('assets2/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets2/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets2/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets2/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets2/js/count-up.min.js') }}"></script>
    <script src="{{ asset('assets2/js/main.js') }}"></script>
    <script>

        //========= testimonial 
       

        //====== counter up 
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: " ",
        });
        cu.start();

        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });

    </script>
  
@endsection
