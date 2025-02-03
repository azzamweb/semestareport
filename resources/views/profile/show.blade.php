@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')

<div class="spacer">

</div>
<div class="container mt-5">
    <div class="row g-4">
        <!-- Informasi Profil -->
        <div class="col-lg-4">
            <div class="card shadow-lg border-0 rounded-10">
                <!-- <div class="card-header bg-primary text-white text-center">
                    <h5>Profil Pengguna</h5>
                </div> -->
                <div class="card-body text-center">
                    <img src="{{ $user->profile_picture ? asset($user->profile_picture) : 'https://via.placeholder.com/150' }}"
                        alt="Foto Profil" class="img-thumbnail mb-3"
                        style="width: 150px; height: 150px; object-fit: cover;">
                    <h4 class="fw-bold">{{ $user->name ?? 'Tidak diketahui' }}</h4>
                    <p class="text-muted">{{ $user->email ?? 'Email tidak tersedia' }}
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <!-- Daftar Laporan -->
            <div class="card shadow-lg border-0 rounded-lg">

                <div class="card-body">
                    <h3 class="fw-bold text-center mb-4 text-primary">Laporan Terbaru
                        {{ $user->name ?? 'Tidak diketahui' }}</h3>
                    @if($reports->isEmpty())
                        <p class="text-muted text-center">Belum ada laporan yang diunggah.</p>
                    @else
                        <div class="table-responsive">
                        <table id="profileReportTable"
                        class="table table-hover align-middle table-striped table-bordered">
                                <thead class="bg-tosca text-white">
                                    <tr>
                                        <<th class="text-center">#</th>
                                        <th>Deskripsi</th>
                                        <th class="text-center">Foto</th>
                                        <th>Titik Koordinat</th> <!-- Tambahkan Kolom -->
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reports as $index => $report)
                                        <tr>
                                            <td class="text-center fw-bold">{{ $index + 1 }}</td>
                                            <td>{{ Str::limit($report->description ?? 'Tidak ada deskripsi', 50) }}</td>
                                            <td class="text-center">
                                            @if($report->photo)
                                                    <img src="{{ asset('storage/' . $report->photo) }}"
                                                        alt="Foto" class="rounded shadow-sm img-thumbnail"
                                                        style="width: 80px; height: 60px; object-fit: cover;">
                                                @else
                                                    <span class="text-muted">Tidak ada foto</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($report->latitude && $report->longitude)
                                                    <a href="https://www.google.com/maps?q={{ $report->latitude }},{{ $report->longitude }}"
                                                        target="_blank" class="text-decoration-none">
                                                        {{ $report->latitude }}, {{ $report->longitude }}
                                                    </a>
                                                @else
                                                    <span class="text-muted">Tidak tersedia</span>
                                                @endif
                                            </td>
                                            <td>
                                            <span class="badge bg-primary text-white px-3 py-2">
                                                {{ ucfirst($report->status) }}
                                                </span>

                                                </td>
                                            <td>
                                                    
                                            {{ $report->created_at ? $report->created_at->format('d M Y') : '-' }}
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('reports.show', $report->id) }}"
                                                    class="btn btn-outline-info btn-sm rounded-pill px-3">Detail</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="my-5">
<!-- Peta sebaran -->
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-lg">
        <div class="card-body">



            <h5 class="fw-bold mb-3"><i class="fas fa-map-marked-alt"></i> Peta Sebaran Laporan</h5>
            <div id="map" style="height: 400px; border-radius: 10px;"></div>


        </div>
    </div>
</div>
<div class="spacer"></div>
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
<!-- Leaflet JS -->


<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>




<script>
   document.addEventListener("DOMContentLoaded", function () {
    // Inisialisasi Peta dengan Lokasi Default (Bengkalis)
    var map = L.map('map').setView([1.4918150765026617, 102.16438994817425], 10);

    // Tambahkan Tile Layer dari OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    var laporanData = @json($reports); // Ambil data laporan dari Controller

    // Cek apakah ada laporan yang dimiliki user
    if (laporanData.length === 0) {
        console.warn("User ini belum memiliki laporan dengan koordinat.");
    } else {
        var markers = L.featureGroup(); // Grup marker untuk auto-zoom

        laporanData.forEach(function (report) {
            if (report.latitude && report.longitude) {
                var lat = parseFloat(report.latitude);
                var lng = parseFloat(report.longitude);

                if (!isNaN(lat) && !isNaN(lng)) {
                    var marker = L.marker([lat, lng]).addTo(map)
                        .bindPopup(`
                            <b>${report.user.name}</b><br>
                            ${report.description}<br>
                            <a href="{{ url('/reports') }}/${report.id}" target="_blank">Lihat Detail</a>
                        `);

                    markers.addLayer(marker); // Tambahkan marker ke dalam grup
                } else {
                    console.warn("Koordinat tidak valid untuk laporan: ", report);
                }
            }
        });

        // Jika ada laporan, atur peta agar otomatis zoom ke semua marker
        if (markers.getLayers().length > 0) {
            map.fitBounds(markers.getBounds(), {
                padding: [50, 50], // Memberi padding agar marker tidak terlalu mepet tepi
                maxZoom: 14 // Batasi zoom maksimum agar tidak terlalu dekat
            });
        }
    }
});

</script>





<script>
    $(document).ready(function () {
        $('#profileReportTable').DataTable({
            responsive: true,
            autoWidth: false,
            paging: false, // Nonaktifkan pagination
            searching: true, // Tetap aktifkan fitur pencarian
            info: false, // Nonaktifkan informasi jumlah data
            ordering: true, // Tetap bisa mengurutkan data
            language: {
                search: "🔍 Cari:",
                lengthMenu: "Tampilkan _MENU_ data",
            }
        });
    });
</script>

<style>
    #map {
        margin-top: 20px;
    }
</style>
@endsection
