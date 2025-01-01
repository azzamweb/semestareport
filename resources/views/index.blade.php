@extends('layouts.app')

@section('title', 'Beranda')


@section('content')

<section id="hero" class="section hero light-background">
    <!-- Header -->
     <div class="container">
     <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" >
            <h1>Selamat Datang di Sistem Laporan Sampah</h1>
            <p>Platform untuk melaporkan dan memantau sampah liar di lingkungan Anda.</p>
            <div class="d-flex">
              <a href="index.html#about" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img"  >
            <img src="{{ asset('assets/img/hero-img.svg') }}" class="img-fluid " alt="">
          </div>
        </div>
      </div> 
     </div>
</section>

<!-- About Section -->
<section id="about" class="section about">

<div class="container">

  <div class="row gy-3">

    <div class="col-lg-6" >
      <img src="{{ asset('assets/img/about-img.svg') }}" alt="" class="img-fluid">
    </div>

    <div class="col-lg-6 d-flex flex-column justify-content-center" >
      <div class="about-content ps-0 ps-lg-3">
        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
        <p class="fst-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
        <ul>
          <li>
            <i class="bi bi-diagram-3"></i>
            <div>
              <h4>Ullamco laboris nisi ut aliquip consequat</h4>
              <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
            </div>
          </li>
          <li>
            <i class="bi bi-fullscreen-exit"></i>
            <div>
              <h4>Magnam soluta odio exercitationem reprehenderi</h4>
              <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
            </div>
          </li>
        </ul>
        <p>
          Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
          culpa qui officia deserunt mollit anim id est laborum
        </p>
      </div>

    </div>
  </div>

</div>

</section><!-- /About Section -->

<!-- Portfolio Section -->
 
<section id="portfolio" class="portfolio section">

<!-- Section Title -->
<div class="container section-title">
        <h2>Laporan Terbaru</h2>
        @if($latestReports->isEmpty())
            <p class="text-muted">Belum ada laporan terbaru.</p>
        @else
    </div><!-- End Section Title -->

<div class="container">
    <div class="row gy-4 isotope-container d-flex flex-wrap" >
    <!-- Lapora Terbaru -->
                @foreach($latestReports as $report)
                <div class="col-12 col-sm-6 col-md-4 portfolio-item isotope-item filter-app">
                <div class="portfolio-content h-100">
                            <img src="{{ asset('storage/' . $report->photo) }}" class="card-img-top" alt="Foto Laporan">
                            <div class="portfolio-info">
                                <h4>{{ $report->user->name }}</h4>
                                <p class="card-text">{{ \Illuminate\Support\Str::limit($report->description, 50) }}</p>
                                <a href="{{ route('reports.show', $report->id) }}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            
        @endif
    


      

    </div><!-- End Portfolio Container -->

  </div>

</div>

</section><!-- /Portfolio Section -->

<!-- Services Section -->
<section id="services" class="services section light-background">

<!-- Section Title -->
<div class="container section-title" >
  <h2>Info Terbaru</h2>
  <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
</div><!-- End Section Title -->

<div class="container">


 <!-- Berita Terbaru -->
 <div class="row gy-4">
      
        @if($latestNews->isEmpty())
            <p class="text-muted">Tidak ada berita terbaru.</p>
        @else


           
                @foreach($latestNews as $news)
                <div class="col-xl-3 col-md-6 d-flex" >
                <div class="service-item position-relative">
                        <h4 class="stretched-link">{{ $news->title }}</h5>
                        <p >{{ \Illuminate\Support\Str::limit($news->content, 100) }}</p>
                        </div>
                        </div>
                @endforeach

        @endif
  </div>
</div>

</section><!-- /Services Section -->

<!-- Team Section -->
<section id="team" class="team section">

<!-- Section Title -->
<div class="container section-title" >
  <h2>Team paling aktif minggu ini</h2>
  <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="row gy-4">

  <!-- User Teraktif -->
  
        <h3>User Teraktif Minggu Ini</h3>
        @if($topUsers->isEmpty())
            <p class="text-muted">Belum ada user aktif minggu ini.</p>
        @else
            
                @foreach($topUsers as $user)
                <div class="col-xl-3 col-lg-4 col-md-6" >
      <div class="member">
      <!-- Tambahkan tautan pada gambar -->
      <a href="{{ route('users.show', $user->id) }}">
                                <img src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('assets/img/default-profile.png') }}" 
                                     class="img-fluid" 
                                     alt="Foto Profil" 
                                     style="width: 150px; height: 150px; object-fit: cover; border-radius: 50%;">
                            </a>
        <div class="member-info">
          <div class="member-info-content">
          <a href="{{ route('users.show', $user->id) }}">
                                        <h4>{{ $user->name }}</h4>
                                    </a>
                        <span >{{ $user->reports_count }} laporan</span>
                        </div>
          <div class="social">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div><!-- End Team Member -->
                @endforeach
            
        @endif
   

  </div>

</div>

</section><!-- /Team Section -->



@endsection
