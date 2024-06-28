<?php

//1. POSTデータ取得
$name = $_POST['name'];
$capital = $_POST['capital'];
$industry = $_POST['industry'];
$email = $_POST['email'];
$password = $_POST['password'];

//2. DBからPHPに接続します
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=php02kadai;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//３．何をしたいかデータ登録SQL作成
$stmt = $pdo->prepare('INSERT INTO 
               user(id,name,capital,industry,email,password,date)
               VALUES( NULL, :name, :capital, :industry,:email, :password, now() ) ');


//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR

$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':capital', $capital, PDO::PARAM_INT);
$stmt->bindValue(':industry', $industry, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{
  //５．index.phpへリダイレクト
  header('Location: complete.php');

}
?>


