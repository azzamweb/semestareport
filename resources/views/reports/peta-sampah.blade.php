@extends('layouts.app')

@section('title', 'Peta Sampah')

@section('content')
<div class="container">
    <h2 class="text-center text-tosca-dark mb-4">Peta Sampah</h2>

    <div id="map" style="height: 500px; border: 1px solid #ccc;"></div>
</div>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
    // Data laporan dari server
    var reports = @json($reports);

    // Ambil lokasi terakhir sebagai pusat peta atau gunakan default
    var lastReport = reports.length > 0 ? reports[reports.length - 1] : null;
    var map = L.map('map').setView(
        lastReport ? [lastReport.latitude, lastReport.longitude] : [-6.2088, 106.8456],
        13
    );

    // Tambahkan Tile Layer dari OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // Tambahkan Marker untuk Setiap Laporan
    reports.forEach(function(report) {
        if (report.latitude && report.longitude) {
            L.marker([report.latitude, report.longitude])
                .addTo(map)
                .bindPopup(`
                    <b>${report.description}</b><br>
                    Latitude: ${report.latitude}<br>
                    Longitude: ${report.longitude}<br>
                    <a href="/reports/${report.id}" >Lihat Detail Laporan</a>
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
