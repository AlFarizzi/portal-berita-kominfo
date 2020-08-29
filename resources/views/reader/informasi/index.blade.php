@extends('reader')

@section('content')
    
<div class="container">
    <div class="row">
        @foreach ($info as $inf)
            <div class="col-md-12">
                <div class="card mx-4 my-4 w-75 mx-auto d-block inf">
                    @if ($inf->thumbnail !== 'default.jpg')
                        <img class="card-img-top" src="/storage/{{$inf->thumbnail}}" alt="Card image cap">
                    @else
                        <img class="card-img-top" src="/{{$inf->thumbnail}}">
                    @endif
                    <div class="card-body">
                    <h5 class="card-title">{{$inf->title}}</h5></h5>
                    <p class="card-text">{!! \Str::limit($inf->body,80,'.')!!}</p>
                    <a href="{{route('info.read',$inf)}}" class="btn btn-primary"><i class="fa fa-search-plus"></i> Baca Selengkapnya</a>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
</div>

@endsection