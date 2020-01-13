# wposaka_demo

「WordPress Meetup Osaka」（2020/01/12） でのデモサイトを作るためのプラグインです。

今後の制作で、自由に使いまわしていただいてOKです。

## 当日の復習用メモ

**当日に使用したスライド**

https://docs.google.com/presentation/d/e/2PACX-1vTqCOQekdv2dIzZVD5csrqXvtPIvbnrguzFA2htA5837f_IdRjagRBSQi8S3peawwIUb9slD5LVKDCD/pub?start=false&loop=false&delayms=3000


**解説用のデモサイト**

WEB上に公開しておきました。（スマホ表示もある程度整えました。）

http://demo.loos-web-studio.com/

**伝え忘れ**

- メディアと文章ブロックは「モバイルでは縦に並べる」設定項目があるので、こちらも活用するとスマホのレイアウトも組みやすくなります。
- editor.cssの中身を説明していなかったのですが、ファイル内にコメントつけました。


## How to use
zipダウンロードしたものをプラグインとしてインストールしてください。

「PLUGIN DEMO」という名前のプラグインが出てくると思うので、「有効化」をぽちっと。

## Overview
`/assets/` の中にある３つのCSSを読み込むだけのもの。

- `common.css` : フロント & エディターで読み込む
- `front.css` : フロントでのみ読み込む
- `editor.css` : エディターで読み込む

あと、おまけでフロント側に jsファイルを1つだけ読み込ませています。

※ すでに css ファイルの中身は色々書かれていますが、これは今回のデモサイト制作用の記述なので、使い回す時はまっさらにして使ってください。

※ 開発時は SCSS をビルドしています。

## build

パッケージのインストール

```
npm install
```

以下のコマンドで watch が開始され、scssファイル保存時にcssへ自動的にコンパイルされます。

```
npm run gulp
```

npxをインストールしている人は `npx gulp` でも化。

### stylelint

stylelint も含んでいます。

VS Code なら「stylelint plus」プラグインを入れれば動きます。

今回の用途ではcssを直接確認・編集する人もいると思うので、cssへのコンパイル時にも stylelint の fix を処理させています。