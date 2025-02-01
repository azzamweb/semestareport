<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;


class ReportController extends Controller
{
    public function map()
    {
        // Ambil semua laporan dengan koordinat
        // Log::info('Metode map dipanggil');
        $reports = Report::whereNotNull('latitude')
                         ->whereNotNull('longitude')
                         ->get();

        return view('reports.map', compact('reports'));
    }
    public function petaSampah()
{
    $reports = Report::with('user')->whereNotNull('latitude')->whereNotNull('longitude')->get();
    return view('reports.peta-sampah', compact('reports'));
}
public function index()
{
    // Ambil semua laporan beserta data user
    $reports = Report::with('user')->latest()->get();

    // Kirim data laporan ke view
    return view('reports.index', compact('reports'));
}

public function create()
{
    // Render view untuk form create laporan
    // dd(auth()->user()); // Menampilkan informasi pengguna login
    return view('reports.create');
}

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image',
            'description' => 'required|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
        ]);
    
        $filePath = $request->file('photo')->store('reports', 'public');
    
        Report::create([
            'user_id' => auth()->id(),
            'photo' => $filePath,
            'description' => $request->description,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'status' => 'baru',
        ]);
    
        return redirect()->route('reports.index')->with('success', 'Laporan berhasil dikirim.');
    }
    
    private function getGpsCoordinates($filePath)
    {
        $exif = @exif_read_data($filePath);

        if (isset($exif['GPSLatitude'], $exif['GPSLongitude'], 
                  $exif['GPSLatitudeRef'], $exif['GPSLongitudeRef'])) {
            $lat = $this->getCoordinate($exif['GPSLatitude'], $exif['GPSLatitudeRef']);
            $lon = $this->getCoordinate($exif['GPSLongitude'], $exif['GPSLongitudeRef']);
            return ['latitude' => $lat, 'longitude' => $lon];
        }
        return null;
    }

    private function getCoordinate($coordinate, $hemisphere)
    {
        $degrees = count($coordinate) > 0 ? $coordinate[0] : 0;
        $minutes = count($coordinate) > 1 ? $coordinate[1] : 0;
        $seconds = count($coordinate) > 2 ? $coordinate[2] : 0;

        $flip = ($hemisphere == 'W' || $hemisphere == 'S') ? -1 : 1;

        return $flip * ($degrees + ($minutes / 60) + ($seconds / 3600));
    }

    

    public function show($id)
    {
        $report = Report::findOrFail($id);
    
        return view('reports.show', compact('report'));
    }


}
