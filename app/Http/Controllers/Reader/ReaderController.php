<?php

namespace App\Http\Controllers\Reader;

use App\Http\Controllers\Controller;
use App\Models\InformationList;
use App\Models\NewList;
use App\Models\ReportList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReaderController extends Controller
{
    public function berita_show(NewList $berita) {
        $related = NewList::whereCategoryId($berita->category_id)->latest()->limit(3)->get(['thumbnail','slug','title']);
        return view('reader.berita.show',compact('berita','related'));
    }


    public function info_show(InformationList $inf) {
      $related = InformationList::whereInformationId($inf->information_id)->latest()->limit(3)->get(['thumbnail','slug','title','file']);
      return view('reader.informasi.show',compact('inf','related'));  
    }

    public function laporan_show(ReportList $report) {
      $related = ReportList::whereReportId($report->report_id)->latest()->limit(3)->get(['thumbnail','slug','title','file']);
      return view('reader.publikasi.show',compact('report','related'));
    }

    public function Reportdownload(ReportList $report) {
        return Storage::disk('local')->download('public/'.$report->file);
    }

}
