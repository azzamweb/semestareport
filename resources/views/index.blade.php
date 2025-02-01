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
                    <img class="main-image" src="{{ asset('assets/images/heroimage.webp') }}"
                        alt="#" style="border-radius: 67% 33% 37% 63% / 59% 30% 70% 41% ;">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Area -->

<!-- Start tabel laporan -->
<section class="freatures section">
    <div class="container">
    <div class="section-title">
    <h2 class="wow fadeInUp" data-wow-delay=".4s">Daftar Laporan</h2>
</div>
        <div class="table-responsive shadow-sm rounded">
            @if($reports->isEmpty())
                <p class="text-center text-muted">Tidak ada laporan untuk ditampilkan.</p>
            @else

                <div class="table-responsive">
                    <table id="reportTable" class="table table-hover align-middle table-striped table-bordered">
                        <thead class="bg-tosca text-white">
                            <tr>
                                <th class="text-center">#</th>
                                <th>Nama Pelapor</th>
                                <th>Deskripsi</th>
                                <th class="text-center">Foto</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reports as $index => $report)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td>
                                        <a href="{{ route('users.show', $report->user_id) }}"
                                            class="text-decoration-none text-dark fw-semibold">
                                            {{ $report->user->name }}
                                        </a>
                                    </td>
                                    <td>{{ Str::limit($report->description, 50) }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset('storage/' . $report->photo) }}"
                                            alt="Foto" class="rounded shadow-sm img-thumbnail">
                                    </td>
                                    <td>
                                        <span
                                            class="badge bg-tosca-dark text-white">{{ ucfirst($report->status) }}</span>
                                    </td>
                                    <td>{{ $report->created_at->format('d M Y') }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('reports.show', $report->id) }}"
                                            class="btn btn-outline-info btn-sm rounded-pill">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</section>
<!-- End tabel laporan -->

<!-- Start Features Area -->

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
<div class="section-title">
    <h2 class="wow fadeInUp" data-wow-delay=".4s">Peta sebaran laporan</h2>
</div>
    <div class="container">
        
    
            <div class="col-12">
           
                <div class="inner-content-head">
                    <div class="inner-content">
                       
                        <div id="map" style="height: 500px; border: 1px solid #ccc;"></div>


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
                    <h3 class="wow zoomIn" data-wow-delay=".2s">Environmental Heroes</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">active contributor this week</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Setiap tindakan kecil membawa perubahan besar! 👏 Inilah para kontributor paling aktif minggu ini yang telah berperan dalam menjaga lingkungan dengan melaporkan sampah liar, pencemaran, dan masalah lingkungan lainnya.</p>
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
                            <img src="{{ asset ('assets/images/heroimage.webp') }}" alt="#">
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
                            <img src="{{ asset ('assets/images/heroimage.webp') }}" alt="#">
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
                            <img src="{{ asset ('assets/images/heroimage.webp') }}" alt="#">
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
                                <span class="title">Can I change my plan later on?</span><i class="lni lni-plus"></i>
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


<style>
    /* Warna utama */
    .bg-tosca {
        background-color: #2CD06E !important;
    }

    .bg-tosca-dark {
        background-color: #2CD06E !important;
    }

    /* Tabel dengan border lembut */
    .dataTable {
        border-radius: 12px;
        overflow: hidden;
        width: 100%;
    }

    /* Header tabel */
    .dataTable thead {
        background-color: #40E0D0;
        color: white;
        font-weight: bold;
        text-transform: uppercase;
    }

    /* Efek hover pada baris */
    .dataTable tbody tr:hover {
        background-color: rgba(64, 224, 208, 0.1);
    }

    /* Padding yang lebih nyaman untuk mobile */
    <blade media|%20(max-width%3A%20768px)%20%7B>.dataTable tbody td {
        font-size: 13px;
    }

    .dataTable thead th {
        font-size: 14px;
    }

    .btn-sm {
        font-size: 12px;
        padding: 6px 12px;
    }


    /* Gaya tombol dan badge */
    .btn-outline-info {
        border-color: #008080;
        color: #008080;
        transition: 0.3s ease;
    }

    .btn-outline-info:hover {
        background-color: #008080;
        color: white;
    }

    .badge {
        padding: 6px 10px;
        font-size: 14px;
    }

    .img-thumbnail {
        width: 80px;
        height: 60px;
        object-fit: cover;
        border-radius: 6px;
    }

    div#reportTable_paginate ul.pagination {
        display: flex;
    }

</style>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-gesture-handling/dist/leaflet-gesture-handling.min.css">

<!-- Leaflet JS -->






<!-- ========================= JS here ========================= -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/js/count-up.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
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

</script>

<script>
    $(document).ready(function () {
        $('#reportTable').DataTable({
            responsive: true,
            autoWidth: false,
            paging: true, // Nonaktifkan pagination
            pageLength: 5,
            bLengthChange : false,
            searching: true, // Tetap aktifkan fitur pencarian
            info: true, // Nonaktifkan informasi jumlah data
            ordering: true, // Tetap bisa mengurutkan data
            language: {
                search: "🔍 Cari:",
                lengthMenu: "Tampilkan _MENU_ data",
            }

        });
    });

</script>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-gesture-handling/dist/leaflet-gesture-handling.min.js"></script>


<script>
    document.addEventListener("DOMContentLoaded", function () {
    var map = L.map('map', {
        gestureHandling: true // Mengaktifkan gesture handling
    }).setView([-6.2088, 106.8456], 12); // Default ke Jakarta

    // Tambahkan tile layer dari OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Ambil data laporan dari Controller
    var reports = @json($reports);
    var markers = L.featureGroup(); // Grup marker untuk auto-zoom

    // Tambahkan marker untuk setiap laporan
    reports.forEach(function (report) {
        if (report.latitude && report.longitude) {
            var lat = parseFloat(report.latitude);
            var lng = parseFloat(report.longitude);

            if (!isNaN(lat) && !isNaN(lng)) {
                var marker = L.marker([lat, lng]).addTo(map)
                    .bindPopup(`
                        <b>${report.description}</b><br>
                        Latitude: ${lat}<br>
                        Longitude: ${lng}<br>
                        <a href="https://www.google.com/maps?q=${lat},${lng}" target="_blank">Lihat di Google Maps</a>
                    `);
                markers.addLayer(marker); // Tambahkan marker ke dalam grup
            }
        }
    });

    // Jika ada laporan, atur zoom agar peta menyesuaikan seluruh marker
    if (markers.getLayers().length > 0) {
        map.fitBounds(markers.getBounds(), {
            padding: [50, 50], // Beri padding agar marker tidak terlalu mepet tepi
            maxZoom: 15 // Batasi zoom maksimum agar tidak terlalu dekat
        });
    }
});



</script>


@endsection
