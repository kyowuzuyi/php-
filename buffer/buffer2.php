

また、ページによってどのファイルを呼び出すか、分岐の可能性がある場合などには、この書き方ではincludeの周辺が分岐ロジックの記述などで膨れ上がってしまい、呼び出し側のHTMLの視認性を損ないます。それを避けるため、コンテンツを呼び出す部分では変数の出力にとどめ、変数に入れる値をPHPのロジック部分にてあらかじめ求めておくといった形にする方がベターです。その場合にも、出力バッファ関数が役に立ちます。

<?php
ob_start();
if("条件式"){
include("contents1.php");
} else {
include("contents2.php");
}
$contents = ob_get_contents();
ob_end_clean();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
.
.
</head>
<body>
.
.
<div id="contents">
<?php echo $contents; ?>
</div>
.
.
</body>
</html>