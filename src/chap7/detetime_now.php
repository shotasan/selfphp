<?php
$now = new DateTime();
print $now->format("Y年m月d日 H:i:s");

// 日付・時刻文字列からの生成
$now = new DateTime("2016/5/15 10:58:31");
print $now->format("Y年m月d日 H時i分");