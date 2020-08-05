<?php

namespace App\Http\Controllers\Admin;

use App\Models\Report;
use App\Models\ReportList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LaporanRequest;
use Illuminate\Support\Facades\Storage;
use Alert;

class LaporanController extends Controller
{

    public function index() {
       if (request()->is('admin/laporan/laporan-hoaks')) {
           $reports = ReportList::orderBy('created_at','DESC')->where('report_id',1)->get();
       } else if(request()->is('admin/laporan/laporan-keuangan')) {
            $reports = ReportList::orderBy('created_at','DESC')->where('report_id',2)->get();
       } else if(request()->is('admin/laporan/laporan-tahunan')) {
            $reports = ReportList::orderBy('created_at','DESC')->where('report_id',3)->get();
       } else if(request()->is('admin/laporan/laporan-kinerja')) {
            $reports = ReportList::orderBy('created_at','DESC')->where('report_id',4)->get();
       } else if(request()->is('admin/laporan/laporan-pelayanan-publik')) {
            $reports = ReportList::orderBy('created_at','DESC')->where('report_id',5)->get();
       } else {
            $reports = ReportList::orderBy('created_at','DESC')->where('report_id',6)->get();
       }
       return view('admin.laporan.index',compact('reports'));
    }

    public function store_form() {
        $reports = Report::get();
        return view('admin.laporan.tambah_laporan',compact('reports'));
    }

    public function store(LaporanRequest $request) {
        // dd($request->all());
        $input = $request->all();
        // dd($input);
        (!isset($input['file'])) ? $input['file'] = null : $input['file'] = $request->file('file')->store('file');
        (!isset($input['thumbnail'])) ? $input['thumbnail'] = 'default.jpg' : $input['thumbnail'] = $request->file('thumbnail')->store('laporan');
        $input['slug'] = \Str::slug($input['title']).'-'.\Str::random(5);
        ReportList::create($input);
        Alert::success('Berhasil', 'Data Berhasil Di Tambah');
        return back();
    }

    public function destroy(ReportList $report) {
         ($report->file !== null ) ? Storage::delete($report->file) : '';
         $report->delete();
        Alert::success('Berhasil', 'Data Berhasil Di Hapus');
         return back();
    }

    public function edit(ReportList $report) {
          $reports = Report::get();
          return view('admin.laporan.edit',compact('report','reports'));
    }

    public function update(LaporanRequest $request, ReportList $report) {
        $input = $request->all();
        if (!isset($input['thumbnail'])) {
               $input['thumbnail'] = $report['thumbnail'];
        } else {
             Storage::delete($report['thumbnail']);
             $input['thumbnail'] = $request->file('thumbnail')->store('laporan');
        }
        $input['slug'] = \Str::slug($input['title']).'-'.\Str::random(5);
        $report->update($input);
        Alert::success('Berhasil', 'Data Berhasil Di Update');
        return redirect('admin/laporan/'.'laporan-'.$report->report->report);    
    }
    
}
