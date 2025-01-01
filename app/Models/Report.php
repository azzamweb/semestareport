<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{

    protected $fillable = [
        'user_id',
        'photo',
        'description',
        'latitude',
        'longitude',
        'status',
    ];
    public function store(Request $request)
{
    $request->validate([
        'photo' => 'required|image',
        'description' => 'required',
        'latitude' => 'required|numeric',
        'longitude' => 'required|numeric',
    ]);

    $path = $request->file('photo')->store('public/reports');

    Report::create([
        'user_id' => auth()->id(),
        'photo' => $path,
        'description' => $request->description,
        'latitude' => $request->latitude,
        'longitude' => $request->longitude,
    ]);

    return redirect()->route('reports.index')->with('success', 'Laporan berhasil dikirim.');
}

public function index()
{
    $reports = Report::where('status', '!=', 'selesai')->latest()->get();
    return view('reports.index', compact('reports'));
}

public function user()
{
    return $this->belongsTo(User::class);
}

}

