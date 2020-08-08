<?php

namespace App\Http\Controllers\Reader;

use App\Http\Controllers\Controller;
use App\Models\InformationList;
use App\Models\NewList;
use Illuminate\Http\Request;

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

}
