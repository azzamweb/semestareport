<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil berita terbaru (misalnya dari tabel berita)
        $latestNews = DB::table('news')->latest()->take(4)->get();

        // Ambil 5 laporan terbaru
        $latestReports = Report::latest()->take(6)->get();

        // Ambil 5 user teraktif dalam minggu ini
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        $topUsers = User::withCount(['reports' => function ($query) use ($startOfWeek, $endOfWeek) {
            $query->whereBetween('created_at', [$startOfWeek, $endOfWeek]);
        }])
        ->orderBy('reports_count', 'desc')
        ->take(5)
        ->get();

        $reports = Report::whereNotNull('latitude')
        ->whereNotNull('longitude')
        ->get();
        
                         

        return view('index', compact('latestNews', 'latestReports', 'topUsers', 'reports'));
    }
}
