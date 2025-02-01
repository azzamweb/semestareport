@extends('layouts.app')

@section('title', 'Daftar Laporan Sampah')

@section('content')

<div class="spacer"></div>
<div class="container mt-4">
    <h2 class="text-center text-tosca-dark mb-4">Daftar Laporan Sampah Liar</h2>

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
                                    <a href="{{ route('users.show', $report->user_id) }}"
                                        class="text-decoration-none text-dark fw-semibold">
                                        {{ $report->user->name }}
                                    </a>
                                </td>
                                <td>{{ Str::limit($report->description, 50) }}</td>
                                <td class="text-center">
                                    <img src="{{ asset('storage/' . $report->photo) }}"
                                        alt="Foto" class="rounded shadow-sm img-thumbnail">
                                </td>
                                <td>
                                    <span class="badge bg-tosca-dark text-white">{{ ucfirst($report->status) }}</span>
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

<div class="spacer"></div>
<!-- Styles -->
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

<!-- DataTables Scripts -->

<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.4.1/css/rowReorder.dataTables.min.css"> -->


<script>
    $(document).ready(function () {
        $('#reportTable').DataTable({
            responsive: true,
            autoWidth: false,
            paging: true, // Nonaktifkan pagination
            pageLength: 5,
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

@endsection
