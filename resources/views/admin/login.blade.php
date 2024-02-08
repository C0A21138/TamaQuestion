<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>管理</title>
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
            <form method="POST" action="{{ route('admin.login.store') }}">
                @csrf
                <div>
                    <label for="name">Name: </label>
                    <input type="text" id="name" name="name" required />
                </div>
                <div>
                    <label for="password">Password: </label>
                    <input type="password" id="password" name="password" required />
                </div>
                <div>
                    @error('failed')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
                    <button type="submit">ログイン</button>
                </div>
            </form>
        </main>
    </body>
</html>
