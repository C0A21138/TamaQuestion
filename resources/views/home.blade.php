<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- 投稿一覧を表示 -->
    @if ($posts)
        <h1>投稿一覧</h1>
    @endif
    @foreach($posts as $post)
    <div id="post_content">
        <div style="border: 2px solid #000; width: 20rem; border-radius: 10px; padding: 10px; margin: 10px; text-align: center; margin-bottom: 20px;">
            @if ($post->photo_path)
                <img src="{{ asset('storage/' . $post->photo_path) }}" width='275' height="225">
            @endif
            <h2>{{ $post->title }}</h2>
            <p style="margin: 0 auto; max-width: 17em;">{{ $post->content }}</p>
            <p>
                緯度：{{ $post->lat }}
                <br>
                経度：{{ $post->lng }}
            </p>
            <a href="{{ route('map') }}" onclick="setMapCoordinates({{ $post->lat }}, {{ $post->lng }})">地図画面へ</a>
        </div>
    </div>
    @endforeach

    <script src="{{ asset('js/posts.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
@endsection