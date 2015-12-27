# laravel-minimum-tutorial
[ING]Laravel5.1でCRUDアプリケーションを作成する簡易チュートリアル

Laravel5.1で最小限の機能＆MVCパターンで作るアプリケーションを作成することで、ざっくりとLaravel5.1での開発概要を掴んで頂く為のミニマムチュートリアルのサンプルになります。

このサンプルに関するチュートリアルの詳細な内容に関しては下記になります。

__■ Laravelの環境設定＆開発体験自作Laravel5.1ミニマムチュートリアルまとめ__
(Qiita) http://qiita.com/fumiyasac@github/items/78a335880f7abb1de8bf

__■ Screen Captureその1（一覧画面）:__
![一覧画面](https://qiita-image-store.s3.amazonaws.com/0/17400/28527040-cd22-8bfe-8666-c221b83bc2e4.png)

__■ Screen Captureその2（詳細画面）:__
![詳細画面](https://qiita-image-store.s3.amazonaws.com/0/17400/42d7853c-243e-a56e-b947-ca7bf36648d6.png)

__■ Screen Captureその3（データ入力画面）:__
![データ入力画面](https://qiita-image-store.s3.amazonaws.com/0/17400/a0f5f6e6-6484-b96a-bf33-491637917eef.png)

__■ Screen Captureその4（データ編集画面）:__
![データ編集画面](https://qiita-image-store.s3.amazonaws.com/0/17400/9e63c98d-4545-0775-ac43-8ea8ce42d9f2.png)

本サンプルの具体的な機能やねらいとしては、

+ Laravel5.1でのCRUD処理を作成と理解
+ Formに関するヘルパー機能と画像アップロードに関するライブラリの活用と理解
+ Routing, View, Model, Controllerの基本的な実装体験と概要理解
+ 実際のサンプルを通してのMVCパターンでの開発体験と概要理解
+ Laravelで開発する際に用いるartisanコマンドを用いた開発体験と概要理解
+ Composerを用いたパッケージ管理に関する概要理解

になります。

※こちらのサンプルはMAMP(バージョン3.4)で動かすことを想定して作られたチュートリアルになります（2015.12.26時点の最新バージョン3.5ですが問題ないかと思います。）

お持ちでない方は下記のリンクよりご自分のMacへインストールして見てください。

すでにデータが入った状態を再現したい方は、このリポジトリをクローン or ZIPファイルを解凍のあと `christmas_menu.sql` をMAMPのMySQLで実行してください。

MAMPのダウンロード：
https://www.mamp.info/en/downloads/
