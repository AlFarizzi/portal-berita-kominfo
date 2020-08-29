@extends('reader')

@section('content')
    
<div class="container">
    <div class="row">
        @foreach ($reports as $report)
            <div class="col-md-12">
                <div class="card mx-4 my-4 w-75 mx-auto d-block inf">
                    @if ($report->thumbnail !== 'default.jpg')
                        <img class="card-img-top" src="/storage/{{$report->thumbnail}}" alt="Card image cap">
                    @else
                        <img class="card-img-top" src="/{{$report->thumbnail}}">
                    @endif
                    <div class="card-body">
                    <h5 class="card-title">{{$report->title}}</h5></h5>
                    <p class="card-text">{!! \Str::limit($report->body,80,'.')!!}</p>
                    <a href="{{route('report.read',$report)}}" class="btn btn-danger w-50"><i class="fa fa-search-plus"></i> Baca</a>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
</div>

@endsection