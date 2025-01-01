@extends('layouts.app')

@section('title', 'Laporkan Sampah')

@section('content')
<div class="container">
    <h2 class="text-center text-tosca-dark mb-4">Formulir Pelaporan Sampah Liar</h2>

    <form action="{{ route('reports.store') }}" method="POST" enctype="multipart/form-data" class="p-4 bg-white shadow rounded">
        @csrf

        <!-- Foto Sampah -->
        <div class="mb-3">
            <label for="photo" class="form-label fw-bold text-tosca">Foto Sampah</label>
            <input type="file" class="form-control @error('photo') is-invalid @enderror" id="photo" name="photo" required>
            @error('photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <small class="text-muted">Unggah foto sampah sebagai bukti. Pastikan GPS perangkat aktif saat mengambil foto.</small>
        </div>

        <!-- Deskripsi -->
        <div class="mb-3">
            <label for="description" class="form-label fw-bold text-tosca">Deskripsi</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Berikan deskripsi singkat tentang sampah..." required></textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

       <!-- Lokasi -->
<div class="row">
    <div class="col-md-6 mb-3">
        <label for="latitude" class="form-label fw-bold text-tosca">Latitude</label>
        <input type="text" class="form-control @error('latitude') is-invalid @enderror" id="latitude" name="latitude" placeholder="Klik 'Dapatkan Lokasi'" >
        @error('latitude')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="col-md-6 mb-3">
        <label for="longitude" class="form-label fw-bold text-tosca">Longitude</label>
        <input type="text" class="form-control @error('longitude') is-invalid @enderror" id="longitude" name="longitude" placeholder="Klik 'Dapatkan Lokasi'" >
        @error('longitude')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<!-- Tombol Dapatkan Lokasi -->
<div class="text-center mb-3">
    <button type="button" class="btn btn-tosca text-white" onclick="getLocation()">Dapatkan Lokasi</button>
</div>

        <!-- Tombol Kirim -->
        <div class="text-center">
            <button type="submit" class="btn btn-tosca px-5 py-2 text-white fw-bold">
                Kirim Laporan
            </button>
        </div>
    </form>
</div>

<style>
    .btn-tosca {
        background-color: #40E0D0;
        border: none;
    }

    .btn-tosca:hover {
        background-color: #008080;
    }

    .text-tosca {
        color: #40E0D0;
    }

    .text-tosca-dark {
        color: #008080;
    }
</style>

<script>
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            alert("Geolocation tidak didukung oleh browser Anda.");
        }
    }

    function showPosition(position) {
        document.getElementById("latitude").value = position.coords.latitude;
        document.getElementById("longitude").value = position.coords.longitude;
    }

    function showError(error) {
        switch(error.code) {
            case error.PERMISSION_DENIED:
                alert("Pengguna menolak permintaan lokasi.");
                break;
            case error.POSITION_UNAVAILABLE:
                alert("Informasi lokasi tidak tersedia.");
                break;
            case error.TIMEOUT:
                alert("Permintaan lokasi mengambil terlalu lama.");
                break;
            case error.UNKNOWN_ERROR:
                alert("Terjadi kesalahan yang tidak diketahui.");
                break;
        }
    }
</script>

@endsection
