<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class QuizController extends Controller
{
    public function index()
    {
        // ジャンル一覧を取得
        $genres = Quiz::select('category')->distinct()->get();

        return view('quizzes', compact('genres'));
    }

    public function showQuizzes($category)
    {
        // 選択したジャンルのクイズ一覧を取得
        $quizzes = Quiz::byCategory($category)->get();

        return view('category_quizzes', compact('category', 'quizzes'));
    }

    public function showQuiz($quizId)
    {
        $quiz = Quiz::findOrFail($quizId);

        return view('show_quiz', compact('quiz'));
    }

    public function randomQuiz($category)
    {
        $randomQuiz = Quiz::byCategory($category)->inRandomOrder()->first();

        return view('random_quiz', compact('randomQuiz'));
    }

    public function checkAnswer(Request $request, $quizId)
    {
        $quiz = Quiz::findOrFail($quizId);
        $selectedAnswer = $request->input('selected_answer');

        $isCorrect = $selectedAnswer == $quiz->correct_answer_num;
        $explanation = $isCorrect ? $quiz->explanation : null;

        // $isCorrect において、true の場合は 1、false の場合は 0
        return Redirect::route('result', ['quizId' => $quizId, 'isCorrect' => $isCorrect ? 1 : 0]);
    }

    public function showResult($quizId, $isCorrect)
    {
        $quiz = Quiz::findOrFail($quizId);

        return view('result', compact('quiz', 'isCorrect'));
    }
}
