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
<?php include("contents.php"); ?>
</div>
.
.
</body>
</html>



/*-------------------*/
上の例の場合、includeは1回で済んでいますが、contents.phpの生成内容を同じページ内で何度も繰り返す必要がある場合、都度includeするのではなく、変数に格納しておいた方がよいということになります。



<?php
ob_start();
include("contents.php");
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
<div id="contents1">
<?php echo $contents; ?>
</div>
<div id="contents2">
<?php echo $contents; ?>
</div>
.
.
</body>
</html>