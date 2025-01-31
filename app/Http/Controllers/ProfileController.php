<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Report; // Impor model Report


class ProfileController extends Controller
{

    public function index()
    {
        $user = Auth::user();

        if (!$user) {
            abort(403, 'User tidak ditemukan atau belum login.');
        }

        $reports = Report::where('user_id', $user->id)
                         ->whereNotNull('latitude')
                         ->whereNotNull('longitude')
                         ->with('user') // Pastikan relasi user dimuat agar bisa diakses di view
                         ->get();

        return view('profile.index', compact('user', 'reports'));
    }
    
    public function edit()
    {
        $user = auth()->user();
        $reports = Report::where('user_id', $user->id)->latest()->get(); // Ambil laporan pengguna

        return view('profile.edit', [
            'user' => $user,
            'reports' => $reports,
        ]);
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = $path;
        }

        $user->name = $request->name;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profil berhasil diperbarui.');
    }

    public function show($id)
{
    $user = \App\Models\User::findOrFail($id); // Ambil data pengguna berdasarkan ID
    $reports = \App\Models\Report::where('user_id', $id)->latest()->get(); // Ambil laporan pengguna

    return view('profile.show', [
        'user' => $user,
        'reports' => $reports,
    ]);
}
}