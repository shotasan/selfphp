<?php
function max_min(float ...$args): array {
  return [max($args), min($args)];
}

$result = max_min(10, 2, -5, 3, 78);
print_r($result);
// list命令で配列の内容を変数に振り分ける
list($max, $min) = max_min(10, 2, -5, 3, 78);
print "最大値{$max},最小値{$min}";