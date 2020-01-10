module.exports = {
    plugins: ['stylelint-scss'],
    extends: [
        'stylelint-config-wordpress',
        'stylelint-config-rational-order',
    ],
    ignoreFiles: ['./src/scss/inc/bass/**/*.scss', './**/*.js'],
    rules: {
        'max-line-length': null, //max文字数を無視
        'selector-class-pattern': null,
        'indentation': 'tab',
        'function-url-quotes': 'never', //不必要なクォーテーションを禁止( 自動Fixできないので注意 )
        'no-descending-specificity': null, //セレクタの詳細度に関する警告を出さない
        'number-leading-zero': 'never', //0.5emなどは.5emに
        'font-weight-notation': null, //font-weightの指定は自由
        'font-family-name-quotes': null,
        'font-family-no-missing-generic-family-keyword': null, //sans-serif / serifを必須にするか。object-fitでエラーださないようにする。
        'at-rule-no-unknown': null, //scssで使える @include などにエラーがでないように
        'scss/at-rule-no-unknown': true, //scssでもサポートしていない @ルールにはエラーを出す
        // 'order/properties-alphabetical-order': true, //ABC順
    },
};
