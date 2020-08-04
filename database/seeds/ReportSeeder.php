<?php

use App\Models\Report;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Report::create([
            "report" => "hoaks",
        ]);
        Report::create([
            "report" => "keuangan",
        ]);
        Report::create([
            "report" => "tahunan",
        ]);
        Report::create([
            "report" => "kinerja",
        ]);
        Report::create([
            "report" => "pelayanan informasi publik",
        ]);
        Report::create([
            "report" => "hasil survey pelayanan publik",
        ]);

    }
}
