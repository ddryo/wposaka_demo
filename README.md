# wposaka_demo

「WordPress Meetup Osaka」（2020/01/12） でのデモサイトを作るためのプラグインです。

/assets/css/ の中にある３つのCSSを読み込むだけのもの。

- common.css : フロント & エディターで読み込む
- front.css : フロントでのみ読み込む
- editor.css : エディターで読み込む

開発時は SCSS をビルドしています。

## build

```
npm install
```

## start

```
npm run gulp
```

 * npxをインストールしている人は `npx gulp` でも化。 *