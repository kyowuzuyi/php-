#!/bin/sh

# �o�b�N�A�b�v�̕ۑ����ԁidays�j
period=3

# �o�b�N�A�b�v�ۑ��p�f�B���N�g���̎w��
dirpath='/root/mysql/backup'

# �t�@�C�������w�肷��(���t�@�C�����œ��t���킩��悤�ɂ��Ă����܂�)
filename=`date +%y%m%d`

# �w�肵��DB�̃X�L�[�}����уf�[�^�����ׂēf���o��
mysqldump -u[���[�U��] -p[�p�X���[�h] -h[�z�X�g��] [�f�[�^�x�[�X��] > $dirpath/$filename.sql

# �p�[�~�b�V�����ύX
chmod 700 $dirpath/$filename.sql

# �ۑ����Ԃ��߂����o�b�N�A�b�v���폜
oldfile=`date --date "$period days ago" +%y%m%d`
rm -f $dirpath/$oldfile.sql
