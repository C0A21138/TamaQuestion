<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
@extends('layouts.app')

@section('title', 'Quiz')

@section('content')
    <div id="page_title">
        <h1>クイズ</h1>
    </div>

    <div id="post_content">
        <p id="content_title">ジャンル</p>
        @foreach ($genres as $genre)
            <a href="{{ url('/quizzes', $genre->category) }}">
                <div id="genre">
                    <span>{{ $genre->category }}</span>
                </div>
            </a>
        @endforeach
    </div>
@endsection