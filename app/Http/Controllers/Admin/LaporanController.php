<?php

namespace App\Http\Controllers\Admin;

use App\Models\Report;
use App\Models\ReportList;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LaporanRequest;
use App\Models\InformationList;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
class LaporanController extends Controller
{

    public function index() {
       if (request()->is('admin/laporan/laporan-hoaks')) {
           $reports = ReportList::with(['report'])->orderBy('created_at','DESC')->whereReportId(1)->get();
       } else if(request()->is('admin/laporan/laporan-keuangan')) {
            $reports = ReportList::with(['report'])->orderBy('created_at','DESC')->whereReportId(2)->get();
       } else if(request()->is('admin/laporan/laporan-tahunan')) {
            $reports = ReportList::with(['report'])->orderBy('created_at','DESC')->whereReportId(3)->get();
       } else if(request()->is('admin/laporan/laporan-kinerja')) {
            $reports = ReportList::with(['report'])->orderBy('created_at','DESC')->whereReportId(4)->get();
       } else if(request()->is('admin/laporan/laporan-pelayanan-publik')) {
            $reports = ReportList::with(['report'])->orderBy('created_at','DESC')->whereReportId(5)->get();
       } else {
            $reports = ReportList::with(['report'])->orderBy('created_at','DESC')->whereReportId(6)->get();
       }
       return view('admin.laporan.index',compact('reports'));
    }

    public function store_form() {
        $reports = Report::get();
        return view('admin.laporan.tambah_laporan',compact('reports'));
    }

    public function store(LaporanRequest $request) {
        $input = $request->all();
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
         return redirect()->route($report->report->report.'.index');
    }

    public function edit(ReportList $report) {
          $reports = Report::get();
          return view('admin.laporan.edit',compact('report','reports'));
    }

    public function valid($request,$report) {
          $input = $request->all();
          if (!isset($input['thumbnail'])) {
               $input['thumbnail'] = $report['thumbnail'];
          } else {
               Storage::delete($report['thumbnail']);
               $input['thumbnail'] = $request->file('thumbnail')->store('laporan');
          } 

          if (!isset($input['file'])) {
               $input['thumbnail'] = $report['thumbnail'];
          } else {
               Storage::delete($report['file']);
               $input['file'] = $request->file('file')->store('file');
          }
        $input['slug'] = \Str::slug($input['title']).'-'.\Str::random(5);
        return $input;
    }

    public function update(LaporanRequest $request, ReportList $report) {
        $input = $this->valid($request,$report);
        $report->update($input);
        Alert::success('Berhasil', 'Data Berhasil Di Update');
        return redirect('admin/laporan/'.'laporan-'.$report->report->report);    
    }

    public function show(ReportList $report) {
         $related = ReportList::whereReportId($report->report_id)->get()->sortByDesc('id');
         return view('admin.laporan.show',compact('report','related'));
    }

    public function download(ReportList $report) {
     return Storage::disk('local')->download('public/'.$report->file);
     // return back();
    }
}
