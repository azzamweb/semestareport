@extends('layouts.app')

@section('title', 'Detail Laporan')

@section('content')

<div class="container py-5">
    <h2 class="text-center text-tosca-dark mb-4 fw-bold">Detail Laporan</h2>

    <div class="row g-4">
        <!-- Kolom Kiri: Gambar -->
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-body text-center">
                    <h5 class="fw-semibold">Foto Laporan</h5>
                    <img src="{{ asset('storage/' . $report->photo) }}" 
                         alt="Foto Sampah" 
                         class="img-fluid rounded mt-3 shadow-sm" 
                         style="max-height: 350px; object-fit: cover;">
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Keterangan -->
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <h5 class="fw-semibold mb-3">Keterangan Laporan</h5>
                    
                    <!-- Foto Pelapor -->
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ $report->user->profile_picture ?? asset('default-avatar.png') }}" 
                             alt="Foto Pelapor" 
                             class="rounded-circle shadow-sm border" 
                             width="80" 
                             height="80">
                        <div class="ms-3">
                            <h6 class="mb-0">
                                <a href="{{ route('users.show', $report->user_id) }}" class="text-decoration-none text-dark fw-semibold">
                                    {{ $report->user->name }}
                                </a>
                            </h6>
                            <small class="text-muted">Pelapor</small>
                        </div>
                    </div>

                    <p><strong>Deskripsi:</strong> {{ $report->description }}</p>
                    <p><strong>Status:</strong> 
                        <span class="badge bg-{{ $report->status == 'selesai' ? 'success' : 'warning' }}">
                            {{ ucfirst($report->status) }}
                        </span>
                    </p>

                    @if ($report->latitude && $report->longitude)
                        <p>
                            <strong>Lokasi:</strong>
                            <a href="https://www.google.com/maps?q={{ $report->latitude }},{{ $report->longitude }}" 
                               target="_blank" 
                               class="text-decoration-none fw-bold text-primary">
                                Buka di Google Maps
                            </a>
                        </p>
                    @else
                        <p class="text-danger"><strong>Koordinat tidak tersedia.</strong></p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Peta Lokasi -->
    @if ($report->latitude && $report->longitude)
    <div class="card shadow-lg border-0 mt-4">
        <div class="card-header bg-tosca text-white fw-bold">
            Lokasi Laporan
        </div>
        <div class="card-body">
            <div id="map" style="height: 400px; border-radius: 8px; overflow: hidden;"></div>
        </div>
    </div>
    @endif
</div>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<link rel="stylesheet" href="https://unpkg.com/leaflet-gesture-handling/dist/leaflet-gesture-handling.min.css">

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-gesture-handling/dist/leaflet-gesture-handling.min.js"></script>

<script>
    @if ($report->latitude && $report->longitude)
        var latitude = {{ $report->latitude }};
        var longitude = {{ $report->longitude }};

        var map = L.map('map', {
            gestureHandling: true
        }).setView([latitude, longitude], 14);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        L.marker([latitude, longitude], {
            title: "Lokasi Laporan",
            riseOnHover: true
        }).addTo(map)
        .bindPopup("<b>Lokasi Laporan</b><br>Latitude: " + latitude + "<br>Longitude: " + longitude)
        .openPopup();
    @endif
</script>

<style>
    .bg-tosca {
        background-color: #2FD06E !important;
    }
    .text-tosca-dark {
        color:rgb(255, 255, 255) !important;
    }
</style>

@endsection
