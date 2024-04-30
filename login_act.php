<?php
//最初にSESSIONを開始！！ココ大事！！
session_start();

//POST値
$lid = $_POST["lid"]; //lid
$lpw = $_POST["lpw"]; //lpw

echo $lid;
echo $lpw;
//1.  DB接続します
require_once 'funcs.php';
$pdo = db_conn();
// var_dump("aaa");
// //1.  DB接続します
// try {
//   //Password:MAMP='root',XAMPP=''
//   // $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
//   $pdo = new PDO('mysql:dbname=uluha666_gs_kadai;charset=utf8;host=mysql621.db.sakura.ne.jp','uluha666','uxmu57bk');
// } catch (PDOException $e) {
//   exit('DB_CONECT:'.$e->getMessage());
// }
// // include("funcs.php");
// // $pdo = db_conn();
// echo "bbb";

// //2. データ登録SQL作成
//* PasswordがHash化→条件はlidのみ！！
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE lid=:lid AND life_flg=0");
// $stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE lid=:lid AND life_flg=0");

// echo $stmt;
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
// $stmt->bindValue(':lid', $lid,PDO::PARAM_STR);

$status = $stmt->execute();

// $stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE lid=:lid AND life_flg=0");
// $stmt->bindValue(':lid', $lid,PDO::PARAM_STR);
// $status = $stmt->execute();







// echo "ccc";
//3. SQL実行時にエラーがある場合STOP
if ($status == false) {
  sql_error($stmt);
}

// //4. 抽出データ数を取得
$val = $stmt->fetch();         //1レコードだけ取得する方法
// var_dump($val);
// //$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能()

// echo "aaa";
// //5.該当１レコードがあればSESSIONに値を代入
// //入力したPasswordと暗号化されたPasswordを比較！[戻り値：true,false]
$pw = password_verify($lpw, $val["lpw"]);
echo $pw;
// $lpw = password_hash($lpw, PASSWORD_DEFAULT);   //パスワードハッシュ化
// echo $lpw;

if ($pw) {
  //Login成功時
  $_SESSION["chk_ssid"]  = session_id();
  $_SESSION["kanri_flg"] = $val['kanri_flg'];
  $_SESSION["name"]      = $val['name'];
  //Login成功時（select.phpへ）
  header("Location: select.php");
} else {
  //Login失敗時(login.phpへ)
  header("Location: login.php");
}

exit();
