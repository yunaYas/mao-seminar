<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>テスト</title>
</head>
<body>
<?php

//クッキーの配列が存在するか確認し、情報を取得する

if (isset($_COOKIE["test"])){
    $c = $_COOKIE["test"];
    echo $c;
}else{
    setcookie("test", 123, time()+(30*24*3600),'/');
}
 ?>

</body>
</html>
