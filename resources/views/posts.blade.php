<link rel="stylesheet" href="{{ asset('css/posts.css') }}">
@extends('layouts.app')
@section('title', 'Post')

@section('content')
    <h1>投稿</h1>
    <div id="post_content">
        <div id="post_form">
            <!-- フォームを表示 -->
            <form method="post" action="{{ url('/posts') }}" enctype="multipart/form-data">
                @csrf
                <label>写真:</label>
                <input type="file" name="photo" id="photo" required accept=".jpg, .jpeg, .png, .gif" onchange="previewImage(event)">
                <div id="imagePreview"></div>
                <label>タイトル:</label>
                <input type="text" name="title" required>
                <br>
                <label class="content">内容:</label>
                <textarea name="content" required></textarea>
                <br>
                <div class="Coordinate">
                    <div class="lat_lng">
                        <div class="label-input">
                            <label>緯度:</label>
                            <input type="text" name="lat" id="lat" required>
                        </div>
                        <div class="label-input">
                            <label>経度:</label>
                            <input type="text" name="lng" id="lng" required>
                        </div>
                    </div>
                    <button type="button" onclick="moveToMap()" class="map-button">地図で指定</button>
                </div>
                <!-- 緯度経度エラーメッセージ表示用の要素 -->
                <div class="error-message" id="latlng_error-message" style="color: red;"></div>
                <!-- 写真エラーメッセージ表示用の要素 -->
                <div class="error-message" id="photo-error-message" style="color: red;"></div>
                <button type="submit" class="submit_button">投稿する</button>
            </form>
        </div>
    </div>

    <script src="{{ asset('js/posts.js') }}"></script>
@endsection