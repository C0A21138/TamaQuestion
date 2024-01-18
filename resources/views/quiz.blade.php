<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/quiz.css') }}">
@extends('layouts.app')

@section('title', 'Quiz')

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
        <div style="text-align:left;">
        わからない場合
        </div>
        <br>
        <a href="https://www.teu.ac.jp/">
        <div style="padding: 20px; margin-bottom: 20px; border: 1px solid #333333; border-radius: 10px;">
        <font color="#000000">
        今日のおすすめクイズ
        <font>
        </div>
        </a>
        <br>
        <p>ジャンル</p>
        <a href="https://www.teu.ac.jp/">
        <div style="padding: 20px; margin-bottom: 20px; border: 1px solid #333333; border-radius: 10px;">
        <font color="#000000">
        アニメクイズ
        <font>
        </div>
        </a>
        <br>
        <a href="https://www.teu.ac.jp/">
        <div style="padding: 20px; margin-bottom: 20px; border: 1px solid #333333; border-radius: 10px;">
        <font color="#000000">
        ドラマ・映画クイズ
        <font>
        </div>
        </a>
        <br>
        <a href="https://www.teu.ac.jp/">
        <div style="padding: 20px; margin-bottom: 20px; border: 1px solid #333333; border-radius: 10px;">
        <font color="#000000">
        鉄道クイズ
        <font>
        </div>
        </a>
        <br>
        <p>クイズ機能を試す場合は<br>以下のリンクをクリック！</p>
        <a href="https://www.figma.com/proto/6zGQZa98IYpUt1Gi2vMtTQ/%E3%82%A2%E3%83%97%E3%83%AA%E3%81%AE%E3%83%97%E3%83%AD%E3%83%88%E3%82%BF%E3%82%A4%E3%83%97?type=design&node-id=43-93&t=RCoFvkTa4GwX3Z5e-1&scaling=scale-down&page-id=0%3A1&starting-point-node-id=43%3A93&show-proto-sidebar=1&mode=design">
            プロトタイプへ移動する
        </a>
    </div>
@endsection