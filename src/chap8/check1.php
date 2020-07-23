<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- <form action="check2.php" method="POST">
    あなたがよく使用するサーバサイド技術は？<br/>
    <input type="checkbox" name="arch" id="php" value="PHP">
    <label for="php">PHP</label>
    <input type="checkbox" name="arch" id="jsp" value="JSP&サーブレット">
    <label for="jsp">JPS&サーブレット</label>
    <input type="checkbox" name="arch" id="asp" value="ASP.NET">
    <label for="asp">ASP.NET</label>
    <input type="submit" value="送信">
  </form> -->
  <form action="check2.php" method="POST">
    あなたがよく使用するサーバサイド技術は？<br/>
    <input type="checkbox" name="arch[]" id="php" value="PHP">
    <label for="php">PHP</label>
    <input type="checkbox" name="arch[]" id="jsp" value="JSP&サーブレット">
    <label for="jsp">JPS&サーブレット</label>
    <input type="checkbox" name="arch[]" id="asp" value="ASP.NET">
    <label for="asp">ASP.NET</label>
    <input type="submit" value="送信">
  </form>
</body>
</html>