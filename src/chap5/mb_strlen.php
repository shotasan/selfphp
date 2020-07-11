<?php
mb_internal_encoding("UTF-8");
$str = "Wingsプロジェクト";
// マルチバイト対応
print mb_strlen($str);
// マルチバイト非対応
print strlen(($str));
print strlen("abcde");