<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InformationList;
use App\Models\NewList;
use App\Models\ReportList;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $berita = NewList::Get()->count();
        $informasi = InformationList::get()->count();
        $laporan = ReportList::get()->count();
        return view('admin.index',compact('berita','informasi','laporan'));
    }
}
