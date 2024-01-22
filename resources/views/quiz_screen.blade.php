<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
@extends('layouts.app')

@section('title', 'Quiz')
<!--
注意事項
ボタンを押したら遷移先は大学のホムペになってるから適当に直すこと！！
-->
@section('content')
<div style="text-align: center;">
    <a href="https://www.teu.ac.jp/">
        <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 100px;">
            <font color="#000000">
                クイズ
                <font>
        </div>
    </a>
    <br>
    写真
    <br>
    <br>
    <p style="text-align: left">
    問題文問題文問題文問題文問題文問題文問題文問題文問題文問題文問題文問題文問題文問題文
    </p>
    <br>
    <a href="https://www.teu.ac.jp/">
        <div style="padding: 10px; margin-bottom: 20px; border: 1px solid #333333; border-radius: 100px;">
            <font color="#000000">
                回答1
                <font>
        </div>
    </a>
    <a href="https://www.teu.ac.jp/">
        <div style="padding: 10px; margin-bottom: 20px; border: 1px solid #333333; border-radius: 100px;">
            <font color="#000000">
                回答2
                <font>
        </div>
    </a>
    <a href="https://www.teu.ac.jp/">
        <div style="padding: 10px; margin-bottom: 20px; border: 1px solid #333333; border-radius: 100px;">
            <font color="#000000">
                回答3
                <font>
        </div>
    </a>
    <a href="https://www.teu.ac.jp/">
        <div style="padding: 10px; margin-bottom: 20px; border: 1px solid #333333; border-radius: 100px;">
            <font color="#000000">
                回答4
                <font>
        </div>
    </a>
    <p>クイズ機能を試す場合は<br>以下のリンクをクリック！</p>
    <a
        href="https://www.figma.com/proto/6zGQZa98IYpUt1Gi2vMtTQ/%E3%82%A2%E3%83%97%E3%83%AA%E3%81%AE%E3%83%97%E3%83%AD%E3%83%88%E3%82%BF%E3%82%A4%E3%83%97?type=design&node-id=43-93&t=RCoFvkTa4GwX3Z5e-1&scaling=scale-down&page-id=0%3A1&starting-point-node-id=43%3A93&show-proto-sidebar=1&mode=design">
        プロトタイプへ移動する
    </a>
</div>
@endsection