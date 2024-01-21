<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
@extends('layouts.app')

@section('title', 'Quiz')

@section('content')
    <h1>結果</h1>

    @if ($isCorrect)
        <p>正解！</p>
        <p>解説: {{ $quiz->explanation }}</p>
        <a href="{{ route('show_quizzes', ['category' => $quiz->category]) }}">{{ $quiz->category }}ジャンルのクイズ一覧画面へ戻る</a>
    @else
        <p>不正解...</p>
        <a href="{{ route('show_quiz', ['quizId' => $quiz->id]) }}">もう一度回答する</a>
    @endif
@endsection