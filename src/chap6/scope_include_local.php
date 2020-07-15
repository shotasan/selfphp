<?php
function checkScope(): string {
  require_once "scope_included.php";
  return $scope;
}

print checkScope();
// 関数内でインクルードした場合はローカルスコープになるのでグローバルからはアクセスできない
print $scope;