@extends('frontend.components.template')
@section('content')
    <div id="news-detail" style="min-height: 100vh">
        <div class="image-wrapper">
            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}">
        </div>
        <h2>{{ $news->judul }}</h2>
        <div class="date-wrapper">
            <span
                class="date">{{ \Carbon\Carbon::parse($news->tgl_post)->locale('id')->translatedFormat('l, d F Y') }}</span>
            <span class="author">Ditulis oleh {{ !empty($news->nama_penulis) ? $news->nama_penulis : 'Admin' }}</span>
        </div>
        <div class="">
            <div class="isi">{!! $news->isi !!}</div>
        </div>
    </div>
@endsection
