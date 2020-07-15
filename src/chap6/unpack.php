<?php
function getTriangleArea(float $base, float $height): float {
  return $base * $height / 2;
}

// 配列の展開（アンパック）
print getTriangleArea(...[10, 5]);