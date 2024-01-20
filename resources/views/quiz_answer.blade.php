<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
@extends('layouts.app')

@section('title', 'Quiz')

@section('content')
<!--
とりあえずボタンを押したら画面遷移できるようにしました。
figmaの通りボタン内の文字の色は黒になってます。
あとはアイコンを入れるといいと思います。
注意事項
1.遷移先を大学のホムペにしているのでアプリ実装時に直すこと
2.アイコンを入れてないので後で入れること
3.figmaのurlも残してあるので実装時に消したほうがいいと思いました。
-->
<div style="text-align: center;">
    <a href="https://www.teu.ac.jp/">
        <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 100px;">
            <font color="#000000">
                クイズ
                <font>
        </div>
    </a>
    <br>
    <font size="50px" color="red">
        正解!
    </font>
    <br>
    <br>
    写真
    <br>
    <br>
    <p style="text-align: left">
        解説
    </p>
    <p style="text-align: left">
        高尾さんの中腹にあります。高尾さんの中腹にあります。高尾さんの中腹にあります。
    </p>

    <br>
    <div style="cursor: pointer;align-items: center;" onclick="navigateToPage()">
        <div style="font-size: 16px;">次の問題へ</div>
        <div style="font-size: 24px;">→</div>
    </div>

    <script>
        function navigateToPage() {
            // ページの遷移先URLを指定してください
            window.location.href = '別のページのURL';
        }
    </script>
</div>
@endsection