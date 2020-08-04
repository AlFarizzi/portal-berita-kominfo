@extends('admin')

@section('content')
    <div class="table-responsive">
        <table id="example" class="table table-hover" style="width: 100%;" role="grid" aria-describedby="example_info">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Thumbnail</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Publikasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $new)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        @if ($new->thumbnail !== 'default.jpg')
                            <td><img src="/storage/{{$new->thumbnail}}" class="img-thumbnail" style="width:50%"></td>
                        @else
                            <td><img src="/{{$new->thumbnail}}" class="img-thumbnail" style="width:50%"></td>
                        @endif
                        <td>{{$new->title}}</td>
                        <td>{!!Str::limit($new->body,100)!!}</td>
                        <td>{{$new->created_at->diffForHumans()}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection