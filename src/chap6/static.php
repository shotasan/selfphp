<?php
function checkStatic(): int {
  // 静的変数の宣言
  // 関数の初回呼び出し時に初期化され関数の処理が終了しても維持される
  static $x = 0;
  return ++$x;
}

print checkStatic();
print checkStatic();
// 静的変数はローカルスコープなので外部からはアクセスできない
print $x;