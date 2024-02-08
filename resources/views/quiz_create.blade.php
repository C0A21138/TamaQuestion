<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>quiz</title>
        <link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
    </head>
<body>

<form action="#" method="post">

    <p>タイトル:
    <input type="text" name="Title"></p>
    
    <p>写真:
    <input type="file" name="image_path" id="image_path" required accept=".jpg, .jpeg, .png, .gif"></p>

    <p>問題文:
        <textarea id="problem_statement"></textarea>
    </p>

    <p>選択肢1:
    <input type="text" name="s1"></p>

    <p>選択肢2:
    <input type="text" name="s2"></p>

    <p>選択肢3:
    <input type="text" name="s3"></p>

    <p>選択肢4:
    <input type="text" name="s4"></p>

    <p>問題の解答番号:
        <select name="kaitou">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
    </p>

    <p>解説文:
        <textarea id="explanation"></textarea>
    </p>

    <p>ジャンル:
        <select name="kaitou">
            <option value="Anime">アニメ</option>
            <option value="Railway">鉄道</option>
            <option value="Movie">映画・ドラマ</option>
        </select>
    </p>
    <p><input type="submit" value="送信"></p>

</form>
</body>