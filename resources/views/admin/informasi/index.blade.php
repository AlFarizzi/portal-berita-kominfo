@extends('admin')

@section('content')
    @include('admin.util.tableHead')
    @if (request()->is('admin/informasi/informasi-berkala'))
        <thead>
            <tr>
                <th>#</th>
                <th>Sub Informasi</th>
                <th>Lihat Informasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $inf)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$inf->sub_information}}</td>
                    <th><a href="" class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></a></th>
                </tr>
            @endforeach
        </tbody>
    @else
        <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Publikasi</th>
                <th>Category</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $inf)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$inf->title}}</td>
                    <td>{!!Str::limit($inf->body,50,'.')!!}</td>
                    <td>{{$inf->created_at->diffForHumans()}}</td>
                    <td>Laporan {{$inf->info->information}}</td>
                    <td>
                        <form style="display: inline;" action="{{route('informasi.destroy',$inf)}}"  method="post" >
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Yakin Akan Menghapus Informasi Ini ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </form>
                        <a  class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <a   class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></a>
                        @if ($inf->file !== null)
                            <a  class="btn btn-primary btn-sm"><i class="fa fa-download"></i></a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    @endif
    @include('admin.util.tableFooter')
@endsection