<?php
/*
echo���߂��f���o�����e���ꎞ�I�ɕϐ��ɓ��ꂽ���ꍇ��A�t�@�C���ɕۑ��������ꍇ�Ȃǂ́A�v���O�������Ń^�C�~���O���w�肵�āA�W���o�͂̃o�b�t�@�����O���s�����Ƃ��\�ł��B
*/

echo 'a';
ob_start();
echo 'b';
$buffer = ob_get_contents();
echo 'c';
ob_end_clean();
echo 'd';

echo $buffer;

//���̃v���O������WEB�u���E�U�ő��点��ƁA�u���E�U�̃E�B���h�E�ɂ́had�h�Əo�͂���܂��Bob_start��ob_end_clean�֐��ɋ��܂�Ă��镔���ŏo�͂����ׂ��hbc�h�́A���̊ԕW���o�͂��W���b�N����Ă���̂ŕ\������܂���B
//����A�I�����̊֐���ob_end_clean�ł͂Ȃ�ob_end_flush�ɂ����ꍇ�A�o�b�t�@�����O�̏I�����ɒ��߂Ă����o�͓��e��W���o�͂ɊJ�����܂��B�����ŁA�u���E�U�̏o�͂́habcd�h�ƂȂ�܂��B
?>



