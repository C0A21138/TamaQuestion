<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AdminLoginController;

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

// Mapタブ
Route::get('/map', function () {
    return view('map');
})->name('map');

// Homeタブ
Route::get('/', [PostController::class, 'showPosts']);

// Quizタブ
Route::get('/quizzes', [QuizController::class, 'index']);
Route::get('/quizzes/{category}', [QuizController::class, 'showQuizzes'])->name('show_quizzes');
Route::get('/quizzes/{category}/random', [QuizController::class, 'randomQuiz'])->name('random_quiz');
Route::get('/quiz/{quizId}', [QuizController::class, 'showQuiz'])->name('show_quiz');
Route::post('/quiz/{quizId}/check', [QuizController::class, 'checkAnswer'])->name('check');
Route::get('/quiz/{quizId}/result/{isCorrect}', [QuizController::class, 'showResult'])->name('result');

// Postタブ
Route::get('/posts', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/api/posts', [PostController::class, 'getPosts']);

// 管理ログイン画面
Route::get('/admin-login', [AdminLoginController::class, 'create'])->name('admin.login');
// 管理ログイン
Route::post('/admin-login', [AdminLoginController::class, 'store'])->name('admin.login.store');
// 管理ログアウト
Route::delete('/admin-login', [AdminLoginController::class, 'destroy'])->name('admin.login.destroy');

// 管理ログイン後にアクセス可能
Route::middleware('auth:admin')->group(function () {
    Route::get('/admin', function () {
        return view('admin.top');
    })->name('admin.top');
    Route::get('/quiz/create', [QuizController::class, 'create'])->name('create_quiz');
    Route::post('/quiz', [QuizController::class, 'store'])->name('quiz_store');
});