@extends('reader')

@section('content')
    
<div class="container">
    <div class="row">
        @foreach ($berita as $br)
            <div class="col-md-12">
                <div class="card mx-4 my-4 w-75 mx-auto d-block inf">
                    @if ($br->thumbnail !== 'default.jpg')
                        <img class="card-img-top" src="/storage/{{$br->thumbnail}}" alt="Card image cap">
                    @else
                        <img class="card-img-top" src="/{{$br->thumbnail}}">
                    @endif
                    <div class="card-body">
                    <h5 class="card-title">{{$br->title}}</h5></h5>
                    <p class="card-text">{!! \Str::limit($br->body,80,'.')!!}</p>
                    <a href="{{route('berita.read',$br)}}" class="btn btn-danger w-50"><i class="fa fa-search-plus"></i> Baca</a>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
</div>

@endsection