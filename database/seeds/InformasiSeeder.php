<?php

use App\Models\Information;
use Illuminate\Database\Seeder;

class InformasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Information::create([
            "information" => "berkala"
        ]);
        Information::create([
            "information" => "setiap saat"
        ]);
        Information::create([
            "information" => "serta merta"
        ]);
        Information::create([
            "information" => "permohonan informasi"
        ]);
    }
}
