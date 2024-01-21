<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
@extends('layouts.app')

@section('title', 'Quiz')

@section('content')
    <h1>ジャンル一覧</h1>

    @foreach ($genres as $genre)
        <a href="{{ url('/quizzes', $genre->category) }}">{{ $genre->category }}</a><br>
    @endforeach
@endsection