@extends('admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Tambah Berita</h3>
    </div>
    <div class="card-body">
        <form method="post" action="{{route('berita.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Kategori Berita</label>
                <select name="category_id" class="form-control">
                    <option disabled selected>Pilih kategori</option>
                    @foreach ($new as $n)
                        <option value="{{$n->id}}">{{$n->new}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Judul</label>
                <input name="title" type="text" class="form-control" placeholder="Masukan Judul Berita">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" name="thumbnail" value="1" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Berita</label>
                <textarea name="body" id="body" cols="30" rows="10"></textarea>
            </div>
            
            <button class="btn btn-primary" type="submit"><i class="mdi mdi-send"></i> Kirim</button>
        </form>
    </div>
</div>
@endsection