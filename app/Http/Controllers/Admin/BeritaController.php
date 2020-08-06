<?php

namespace App\Http\Controllers\Admin;

use App\Models\Neww;
use App\Models\NewList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BeritaRequest;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{

    public function index() {
        if (request()->is('admin/berita/kementrian')) {
            $news = NewList::orderBy('updated_at','DESC')->whereCategoryId(1)->get();
        } else if(request()->is('admin/berita/pemerintah')) {
            $news = NewList::orderBy('updated_at','DESC')->whereCategoryId(2)->get();
        } else if(request()->is('admin/berita/siaran-pers')) {
            $news = NewList::orderBy('updated_at','DESC')->whereCategoryId(3)->get();
        } else if(request()->is('admin/berita/sorotan-media')) {
            $news = NewList::orderBy('updated_at','DESC')->whereCategoryId(4)->get();
        } else if(request()->is('admin/berita/artikel')) {
            $news = NewList::orderBy('updated_at','DESC')->whereCategoryId(5)->get();
        }
        return view('admin.berita.index',compact('news'));
    }

    public function store_form() {
        $new = Neww::get();
        return view('admin.berita.tambah_berita',compact('new'));
    }

    public function store(BeritaRequest $request) {
        ( isset($request->thumbnail) ) ? $thumbnail = $request->file('thumbnail')->store('berita') : $thumbnail = 'default.jpg';
        NewList::create([
            "category_id" => $request->category_id,
            "title" => $request->title,
            "slug" => \Str::slug($request->title).'-',\Str::random(5),
            "body" => $request->body,
            "thumbnail" => $thumbnail
        ]);
        Alert::success('Berhasil', 'Data Berhasil Di Tambah');
        return back();
    }

    public function destroy(NewList $new) {
        ($new->thumbnail !== 'default.jpg' ? Storage::delete($new->thumbnail) : '');
        $new->delete();
        Alert::success('Berhasil', 'Data Berhasil Di Hapus');
        return back();
    }

    public function edit(NewList $new) {
        $news = Neww::get();
        return view('admin.berita.edit',compact('new','news'));
    }

    public function update(BeritaRequest $request, NewList $new) {
        $input = $request->all();
        $input['slug'] = \Str::slug($input['title']).'-'.\Str::random(5);
        if ($new->thumbnail == 'default.jpg') {
            if (!isset($input['thumbnail'])) {
                $input['thumbnail'] = $new->thumbnail;
            } else {
                $input['thumbnail'] = $request->file('thumbnail')->store('berita');
            }
        } else {
            if (!isset($input['thumbnail'])) {
                $input['thumbnail'] = $new->thumbnail;
            } else {
                $input['thumbnail'] = $request->file('thumbnail')->store('berita');
                Storage::delete($new->thumbnail);
            }
        }
        $new->update($input);
        Alert::success('Berhasil', 'Data Berhasil Di Update');
        return redirect('admin/berita/'.$new->new->new);
    }

    public function show(NewList $new) {
        $related = NewList::whereCategoryId($new->category_id)->latest()->limit(6)->get();
        return view('admin.berita.show',compact('new','related'));
    }

}
