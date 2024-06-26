<?php
session_start();
//※htdocsと同じ階層に「includes」を作成してfuncs.phpを入れましょう！
//include "../../includes/funcs.php";
include("funcs.php");
sschk();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <!-- <title>USERデータ登録</title>
    <link rel='stylesheet' href='css/style.css'> -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="css/user.css">
    <img src="img/touroku.png" alt="ログイン画像">

    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <?php echo $_SESSION["name"]; ?>さん　
        <?php include("menu.php"); ?>
        <a class="navbar-brand" href="select.php">アンケート一覧</a>
      <a class="navbar-brand" href="user.php">ユーザー登録</a>
      <a class="navbar-brand" href="logout.php">ログアウト</a>


    </header>
    <!-- Head[End] -->


    <!-- Main[Start] -->
    <form method="post" action="user_insert.php">
        <div class="jumbotron">
            <fieldset>
                <label>名前：<input type="text" name="name"></label><br>
                <label>Login ID：<input type="text" name="lid"></label><br>
                <label>Login PW<input type="text" name="lpw"></label><br>
                <label>管理FLG：
                    一般<input type="radio" name="kanri_flg" value="0">　
                    管理者<input type="radio" name="kanri_flg" value="1">
                </label>
                <br>
                <!-- <label>退会FLG：<input type="text" name="life_flg"></label><br> -->
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->


</body>

</html>