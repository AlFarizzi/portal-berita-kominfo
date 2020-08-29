@extends('admin')

@section('content')
    @include('admin.util.tableHead')
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Body</th> 
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($info as $inf)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$inf->title}}</td>
                    <td>{!!Str::limit($inf->body,50,'.')!!}</td>
                    <td>
                        <a href="{{route('informasi.destroy',$inf)}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> </a>
                        <a href="{{route('informasi.update',$inf)}}" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                        <a href="{{route('informasi.show',$inf)}}" class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></a>
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
    @push('table')
        <script>
           $('#example').DataTable();
        </script>
    @endpush
@endsection