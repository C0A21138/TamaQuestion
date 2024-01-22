<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
@extends('layouts.app')

@section('title', 'Quiz')

@section('content')
    <div id="page_title">
        <h1>クイズ</h1>
    </div>

    <div id="quiz_content">
        <h2>結果</h2>

        @if ($isCorrect)
            <h3 id="correct">正解！</h3>
            <p id="explanation">解説: {{ $quiz->explanation }}</p>
            <a href="{{ route('show_quizzes', ['category' => $quiz->category]) }}">{{ $quiz->category }}ジャンルのクイズ一覧画面へ戻る</a>
        @else
            <h3 id="incorrect">不正解...</h3>
            <p>もう一度挑戦してみよう！</p>
            <a href="{{ route('show_quiz', ['quizId' => $quiz->id]) }}">もう一度回答する</a>
        @endif
    </div>
@endsection