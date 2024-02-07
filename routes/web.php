<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuizController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/map', function () {
    return view('map');
})->name('map');

Route::get('/quiz_create', function () {
    return view('quiz_create');
})->name('quiz_create');

Route::get('/', [PostController::class, 'showPosts']);
Route::get('/quizzes', [QuizController::class, 'index']);
Route::get('/quizzes/{category}', [QuizController::class, 'showQuizzes'])->name('show_quizzes');
Route::get('/quizzes/{category}/random', [QuizController::class, 'randomQuiz'])->name('random_quiz');
Route::get('/quiz/{quizId}', [QuizController::class, 'showQuiz'])->name('show_quiz');
Route::post('/quiz/{quizId}/check', [QuizController::class, 'checkAnswer'])->name('check');
Route::get('/quiz/{quizId}/result/{isCorrect}', [QuizController::class, 'showResult'])->name('result');
Route::get('/posts', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/api/posts', [PostController::class, 'getPosts']);