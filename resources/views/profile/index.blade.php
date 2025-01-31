@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')

<div class="spacer"></div>
<div class="container mt-5">
    <div class="row g-4">
        <!-- Profile Card -->
        <div class="col-lg-4">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-body text-center">
                    <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name ?? 'User') }}&background=random" 
                         class="rounded-circle mb-3 border border-3 border-primary shadow-sm"
                         width="120" height="120" alt="Avatar">
                    <h4 class="fw-bold">{{ $user->name ?? 'Tidak diketahui' }}</h4>
                    <p class="text-muted">{{ $user->email ?? 'Email tidak tersedia' }}</p>
                    <a href="{{ route('profile.edit') }}" class="btn btn-outline-primary mt-3 px-4">Edit Profile</a>
                </div>
            </div>
        </div>

        <!-- Peta Sebaran Laporan User -->
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-body">
                    <h5 class="fw-bold mb-3"><i class="fas fa-map-marked-alt"></i> Peta Sebaran Laporan Saya</h5>
                    <div id="map" style="height: 400px; border-radius: 10px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
    <hr class="my-5">

   <!-- Daftar Laporan -->
<div class="container mt-5">
<div class="card shadow-lg border-0 rounded-lg">
    <div class="card-body">
        <h3 class="fw-bold text-center mb-4 text-primary">Laporan Saya</h3>

        @if(isset($reports) && count($reports) > 0)
            <div class="table-responsive">
                <table id="profileReportTable" class="table table-hover align-middle">
                    <thead class="table-primary text-dark">
                        <tr>
                            <th class="text-center">#</th>
                            <th>Deskripsi</th>
                            <th class="text-center">Foto</th>
                            <th>Titik Koordinat</th> <!-- Tambahkan Kolom -->
                            <th>Status</th>
                            <th>Tanggal</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $index => $report)
                            <tr>
                                <td class="text-center fw-bold">{{ $index + 1 }}</td>
                                <td>{{ Str::limit($report->description ?? 'Tidak ada deskripsi', 50) }}</td>
                                <td class="text-center">
                                    @if($report->photo)
                                        <img src="{{ asset('storage/' . $report->photo) }}" 
                                             alt="Foto" 
                                             class="rounded shadow-sm img-thumbnail"
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
                                        {{ ucfirst($report->status ?? 'pending') }}
                                    </span>
                                </td>
                                <td>{{ $report->created_at ? $report->created_at->format('d M Y') : '-' }}</td>
                                <td class="text-center">
                                    <a href="{{ route('reports.show', $report->id) }}" 
                                       class="btn btn-outline-info btn-sm rounded-pill px-3">
                                       Detail
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-center text-muted">Anda belum mengunggah laporan.</p>
        @endif
    </div>
</div>
</div>
<div class="spacer"></div>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<!-- Leaflet JS -->
<!-- <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script> -->

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
<script>
    // Inisialisasi Peta dengan Lokasi Default (Bengkalis)
    var map = L.map('map').setView([1.4918150765026617, 102.16438994817425], 10); 

    // Tambahkan Tile Layer dari OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    var laporanData = @json($reports); // Ambil data laporan dari Controller

    // Cek apakah ada laporan
    if (laporanData.length === 0) {
        console.warn("Tidak ada laporan dengan koordinat.");
    } else {
        var markers = L.featureGroup(); // Grup untuk menampung semua marker

        laporanData.forEach(function(report) {
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

                    markers.addLayer(marker); // Tambahkan marker ke dalam group
                } else {
                    console.warn("Koordinat tidak valid untuk laporan: ", report);
                }
            }
        });

        // Jika ada laporan, atur peta agar otomatis zoom ke semua marker
        if (markers.getLayers().length > 0) {
            map.fitBounds(markers.getBounds(), { padding: [50, 50] });
        }
    }
</script>



<style>
    #map {
        margin-top: 20px;
    }
</style>
@endsection
