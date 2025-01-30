@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')

<div class="spacer">
    
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <!-- Informasi Profil -->
            <div class="card shadow mb-4">
                <div class="card-header bg-primary text-white text-center">
                    <h5>Profil Pengguna</h5>
                </div>
                <div class="card-body text-center">
                    <img src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : 'https://via.placeholder.com/150' }}" alt="Foto Profil" class="img-thumbnail mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                    <h4>{{ $user->name }}</h4>
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <!-- Daftar Laporan -->
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5>Daftar Laporan</h5>
                </div>
                <div class="card-body">
                    @if ($reports->isEmpty())
                        <p class="text-muted text-center">Belum ada laporan yang diunggah.</p>
                    @else
                    <table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
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
            </div>
        </div>
    </div>
</div>
@endsection
