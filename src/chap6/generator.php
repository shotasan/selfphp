<?php
function myGen() {
  yield "あいうえお";
  yield "カキクケコ";
  yield "さしすせそ";
}

foreach(myGen() as $value) {
  print $value."<br/>";
}