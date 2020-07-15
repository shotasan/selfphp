<?php
// 厳密な型チェックを有効にする
declare(strict_types=1);

function getTriangleArea($base, $height) {
  return $base * $height / 2;
}

// 型の指定がないので実行可能
$area = getTriangleArea(8, "10");
print "三角形の面積は{$area}です。";

function getTriangleAreaType(float $base, float $height): float {
  return $base * $height / 2;
}

// 型宣言をしていても自動で変換される場合がある
// $area2 = getTriangleAreaType(8, "10");
// print $area2;