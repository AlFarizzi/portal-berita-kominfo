@extends('reader')

@section('content')
    @include('reader_widgets.trending')
    @include('reader_widgets.weekly')
    {{-- @include('reader_widgets.yt') --}}
@endsection