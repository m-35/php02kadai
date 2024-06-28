<?php
require_once('funcs.php');

//1.  DB接続します
// insert.phpからコピペ
try {
    //ID:'root', Password: xamppは 空白 ''
    $pdo = new PDO('mysql:dbname=php02kadai;charset=utf8;host=localhost', 'root', '');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM user");
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);

} else {
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<p>';
        $view .= h($result['date'] ).'  /  ' . h($result['name'] ).'  /  ' . h($result['capital'] ).'  /  '. h($result['industry'] ).'  /  '. h($result['email'] ).'  /  ' . h($result['password']);
        $view .= '</p>';
    }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>アカウント情報表示一覧</title>
<link href="css/styles.css" rel="stylesheet">
<style>
div{
  padding: 10px;
  font-size:18px;
  width: 900px; /* borderとpaddingをwidthに含める */
  box-sizing: border-box; /* CSS3, IE8~, Opera8~ */
  }
</style>
</head>

<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">新規アカウント登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="account"><?= $view ?></div>
</div>
<!-- Main[End] -->

</body>
</html>