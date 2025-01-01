@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <!-- Informasi Profil -->
            <div class="card shadow mb-4">
                <div class="card-header bg-primary text-white text-center">
                    <h5>Profil Saya</h5>
                </div>
                <div class="card-body text-center">
                    <img src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : 'https://via.placeholder.com/150' }}" alt="Foto Profil" class="img-thumbnail mb-3" style="width: 150px; height: 150px; object-fit: cover;">
                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <!-- Nama -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                        </div>

                        <!-- Foto Profil -->
                        <div class="mb-3">
                            <label for="profile_picture" class="form-label">Foto Profil</label>
                            <input type="file" name="profile_picture" id="profile_picture" class="form-control">
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password Baru</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Kosongkan jika tidak ingin mengubah password">
                        </div>

                        <!-- Konfirmasi Password -->
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Ulangi password baru">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
                    </form>
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
                                        <td>{{ $report->description }}</td>
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
