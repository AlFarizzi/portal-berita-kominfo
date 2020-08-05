@extends('admin')

@section('content')
@if (session('success'))
    @include('admin.util.alert')
@endif
<div class="card">
    <div class="card-header">
        <h3>Tambah Berita</h3>
    </div>
    <div class="card-body">
        <form method="post" action="{{route('laporan.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Kategori Laporan</label>
                <select name="report_id" class="form-control">
                    <option disabled selected>Pilih kategori</option>
                    @foreach ($reports as $r)
                        <option value="{{$r->id}}">{{$r->report}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Judul</label>
                <input name="title" type="text" class="form-control" placeholder="Masukan Judul Berita">
            </div>
            <div class="form-row">
                <div class="col form-group">
                    <label for="">Thumbnail</label>
                    <input type="file" name="thumbnail" value="1" class="form-control">
                </div>
                <div class="col form-group">
                    <label for="">File Laporan</label>
                    <input type="file" name="file" class="form-control">
                </div>

            </div>
            <div class="form-group">
                <label for="">Laporan</label>
                <textarea name="body" id="body" cols="30" rows="10"></textarea>
            </div>
            
            <button class="btn btn-primary" type="submit"><i class="mdi mdi-send"></i> Kirim</button>
        </form>
    </div>
</div>
@endsection