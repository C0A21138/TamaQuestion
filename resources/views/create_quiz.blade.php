<h1>クイズ投稿</h1>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<form method="post" action="{{ route('quiz.store') }}" enctype="multipart/form-data">

    <label for="title">タイトル:</label>
    <input type="text" name="title" required>

    <label for="image">画像:</label>
    <input type="file" name="image" accept="image/*" required>

    <label for="problem_statement">問題文:</label>
    <textarea name="problem_statement" rows="4" required></textarea>

    <label for="answer_1">選択肢1:</label>
    <input type="text" name="answer_1" required>

    <label for="answer_2">選択肢2:</label>
    <input type="text" name="answer_2" required>

    <label for="answer_3">選択肢3:</label>
    <input type="text" name="answer_3" required>

    <label for="answer_4">選択肢4:</label>
    <input type="text" name="answer_4" required>

    <label for="correct_answer_num">正解の選択肢番号 (1から4の整数):</label>
    <input type="number" name="correct_answer_num" min="1" max="4" required>

    <label for="explanation">解説:</label>
    <textarea name="explanation" rows="4"></textarea>

    <label for="category">ジャンル:</label>
    <input type="text" name="category" required>

    <button type="submit">投稿する</button>
</form>