<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- 投稿一覧を表示 -->
    @if ($posts)
        <div id="page_title">
            <h1>投稿一覧</h1>
        </div>
    @endif
    
    <div id="post_content">
        @foreach($posts as $post)
            <div id="post">
                @if ($post->photo_path)
                    <img src="{{ asset('storage/' . $post->photo_path) }}" width='275' height="225">
                @endif
                <h2>{{ $post->title }}</h2>
                <p style="margin: 0 auto; max-width: 17em;">{{ $post->content }}</p>
                <p>
                    <!-- 緯度：{{ $post->lat }}
                    <br>
                    経度：{{ $post->lng }} -->
                </p>
                <a href="{{ route('map') }}" onclick="setMapCoordinates({{ $post->lat }}, {{ $post->lng }})">地図で確認する</a>
            </div>
        @endforeach
    </div>

    <script src="{{ asset('js/home.js') }}"></script>
@endsection