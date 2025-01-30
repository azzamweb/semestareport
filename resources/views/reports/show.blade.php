@extends('layouts.app')

@section('title', 'Detail Laporan')

@section('content')

<div class="spacer">
    
</div>
<div class="container">
    <h2 class="text-center text-tosca-dark mb-4">Detail Laporan</h2>

    <div class="row mb-4">
        <!-- Kolom Kiri: Gambar -->
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body text-center">
                    <strong>Foto Laporan</strong><br>
                    <img src="{{ asset('storage/' . $report->photo) }}" alt="Foto Sampah" class="img-fluid rounded mt-3">
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Keterangan -->
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h5>Keterangan Laporan</h5>
                    <p><strong>Nama Pelapor:</strong> {{ $report->user->name }}</p>
                    <p><strong>Deskripsi:</strong> {{ $report->description }}</p>
                    <p><strong>Status:</strong> {{ ucfirst($report->status) }}</p>
                    @if ($report->latitude && $report->longitude)
                        <p>
                            <strong>Lokasi:</strong>
                            <a href="https://www.google.com/maps?q={{ $report->latitude }},{{ $report->longitude }}" target="_blank">
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
        <div class="card shadow">
            <div class="card-header bg-tosca text-white">
                Lokasi Laporan
            </div>
            <div class="card-body">
                <div id="map" style="height: 400px; border: 1px solid #ccc;"></div>
            </div>
        </div>
    @endif
</div>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    @if ($report->latitude && $report->longitude)
        // Koordinat laporan
        var latitude = {{ $report->latitude }};
        var longitude = {{ $report->longitude }};

        // Inisialisasi Peta
        var map = L.map('map').setView([latitude, longitude], 13);

        // Tambahkan Tile Layer dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Tambahkan Marker
        L.marker([latitude, longitude]).addTo(map)
            .bindPopup("<b>Lokasi Laporan</b><br>Latitude: " + latitude + "<br>Longitude: " + longitude)
            .openPopup();
    @endif
</script>

<style>
    .bg-tosca {
        background-color: #40E0D0;
    }
    .bg-tosca-dark {
        background-color: #008080;
    }
</style>
@endsection
