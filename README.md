# wposaka_demo

「WordPress Meetup Osaka」（2020/01/12） でのデモサイトを作るためのプラグインです。


## How to use
zipダウンロードしたものをプラグインとしてインストールしてください。

「PLUGIN DEMO」という名前のプラグインが出てくると思うので、「有効化」。

## Overview
/assets/ の中にある３つのCSSを読み込むだけのもの。

- common.css : フロント & エディターで読み込む
- front.css : フロントでのみ読み込む
- editor.css : エディターで読み込む

開発時は SCSS をビルドしています。
また、おまけでひとつだけフロント側に js を読み込ませています。

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