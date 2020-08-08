<?php

namespace App\Http\Controllers\Admin;

use App\Models\Information;
use Illuminate\Http\Request;
use App\Models\InformationList;
use App\Models\Sub_Information;
use App\Http\Controllers\Controller;
use App\Http\Requests\InformasiRequest;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class InformasiController extends Controller
{
    public function index() {
        if (request()->is('admin/informasi/informasi-berkala')) {
            $info = Sub_Information::get();
            // dd($info);
        } else if(request()->is('admin/informasi/informasi-setiap-saat')) {
            $info = InformationList::whereInformationId(2)->get();
        } else if(request()->is('admin/informasi/informasi-serta-merta')) {
            $info = InformationList::whereInformationId(3)->get();
        } else if(request()->is('admin/informasi/permohonan-informasi')) {
            $info = InformationList::whereInformationId(4)->get();
        }
        return view('admin.informasi.index',compact('info'));
    }

    public function store_form() {
        $info = Information::get();
        $sub = Sub_Information::get();
        return view('admin.informasi.tambah_informasi',compact('info','sub'));
    }

    public function store(InformasiRequest $request) {
        $input = $request->all();
        if (!isset($input['thumbnail'])) {
            $input['thumbnail'] = 'default.jpg';
        } else {
            $input['thumbnail'] = $request->file('thumbnail')->store('informasi');
        }
        if (isset($input['file'])) {
            $input['file'] = $request->file('file')->store('file');
        }
        $input['slug'] = \Str::slug($request->title).'-'.\Str::random(5);
        InformationList::Create($input);
        Alert::success('Berhasil', 'Informasi Berhasil Di Tambah');
        return back();
    }

    public function destroy(InformationList $inf) {
        ($inf->file !== null) ? Storage::delete($inf->file) : '' ;
        ($inf->thumbnail !== 'default.jpg') ? Storage::delete($inf->thumbnail) : '';
        $inf->delete();
        Alert::success('Berhasil', 'Data Berhasil Di Hapus');
        return back();
    }

    public function edit(InformationList $inf) {
        $info = Information::get();
        $sub = Sub_Information::get();
        return view('admin.informasi.edit',compact('inf','info','sub'));
    }

    public function update(InformasiRequest $request, InformationList $inf) {
        $input = $request->all();   
        if (!isset($input['file'])) {
            $input['file'] = $inf->file;
        } else {
            Storage::delete($inf->file);
            $input['file'] = $request->file('file')->store('file');
        }
        
        if (!isset($input['thumbnail'])) {
            $input['thumbnail'] = $inf->thumbnail;
        } else {
            Storage::delete($inf->thumbnail);
            $input['thumbnail'] = $request->file('thumbnail')->store('informasi');
        }
        $input['slug'] = \Str::slug($request->title).'-'.\Str::random(5);
        $inf->update($input);
        Alert::success('Berhasil', 'Informasi Berhasil Di Update');
        return redirect()->route('informasi.update',$inf);  
    }

    public function show(InformationList $inf) {
         $related = InformationList::whereInformationId($inf->information_id)->limit(6)->get()->SortByDesc('id');
         $inf->with('info');
         return view('admin.informasi.show',compact('related','inf'));
    }

    public function download(InformationList $inf) {
        return Storage::disk('local')->download('public/'.$inf->file);
    }

    public function bSelect(Sub_Information $inf) {
        $info = $inf->infos;
        return view('admin.informasi.index',compact('info'));
    }

}
