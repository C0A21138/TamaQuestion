<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>管理画面</title>
        <style>
            html,
            body {
                height: 100%;
            }

            body {
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            form {
                text-align: right;
            }
        </style>
    </head>

    <body>
        <main>
            @auth('admin')
            <p>ログイン中です。</p>
            <p>管理ユーザ名: {{ auth('admin')->user()->name }}</p>
            @endauth
            <form method="POST" action="{{ route('admin.login.destroy') }}">
                @method('DELETE')
                @csrf
                <button type="submit">ログアウト</button>
            </form>
        </main>
    </body>
</html>
