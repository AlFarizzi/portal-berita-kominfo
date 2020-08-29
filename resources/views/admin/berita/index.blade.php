@extends('admin')

@section('content')
@include('admin.util.tableHead')
    <thead>
        <tr>
            <th>title</th>
            <th>body</th>
            <th>Aksi</th>
        </tr>
    </thead>
        @push('table')
            <script>
                let link = '';
                let loc = window.location.pathname;
                console.log(loc);
                if (loc == '/admin/berita/kementrian') {
                    link+= 'kementrian/json';
                } else if(loc == '/admin/berita/pemerintah') {
                    link+= 'pemerintah/json';
                } else if(loc == '/admin/berita/pers') {
                    link+= 'pers/json';
                } else if(loc == '/admin/berita/media') {
                    link+= 'media/json';
                } else {
                    link+= 'artikel/json';
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

@include('admin.util.tableFooter')
@endsection