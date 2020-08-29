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
use DataTables;

class InformasiController extends Controller
{
    public function data() {
         if(request()->is('admin/informasi/informasi-setiap-saat/json')) {
            $info = InformationList::orderBy('created_at','DESC')->whereInformationId(2)->get();
        } else if(request()->is('admin/informasi/informasi-serta-merta/json')) {
            $info = InformationList::orderBy('created_at','DESC')->whereInformationId(3)->get();
        }
        return DataTables::of($info)->editColumn("body", function($data) {
            return \Str::limit($data->body,70,'.');
        })->addColumn('SLUG',function($data) {
            $a = '<a class="btn btn-warning btn-sm text-white" href="'. route('informasi.update',$data) .'"><i class="fa fa-edit"></i></a>' . 
            '<a class="btn btn-danger btn-sm mx-1" href="'. route('informasi.destroy',$data) .'"> <i class="fa fa-trash"></i> </a>'.
            '<a class="btn btn-success btn-sm mx-1" href="'. route('informasi.show',$data) .'"> <i class="fa fa-search-plus"></i> </a>'
            ;
            return $a;
        })->rawColumns(['SLUG'])->make(true);
    }

    public function index() {
        if (request()->is('admin/informasi/informasi-berkala')) {
            $info = Sub_Information::get();
            // dd($info);
            return view('admin.informasi.index',compact('info'));
        }
        return view('admin.informasi.index');
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
        if ($inf->file == null) {
            Alert::error('Gagal', 'Tidak Tersedia File Untuk Di Download');
            return back();
        }
        return Storage::disk('local')->download('public/'.$inf->file);
    }

    public function bSelect(Sub_Information $inf) {
        $info = $inf->infos;
        return view('admin.informasi.index_berkala',compact('info'));
    }
}
