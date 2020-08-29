<?php

use Illuminate\Database\Seeder;
use App\Models\Sub_Information;
class Sub_InformationSeeder extends Seeder
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
                "information_id" => 1,
                "sub_information" => "informasi tentang profile kementrian  komunikasi dan informatika" 
            ],
            [
                "information_id" => 1,
                "sub_information" => "ringkasan informasi tentang program dan kegiatan yang sedang dijalankan dalam lingkup Kementerian Komunikasi dan Informatika" 
            ],
            [
                "information_id" => 1,
                "sub_information" => "ringkasan informasi tentang kinerja dalam lingkup Badan Publik berupa narasi tentang realisasi kegiatan yang telah maupun sedang dijalankan beserta capaiannya" 
            ],
            [
                "information_id" => 1,
                "sub_information" => "ringkasan laporan keuangan" 
            ],
            [
                "information_id" => 1,
                "sub_information" => "ringkasan laporan akses informasi publik" 
            ],
            [
                "information_id" => 1,
                "sub_information" => "informasi tentang profile kementrian  komunikasi dan informatika" 
            ],
            [
                "information_id" => 1,
                "sub_information" => "informasi tentang peraturan, keputusan, dan/atau kebijakan" 
            ],
            [
                "information_id" => 1,
                "sub_information" => "informasi tentang hak dan tata cara memperoleh informasi publik" 
            ],
            [
                "information_id" => 1,
                "sub_information" => "informasi tentang tata acara pengaduan penyalahgunaan wewenang atau pelanggaran" 
            ],
            [
                "information_id" => 1,
                "sub_information" => "informasi tentang pengumuman pengadaan barang dan jasa" 
            ],
            [
                "information_id" => 1,
                "sub_information" => "hasil survey indeks kepuasan masyarakat" 
            ],
                    
        ];
        foreach ($item as $it) {
            Sub_Information::create($it);
        }
    }
}
