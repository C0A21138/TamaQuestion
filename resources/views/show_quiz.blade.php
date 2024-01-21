<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
@extends('layouts.app')

@section('title', 'Quiz')

@section('content')
    <h1>{{ $quiz->title }}</h1>
    <img src="{{ $quiz->image_path }}" alt="Quiz Image">
    <p>{{ $quiz->problem_statement }}</p>

    <form method="post" action="{{ route('check', ['quizId' => $quiz->id]) }}">
        @csrf
        <input type="radio" name="selected_answer" value="1"> {{ $quiz->answer_1 }}<br>
        <input type="radio" name="selected_answer" value="2"> {{ $quiz->answer_2 }}<br>
        <input type="radio" name="selected_answer" value="3"> {{ $quiz->answer_3 }}<br>
        <input type="radio" name="selected_answer" value="4"> {{ $quiz->answer_4 }}<br>
        <button type="submit">回答する</button>
    </form>
@endsection