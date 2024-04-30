<?php
//$_SESSION使うよ！
session_start();

//※htdocsと同じ階層に「includes」を作成してfuncs.phpを入れましょう！
//include "../../includes/funcs.php";
include("funcs.php");
sschk();
$pdo = db_conn();

//1. POSTデータ取得
$name      = filter_input(INPUT_POST, "name");
$lid       = filter_input(INPUT_POST, "lid");
$lpw       = filter_input(INPUT_POST, "lpw");
$kanri_flg = filter_input(INPUT_POST, "kanri_flg");
$lpw       = password_hash($lpw, PASSWORD_DEFAULT);   //パスワードハッシュ化

//2. DB接続します
// try {
//     //Password:MAMP='root',XAMPP=''
//     // $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost', 'root', '');
//     $pdo = new PDO('mysql:dbname=uluha666_gs_kadai;charset=utf8;host=mysql621.db.sakura.ne.jp','uluha666','uxmu57bk');

// } catch (PDOException $e) {
//     exit('DBConnection Error:' . $e->getMessage());
// }

//３．データ登録SQL作成
$sql = "INSERT INTO gs_user_table(name,lid,lpw,kanri_flg,life_flg)VALUES(:name,:lid,:lpw,:kanri_flg,0)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    redirect("user.php");
}