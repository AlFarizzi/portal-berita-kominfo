@extends('admin')

@section('content')
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
                        <a href="{{route('laporan.show',$report)}}" class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></a>
                        @if ($report->file !== null)
                            <a href="{{route('laporan.download',$report)}}" class="btn btn-primary btn-sm"><i class="fa fa-download"></i></a>
                            <a href="#"  data-toggle="modal" data-target="#exampleModal" data-pdf="{{$report->file}}" id="file" >Baca</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                    <div class="pdfobject-container" id="example1"></div>  
                </div>
              </div>
            </div>
        </div>
    @include('admin.util.tableFooter')
@endsection