# アプリ「たまくえすちょん」：TamaQuestion
この"TamaQuestion"は、アプリ「たまくえすちょん」のレポジトリです。

## テスト方法
### 1. xamppのインストール(Windows)
https://www.apachefriends.org/jp/download.html


### 2. composerのインストール(Windows)
https://getcomposer.org/doc/00-intro.md#installation-windows


### 3. アプリケーションの開発ソースをインストールする
``` shell
$ git clone https://github.com/C0A21138/TamaQuestion.git
$ cd TamaQuestion
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan serve
```
