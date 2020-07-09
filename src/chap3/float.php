<?php
print floor((0.1 + 0.7) * 10);
print '<br/>';
$add = bcadd(0.1, 0.7, 1);
$mul = bcmul($add, 10, 1);
print floor($mul);