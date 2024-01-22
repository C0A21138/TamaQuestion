<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
@extends('layouts.app')

@section('title', 'Quiz')

@section('content')
    <div id="page_title">
        <h1>クイズ</h1>
    </div>

    <div>
        <p id="content_title">ジャンル：{{ $category }}</p>
        <a href="{{ route('random_quiz', ['category' => $category]) }}">
            <div id="random">
                <span>ランダムに問題を出題する</span>
            </div>
        </a>
        @foreach ($quizzes as $quiz)
            <a href="{{ url('/quiz', $quiz->id) }}">
                <div id="quiz">
                    {{ $loop->iteration }}.
                    <span>{{ $quiz->title }}</span>
                </div>
            </a>
        @endforeach
    </div>
@endsection