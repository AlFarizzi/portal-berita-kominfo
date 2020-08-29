@extends('admin')

@section('content')
    @include('admin.util.tableHead')
    @if (request()->is('admin/informasi/informasi-berkala'))
        <thead class="tes">
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
                    <th><a href="{{route('berkala.select', $inf)}}" class="btn btn-success btn-sm"><i class="fa fa-search-plus"></i></a></th>
                </tr>
            @endforeach
        </tbody>
    @else
        <thead>
            <tr>
                <th class="tes">title</th>
                <th>body</th>
                <th>Aksi</th>
            </tr>
        </thead>
        @push('table')
        <script>
            let link = '';
            let loc = window.location.pathname;
            console.log(loc);
            if (loc == '/admin/informasi/informasi-setiap-saat') {
                link += '/admin/informasi/informasi-setiap-saat/json';
            } else if(loc == '/admin/informasi/informasi-serta-merta') {
                link += '/admin/informasi/informasi-serta-merta/json';
            }
            $(document).ready(function() {
            $('#example').DataTable({
                processing : true,
                serverSide : true,
                ajax : link,
                columns : [
                    {
                        "data" : "title",
                        "name" : "title"
                    },
                    {
                        "data" : "body",
                        "name" : "body"
                    },
                    {
                        "data" : "SLUG",
                        "name" : "SLUG"
                    }
                ]
                });
            } );
        </script>
    @endpush
    @endif
    @include('admin.util.tableFooter')
@endsection