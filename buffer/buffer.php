<?php
/*
echo命令が吐き出す内容を一時的に変数に入れたい場合や、ファイルに保存したい場合などは、プログラム中でタイミングを指定して、標準出力のバッファリングを行うことが可能です。
*/

echo 'a';
ob_start();
echo 'b';
$buffer = ob_get_contents();
echo 'c';
ob_end_clean();
echo 'd';

echo $buffer;

//このプログラムをWEBブラウザで走らせると、ブラウザのウィンドウには”ad”と出力されます。ob_startとob_end_clean関数に挟まれている部分で出力されるべき”bc”は、その間標準出力がジャックされているので表示されません。
//一方、終了時の関数をob_end_cleanではなくob_end_flushにした場合、バッファリングの終了時に貯めていた出力内容を標準出力に開放します。そこで、ブラウザの出力は”abcd”となります。
?>



