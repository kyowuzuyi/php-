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
��̗�̏ꍇ�Ainclude��1��ōς�ł��܂����Acontents.php�̐������e�𓯂��y�[�W���ŉ��x���J��Ԃ��K�v������ꍇ�A�s�xinclude����̂ł͂Ȃ��A�ϐ��Ɋi�[���Ă����������悢�Ƃ������ƂɂȂ�܂��B



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