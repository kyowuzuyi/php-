

�܂��A�y�[�W�ɂ���Ăǂ̃t�@�C�����Ăяo�����A����̉\��������ꍇ�Ȃǂɂ́A���̏������ł�include�̎��ӂ����򃍃W�b�N�̋L�q�ȂǂŖc��オ���Ă��܂��A�Ăяo������HTML�̎��F���𑹂Ȃ��܂��B���������邽�߁A�R���e���c���Ăяo�������ł͕ϐ��̏o�͂ɂƂǂ߁A�ϐ��ɓ����l��PHP�̃��W�b�N�����ɂĂ��炩���ߋ��߂Ă����Ƃ������`�ɂ�������x�^�[�ł��B���̏ꍇ�ɂ��A�o�̓o�b�t�@�֐������ɗ����܂��B

<?php
ob_start();
if("������"){
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