@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container mt-4">
    <h2 class="text-center text-tosca-dark mb-4">Dashboard Laporan Sampah</h2>

    <div class="row">
        <!-- Bagian Peta -->
        <div class="col-lg-7 mb-4">
            <div class="card shadow-sm border-0 rounded">
                <div class="card-header bg-tosca text-white fw-bold">Peta Sebaran Laporan</div>
                <div class="card-body p-0">
                    <div id="map" style="height: 400px;"></div>
                </div>
            </div>
        </div>

        <!-- Bagian Daftar Laporan -->
        <div class="col-lg-5 mb-4">
            <div class="card shadow-sm border-0 rounded">
                <div class="card-header bg-tosca text-white fw-bold">Daftar Laporan Anda</div>
                <div class="card-body p-2">
                    <div class="table-responsive">
                        <table id="reportTable" class="table table-hover dataTable align-middle">
                            <thead class="bg-tosca text-white">
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reports as $index => $report)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td>
                                            <a href="{{ route('reports.show', $report->id) }}" class="text-decoration-none text-dark">
                                                {{ Str::limit($report->description, 50) }}
                                            </a>
                                        </td>
                                        <td>{{ $report->created_at->format('d M Y') }}</td>
                                        <td class="text-center">
                                            <span class="badge bg-tosca-dark text-white">{{ ucfirst($report->status) }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Styles -->
<style>
    .bg-tosca {
        background-color: #40E0D0 !important;
    }
    .bg-tosca-dark {
        background-color: #008080 !important;
    }
    .table-hover tbody tr:hover {
        background-color: rgba(64, 224, 208, 0.1);
    }
    .badge {
        padding: 6px 10px;
        font-size: 14px;
    }
    #map {
        border-radius: 12px;
        overflow: hidden;
    }
</style>

<!-- DataTables & Leaflet.js -->
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
@endpush

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>
        $(document).ready(function () {
            $('#reportTable').DataTable({
                responsive: true,
                autoWidth: false,
                language: {
                    search: "Cari:",
                    lengthMenu: "Tampilkan _MENU_ data",
                    info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    paginate: {
                        first: "Awal",
                        last: "Akhir",
                        next: "Berikutnya",
                        previous: "Sebelumnya"
                    }
                }
            });
        });

        // Inisialisasi Peta
        var map = L.map('map').setView([-6.200000, 106.816666], 12); // Koordinat Jakarta sebagai default

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Tambahkan Marker dari Data Laporan
        var reports = @json($reports);
        reports.forEach(function(report) {
            if (report.latitude && report.longitude) {
                L.marker([report.latitude, report.longitude])
                    .addTo(map)
                    .bindPopup(`<b>Laporan:</b> ${report.description}<br><b>Status:</b> ${report.status}`);
            }
        });
    </script>
@endpush

@endsection
