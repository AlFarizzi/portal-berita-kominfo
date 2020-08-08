@extends('admin')

@section('content')
@if (session('success'))
    @include('admin.util.alert')
@endif
<div class="card">
    <div class="card-header">
        <h3>Edit Informasi</h3>
    </div>
    <div class="card-body">
        <form method="post" action="{{route('informasi.update',$inf)}}" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="form-row" id="form-row">
                <div class="col form-group">
                    <label for="">Kategori Informasi</label>
                    <select id="info" name="information_id" class="form-control">
                        <option disabled selected>Pilih kategori</option>
                        @foreach ($info as $i)
                            <option {{$inf->information_id == $i->id ? 'selected' : ''}} id="choice" data-id="{{$i->id}}" value="{{$i->id}}">{{$i->information}}</option>
                        @endforeach
                    </select>
                </div>
                <div id="sub" style="opacity:0;" class="col form-group">
                    <label for="">Sub Informasi</label>
                    <select id="info" name="sub_information_id" class="form-control">
                        <option disabled selected>Pilih Kategori</option>
                        @foreach ($sub as $sb)
                            <option value="{{$sb->id}}">{{$sb->sub_information}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="">Judul</label>
                <input name="title" value="{{$inf->title}}" type="text" class="form-control" placeholder="Masukan Judul Berita">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Thumbnail</label>
                        <input type="file" name="thumbnail" value="1" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">File Informasi</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Informasi</label>
                <textarea name="body" id="body" cols="30" rows="10">{!! $inf->body !!}</textarea>
            </div>
            
            <button class="btn btn-primary" type="submit"><i class="mdi mdi-send"></i> Kirim</button>
        </form>
    </div>
</div>
@endsection