@extends('reader')

@section('content')
    <div class="about-area mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Tittle -->
                    <div class="about-right mb-90">
                        <div class="about-img">
                            @if ($berita->thumbnail !== 'default.jpg')
                                <img src="/storage/{{$berita->thumbnail}}" alt="">
                            @else
                                <img src="/{{$berita->thumbnail}}" alt="">
                            @endif
                        </div>
                        <div class="section-tittle mb-30 pt-30">
                            <h3>{{$berita->title}}</h3>
                        </div>
                        <div class="about-prea">
                            {!! $berita->body !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ml-4">
                    <h5 class="text-center">Related Post</h5>
                    <hr>
                    <div class="row">
                        @foreach ($related as $relate)
                            <div class="card mt-2">
                                @if ($relate->thumbnail !== 'default.jpg')
                                    <img class="card-img-top" src="/storage/{{$relate->thumbnail}}" alt="">
                                @else
                                    <img class="card-img-top" src="/{{$relate->thumbnail}}" alt="">
                                @endif
                                <div class="card-body">
                                    <a class="text-primary" href="{{route('berita.read',$relate)}}">{{$relate->title}}</a> 
                                </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection