# アプリ「たまくえすちょん」：TamaQuestion
この"TamaQuestion"は、アプリ「たまくえすちょん」のレポジトリです。

## テスト方法
### 1. XAMPPのインストール(Windows)
以下のURLでXAMPPをインストールする  
https://www.apachefriends.org/jp/download.html


### 2. Composerのインストール(Windows)
以下のURLでComposerをインストールする  
https://getcomposer.org/doc/00-intro.md#installation-windows


### 3. アプリケーションの開発ソースをインストールする
``` shell
$ git clone https://github.com/C0A21138/TamaQuestion.git
$ cd TamaQuestion
$ composer install
$ cp .env.example .env
$ php artisan key:generate
```

### 4. データベースに接続
.envファイルを編集し、以下にデータベース情報を入力する。  
DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=[データベースの名前]  
DB_USERNAME=[接続するユーザ名]  
DB_PASSWORD=[接続するユーザのパスワード]  
  
データーベースがない場合、XAMPPを立ち上げ、以下の手順で作成してください。
#### 1. ApacheとMySQLのStartボタンを押下
#### 2. MySQLのAdminボタンを押下
#### 3. phpMyAdminにおいてデーターベースを新規作成  
  
以下でテーブルを作成します  
``` shell
$ php artisan migrate
```

### 5. 開発用サーバーを起動する
``` shell
$ php artisan serve
```
