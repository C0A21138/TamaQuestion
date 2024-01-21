<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
@extends('layouts.app')

@section('title', 'Quiz')

@section('content')
    <h1>{{ $category }}のクイズ一覧</h1>

    @foreach ($quizzes as $quiz)
        <a href="{{ url('/quiz', $quiz->id) }}">{{ $quiz->title }}</a><br>
    @endforeach
@endsection