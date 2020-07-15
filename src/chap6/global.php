<?php
// グローバルスコープの宣言
$y = 10;
function checkScope1(): int {
  // 関数内の変数はローカルスコープ
  return ++$y;
}
print checkScope1();
print $y;

$x = 10;
function checkScope(): int {
  // グローバルスコープにアクセスする
  global $x;
  return ++$x;
}
print checkScope();
print $x;