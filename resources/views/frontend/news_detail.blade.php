@extends('frontend.components.template')
@section('content')
    <div id="news-detail" style="min-height: 100vh">
        <div class="image-wrapper">
            <img src="{{ asset('storage/img/news/' . $news->image) }}" alt="{{ $news->title }}">
        </div>
        <h2>{{ $news->title }}</h2>
        <div class="container">
            <div class="isi">{!! $news->isi !!}</div>
        </div>
    </div>
@endsection
