<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BeritaSeeder::class);
        $this->call(InformasiSeeder::class);
        $this->call(ReportSeeder::class);
    }
}
