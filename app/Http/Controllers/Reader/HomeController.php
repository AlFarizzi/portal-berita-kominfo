<?php

namespace App\Http\Controllers\Reader;

use App\Models\NewList;
use Illuminate\Http\Request;
use App\Models\InformationList;
use App\Http\Controllers\Controller;
use App\Models\ReportList;

class HomeController extends Controller
{

    public function index() {
        $berita = NewList::with('new')->latest()->limit(20)->get(['category_id','title','thumbnail','slug']);
        $informasi = InformationList::with('info')->latest()->limit(4)->get(['slug','information_id','title','thumbnail']);
        return view('reader.index',compact('berita','informasi'));
    }
}
