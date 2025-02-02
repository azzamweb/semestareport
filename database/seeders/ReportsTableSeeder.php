<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ReportsTableSeeder extends Seeder
{
    public function run()
    {
        $reports = [];
        
        // Koordinat Pulau Bengkalis, Riau (kisaran umum)
        $minLat = 1.475;
        $maxLat = 1.625;
        $minLng = 102.05;
        $maxLng = 102.35;

        for ($i = 1; $i <= 30; $i++) {
            $reports[] = [
                'user_id' => rand(1, 30), // Asumsi user_id antara 1-30
                'photo' => "/reports/fotosebaran$i.jpg",
                'description' => "Laporan ke-$i terkait kejadian di sekitar Pulau Bengkalis.",
                'latitude' => round(mt_rand($minLat * 1000000, $maxLat * 1000000) / 1000000, 6),
                'longitude' => round(mt_rand($minLng * 1000000, $maxLng * 1000000) / 1000000, 6),
                'status' => 'baru',
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        
        DB::table('reports')->insert($reports);
    }
}
