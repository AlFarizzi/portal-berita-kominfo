<?php

use Illuminate\Database\Seeder;
use App\Models\Neww;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Neww::create([
            "new" => 'kementrian'
        ]);
        Neww::create([
            "new" => 'pemerintah'
        ]);
        Neww::create([
            "new" => 'pers'
        ]);
        Neww::create([
            "new" => 'media'
        ]);
        Neww::create([
            "new" => 'artikel'
        ]);
        Neww::create([
            "new" => 'galeri foto'
        ]);
        Neww::create([
            "new" => 'galer video'
        ]);
        Neww::create([
            "new" => 'KOMINFONEXT'
        ]);

    }
}
