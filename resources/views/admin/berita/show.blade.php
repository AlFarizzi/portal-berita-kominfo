@extends('admin')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8">   
                    <img src="{{$new->thumbnail == 'default.jpg' ? '/default.jpg' : '/storage/'.$new->thumbnail}}" class="img-thumbnail" alt="">
                    <a href="{{route('berita.update',$new)}}" class="btn btn-warning mt-2"><i class="fa fa-edit"></i> Edit</a>
                    <form  action="{{route('berita.destroy',$new)}}" style="display: inline;" method="post">
                        @method('delete')
                        <button type="submit" class="btn btn-danger mt-2" onclick="return confirm('Yakin Akan Menghapus Berita Ini ?')"><i class="fa fa-trash"></i> Hapus</button>
                    </form>
                    <hr>
                    <h3>{{$new->title}}</h3>
                    <div class="badge badge-success">{{$new->new->new}}</div>
                    <div class="mt-3">
                        {!! $new->body !!}
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 class="text-center mt-2">Related Post</h5>
                    @foreach ($related as $rl)
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                        <img src="{{$rl->thumbnail == 'default.jpg' ? '/default.jpg' : '/storage/'.$rl->thumbnail}}" class="card-img-top" alt="..."/>
                        <div class="card-body">
                          <p class="card-text">
                              {!! Str::limit($rl->body,75,'.') !!}
                          </p>
                          <small><a href="{{route('berita.show',$rl)}}">Lihat</a></small>
                        </div>
                      </div>
                    @endforeach
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection