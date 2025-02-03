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
                                       <div class="reportavatar">
                                       <a href="{{ route('users.show', $report->user_id) }}"
                                            class="text-decoration-none text-dark fw-semibold">
                                            
                                            <img src="{{ $report->user->profile_picture }}">
                                        </a>
                                       
                                        <a href="{{ route('users.show', $report->user_id) }}"
                                            class="text-decoration-none text-dark fw-semibold">
                                            
                                            {{ $report->user->name }}
                                        </a>
                                        </div>
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
                    <p class="wow fadeInUp" data-wow-delay=".6s">Setiap tindakan kecil membawa perubahan besar! 👏
                        Inilah para kontributor paling aktif minggu ini yang telah berperan dalam menjaga lingkungan
                        dengan melaporkan sampah liar, pencemaran, dan masalah lingkungan lainnya.</p>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach($topUsers as $topUser)

                <div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay=".3s">
                    <!-- Start Single Team -->
                    <div class="single-team">
                        <div class="team-image">

                            @if(!empty($topUser->profile_picture))
                                
                                <a href="{{ route('users.show', $topUser->id) }}"><img src="{{ $topUser->profile_picture }}"></a>
                            @else
                            <a href="{{ route('users.show', $topUser->id) }}"><img src="{{ asset('assets/images/profile-pic.jpg') }}"></a>
                                
                            @endif
                            <!-- <img src="{{ $topUser->profile_picture }} ? asset('storage/' . $topUser->profile_picture : asset('/images/profile-pic.jpg') }}"
                                alt="{{ $topUser->name }}"> -->
                        </div>
                        <div class="content">
                            <h4><a
                                    href="{{ route('users.show', $topUser->id) }}">{{ $topUser->name }}</a>
                
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
            @endforeach

        </div>
    </div>
</section>
<!--/ End Team Area -->




<!-- Start Faq Area -->
<section class="faq section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3 class="wow zoomIn" data-wow-delay=".2s">FAQ</h3>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Pertanyaan yang Sering Diajukan</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">Berikut adalah beberapa pertanyaan umum mengenai aplikasi Pelaporan Sampah dan cara menjaga kebersihan lingkungan.</p>
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
                                <span class="title">Bagaimana cara melaporkan sampah melalui aplikasi ini?</span><i
                                    class="lni lni-plus"></i>
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Anda dapat melaporkan sampah dengan masuk ke aplikasi, memilih menu "Lapor Sampah", mengunggah foto lokasi sampah, mengisi deskripsi singkat, dan mengirim laporan. Pastikan fitur lokasi di perangkat Anda aktif untuk akurasi yang lebih baik.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                <span class="title">Apakah saya bisa melacak status laporan saya?</span><i class="lni lni-plus"></i>
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Saat ini, fitur pelacakan status laporan masih dalam tahap pengembangan. Kami akan segera merilis fitur ini agar Anda bisa memantau laporan yang telah dikirim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                <span class="title">Bagaimana jika laporan saya tidak ditindaklanjuti?</span><i
                                    class="lni lni-plus"></i>
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Jika laporan belum ditindaklanjuti dalam waktu yang lama, Anda bisa menghubungi tim kami melalui kontak yang tersedia atau mencoba mengirim ulang laporan dengan lebih banyak detail.</p>
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
                                <span class="title">Apa manfaat menjaga kebersihan lingkungan?</span><i class="lni lni-plus"></i>
                            </button>
                        </h2>
                        <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>Menjaga kebersihan lingkungan dapat mencegah berbagai penyakit, meningkatkan kualitas hidup, menjaga ekosistem tetap sehat, serta mengurangi dampak negatif terhadap perubahan iklim.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading22">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                <span class="title">Apa yang bisa saya lakukan untuk mengurangi sampah?</span><i class="lni lni-plus"></i>
                            </button>
                        </h2>
                        <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="heading22"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>Anda bisa mulai dengan memilah sampah organik dan anorganik, mengurangi penggunaan plastik sekali pakai, mendaur ulang barang yang masih bisa digunakan, dan berpartisipasi dalam program bank sampah.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading33">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse33" aria-expanded="false" aria-controls="collapse33">
                                <span class="title">Bagaimana cara mengedukasi orang lain tentang pentingnya kebersihan lingkungan?</span><i class="lni lni-plus"></i>
                            </button>
                        </h2>
                        <div id="collapse33" class="accordion-collapse collapse" aria-labelledby="heading33"
                            data-bs-parent="#accordionExample2">
                            <div class="accordion-body">
                                <p>Anda bisa mulai dari lingkungan sekitar dengan memberikan contoh yang baik, menyebarkan informasi melalui media sosial, bergabung dengan komunitas peduli lingkungan, atau mengajak teman dan keluarga untuk ikut serta dalam kegiatan bersih-bersih.</p>
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
<!-- <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- <script src="{{ asset('assets/js/tiny-slider.js') }}"></script> -->
<!-- <script src="{{ asset('assets/js/count-up.min.js') }}"></script> -->
<!-- <script src="{{ asset('assets/js/main.js') }}"></script> -->


<script>
    $(document).ready(function () {
        $('#reportTable').DataTable({
            responsive: true,
            autoWidth: false,
            paging: true, // Nonaktifkan pagination
            pageLength: 5,
            bLengthChange: false,
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
        }).setView([1.4918150765026617, 102.16438994817425], 10); 

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
                         <img style="width : 50px;"src="${report.user.profile_picture}"><br>
                        <b>${report.description}</b><br>
                       
                       
                        <a href="{{ url('/reports') }}/${report.id}" target="_blank">Lihat Detail</a>
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
