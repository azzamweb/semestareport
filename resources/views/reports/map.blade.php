@extends('layouts.app')

@section('title', 'Peta Laporan Sampah')

@section('content')

<div class="spacer">
    
</div>
<div class="container">
    <h2 class="text-center text-tosca-dark mb-4">Peta Laporan Sampah Liar</h2>

    <div id="map" style="height: 500px; border: 1px solid #ccc;"></div>
</div>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    // Inisialisasi peta
    var map = L.map('map').setView([-6.2088, 106.8456], 12); // Default ke Jakarta

    // Tambahkan tile layer dari OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Data laporan dari server
    var reports = @json($reports);

    // Tambahkan marker untuk setiap laporan
    reports.forEach(function(report) {
        if (report.latitude && report.longitude) {
            L.marker([report.latitude, report.longitude])
                .addTo(map)
                .bindPopup(`
                    <b>${report.description}</b><br>
                    Latitude: ${report.latitude}<br>
                    Longitude: ${report.longitude}<br>
                    <a href="https://www.google.com/maps?q=${report.latitude},${report.longitude}" target="_blank">Lihat di Google Maps</a>
                `);
        }
    });
</script>

<style>
    #map {
        margin-top: 20px;
    }
</style>
@endsection
