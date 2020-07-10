<?php
$data = ["A", "B", "C", "D"];
foreach ($data as $value) {
  $value = "New" . $value;
}
print_r($data);

$data = ["A", "B", "C", "D"];
foreach($data as &$value){
  $value = "New" . $value;
}
print_r($data);