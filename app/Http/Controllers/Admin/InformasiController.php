<?php

namespace App\Http\Controllers\Admin;

use App\Models\Information;
use Illuminate\Http\Request;
use App\Models\Sub_Information;
use App\Http\Controllers\Controller;
use App\Http\Requests\InformasiRequest;
use App\Models\InformationList;
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
        InformationList::Create($input);
        Alert::success('Berhasil', 'Informasi Berhasil Di Tambah');
        return back();
    }
}
