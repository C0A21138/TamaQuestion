# アプリ「たまくえすちょん」：TamaQuestion
![GitHub Stars](https://img.shields.io/github/stars/C0A21138/TamaQuestion?style=social&label=Stars&color=brightgreen)  
![Repository Size](https://img.shields.io/github/repo-size/C0A21138/TamaQuestion?color=brightgreen)
![Languages](https://img.shields.io/github/languages/top/C0A21138/TamaQuestion?color=brightgreen)
[![Laravel Version](https://img.shields.io/badge/laravel-%5E10.10-brightgreen)](https://packagist.org/packages/laravel/framework)  
この"TamaQuestion"は、アプリ「たまくえすちょん」のリポジトリです。  

## 概要説明
「たまくえすちょん」アプリとは、クイズや地図への投稿によって多摩地域の魅力を地域内外に発信するアプリです。  
多摩地域に関するコアなクイズによって多摩地域への自賛・関心を高め、地図投稿によって魅力や思い出を共有していただきます。  
私たちは、この「たまくえすちょん」アプリによって、多摩地域の活性化を目指しています。

## 4つのタブ
- Home：ユーザーの投稿を写真と文章で閲覧できます。その投稿からMapタブに移動し、場所をすぐに確認できます。
- Quiz：多摩地域に関するクイズが出題されます。
- Map：ユーザーの投稿を地図上で確認することができます。また地図上でピンによって場所を指定し、投稿を行うことができます。
- Post：多摩地域の魅力や思い出を投稿することができます。

## テスト方法
### 1. XAMPPのインストール(Windows)
以下のURLでXAMPPをインストールする  
https://www.apachefriends.org/jp/download.html  
PHPのバージョン8.1以上を選択してダウンロード


### 2. Composerのインストール(Windows)
以下のURLでComposerをインストールする  
https://getcomposer.org/doc/00-intro.md#installation-windows  
Composer-Setup.exeをインストールし、実行する  
![composer](https://github.com/C0A21138/TamaQuestion/assets/85669940/c1867ec4-9c80-45db-9faf-89bc4c4dde28)

### 3. アプリケーションの開発ソースをインストールする
``` shell
$ git clone https://github.com/C0A21138/TamaQuestion.git
$ cd TamaQuestion
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan storage:link 
```
エラーが出た場合は、以下を実行した後に再度composer installより先を実行してください。
``` shell
$ composer update
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
1. ApacheとMySQLのStartボタンを押下  
2. MySQLのAdminボタンを押下  
3. phpMyAdminにおいてデーターベースを新規作成
  
以下でテーブルを作成します  
``` shell
$ php artisan migrate
```
  
### 5. 開発用サーバーを起動する
``` shell
$ php artisan serve
```
