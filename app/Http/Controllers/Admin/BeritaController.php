<?php

namespace App\Http\Controllers\Admin;

use App\Models\Neww;
use App\Models\NewList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BeritaRequest;

class BeritaController extends Controller
{

    public function index() {
        if (request()->is('admin/berita/kementrian')) {
            $news = NewList::where('category_id',1)->get();
        } else if(request()->is('admin/berita/pemerintah')) {
            $news = NewList::where('category_id',2)->get();
        } else if(request()->is('admin/berita/siaran-pers')) {
            $news = NewList::where('category_id',3)->get();
        } else if(request()->is('admin/berita/sorotan-media')) {
            $news = NewList::where('category_id',4)->get();
        } else if(request()->is('admin/berita/artikel')) {
            $news = NewList::where('category_id',5)->get();
        }
        return view('admin.berita.index',compact('news'));
    }

    public function store_form() {
        $new = Neww::get();
        return view('admin.berita.tambah_berita',compact('new'));
    }

    public function store(BeritaRequest $request) {
        $input = $request->all();
        if (isset($input['thumbnail'])) {
            $input['thumbnail'] = $request->file('thumbnail')->store('berita');
        }
        $input['user_id'] = 1;
        NewList::create($input);
        return back();
    }

}
