@extends('admin')

@section('content')
@if (session('success'))
    @include('admin.util.alert')
@endif
    @include('admin.util.tableHead')
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
            @foreach ($reports as $report)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$report->title}}</td>
                    <td>{!!Str::limit($report->body,50,'.')!!}</td>
                    <td>{{$report->created_at->diffForHumans()}}</td>
                    <td>Laporan {{$report->report->report}}</td>
                    <td>
                        <form style="display: inline;" action="{{route('laporan.destroy',$report)}}" method="post" >
                            @csrf
                            @method('delete')
                            <button onclick="return confirm('Yakin Akan Menghapus Informasi Ini ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </form>
                        <a href="{{route('laporan.update',$report)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    @include('admin.util.tableFooter')
@endsection