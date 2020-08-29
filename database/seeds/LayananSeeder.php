<?php

use Illuminate\Database\Seeder;
use App\Models\Service;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = [
            [
                "service" => "layanan pemerintah"
            ],
            [
                "service" => "layanan non pemerinah"
            ],
            [
                "service" => "perizinan"
            ],
            [
                "service" => "sertifikasi"
            ],
            [
                "service" => "beasiswa"
            ],
            [
                "service" => "hukum"
            ],
            [
                "service" => "statistik"
            ],
            [
                "service" => "berita"
            ],
            [
                "service" => "direktori"
            ],
        ];
    }
}
