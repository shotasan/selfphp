<?php
// 値渡し
function increment(int $num): int {
  $num++;
  return $num;
}

$value = 10;
print increment($value);
print $value;

// 参照渡し
function increment1(int &$num): int {
  $num++;
  return $num;
}

$value = 10;
print increment1($value);
print $value;
