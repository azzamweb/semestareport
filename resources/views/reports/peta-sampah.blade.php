@extends('layouts.app')

@section('title', 'Peta Sampah')

@section('content')

<div class="spacer">
    
</div>
<div class="container">
    <h2 class="text-center text-tosca-dark mb-4">Peta Sampah</h2>

    <div id="map" style="height: 500px; border: 1px solid #ccc;"></div>
</div>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<!-- Leaflet JS -->
<!-- <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script> -->

<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
    <script>
        // Inisialisasi Peta

        //1.4918150765026617, 102.16438994817425
        //1.281267175270766, 101.94811706359255
        var map = L.map('map').setView([1.4918150765026617, 102.16438994817425], 10); // Lokasi awal: Bengkalis

        // Tambahkan Layer Satelit dari Esri
        L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Tiles &copy; Esri &mdash; Source: Esri, USGS, NOAA',
            maxZoom: 19
        }).addTo(map);

        // Marker untuk Lokasi Sampah
        var reports = @json($reports); // Data laporan dari Controller
        reports.forEach(function(report) {
            if (report.latitude && report.longitude) {
                var marker = L.marker([report.latitude, report.longitude]).addTo(map);
                marker.bindPopup(`
                    <b>${report.user.name}</b><br>
                    ${report.description}<br>
                    <a href="{{ url('/reports') }}/${report.id}" target="_blank">Lihat Detail</a>
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
