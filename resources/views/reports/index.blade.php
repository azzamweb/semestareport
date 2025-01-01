@extends('layouts.app')

@section('title', 'Daftar Laporan Sampah')

@section('content')
<div class="container">
    <h2 class="text-center text-tosca-dark mb-4">Daftar Laporan Sampah Liar</h2>

    @if($reports->isEmpty())
        <p class="text-center text-muted">Tidak ada laporan untuk ditampilkan.</p>
    @else
    <table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama Pelapor</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Status</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reports as $index => $report)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>
                    <a href="{{ route('users.show', $report->user_id) }}">
                        {{ $report->user->name }}
                    </a>
                </td>
                <td>{{ Str::limit($report->description, 50) }}</td>
                <td>
                    <img src="{{ asset('storage/' . $report->photo) }}" alt="Foto" style="width: 100px; height: 75px; object-fit: cover;">
                </td>
                <td>{{ ucfirst($report->status) }}</td>
                <td>{{ $report->created_at->format('d M Y') }}</td>
                <td>
                    <a href="{{ route('reports.show', $report->id) }}" class="btn btn-info btn-sm">Detail</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
    @endif
</div>

<style>
    .bg-tosca {
        background-color: #40E0D0;
    }
    .bg-tosca-dark {
        background-color: #008080;
    }
</style>
@endsection
