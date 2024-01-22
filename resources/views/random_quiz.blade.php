<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
@extends('layouts.app')

@section('title', 'Random Quiz - ' . $randomQuiz->category)

@section('content')
    <h1>{{ $randomQuiz->title }}</h1>
    <img src="{{ asset($randomQuiz->image_path) }}" alt="Quiz Image">
    <p>{{ $randomQuiz->problem_statement }}</p>

    <form method="post" action="{{ route('check', ['quizId' => $randomQuiz->id]) }}">
        @csrf
        <input type="radio" name="selected_answer" value="1"> {{ $randomQuiz->answer_1 }}<br>
        <input type="radio" name="selected_answer" value="2"> {{ $randomQuiz->answer_2 }}<br>
        <input type="radio" name="selected_answer" value="3"> {{ $randomQuiz->answer_3 }}<br>
        <input type="radio" name="selected_answer" value="4"> {{ $randomQuiz->answer_4 }}<br>
        <button type="submit">回答する</button>
    </form>
@endsection