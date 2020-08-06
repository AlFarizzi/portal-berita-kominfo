@extends('admin')

@section('content')
@include('admin.util.tableHead')
    <thead>
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Publikasi</th>
            <th>Cateogry</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($news as $new)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$new->title}}</td>
                <td>{!!Str::limit($new->body,50,'.')!!}</td>
                <td>{{$new->created_at->diffForHumans()}}</td>
                <td>berita {{$new->new->new}}</td>
                <td>
                    <form style="display: inline" action="{{route('berita.destroy',$new)}}" method="post" >
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin Akan Menghapus Berita Ini ?')"><i class="fa fa-trash"></i></button>
                    </form>
                    <a href="{{route('berita.update',$new)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit text-white"></i></a>
                    <a href="{{route('berita.show',$new)}}" class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
@include('admin.util.tableFooter')
@endsection