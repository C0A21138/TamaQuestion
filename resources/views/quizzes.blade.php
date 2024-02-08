<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
@extends('layouts.app')

@section('title', 'Quiz')

@section('content')
    <div id="page_title">
        <h1>クイズ</h1>
    </div>

    <p id="content_title">ジャンル</p>
    <div>
        @foreach ($genres as $genre)
            <a href="{{ url('/quizzes', $genre->category) }}">
                <div id="genre">
                    @if ($genre->category == "Anime")
                        <ion-icon name="desktop-outline"></ion-icon>
                        <span id="category_text">アニメクイズ</span>
                    @endif

                    @if ($genre->category == "Drama")
                        <ion-icon name="film-outline"></ion-icon>
                        <span id="category_text">ドラマ・映画クイズ</span>
                    @endif

                    @if ($genre->category == "Railway")
                        <ion-icon name="subway-outline"></ion-icon>
                        <span id="category_text">鉄道クイズ</span>
                    @endif
                </div>
            </a>
        @endforeach
    </div>
@endsection

<script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>