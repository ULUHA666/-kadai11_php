<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.19.4/dist/css/uikit.min.css" />
  <link rel="stylesheet" href="css/login.css">

<!-- <style>div{padding: 10px;font-size:16px;}</style> -->
<title>ログイン画面</title>

</head>
<body>

<header>
  <!-- <nav class="navbar navbar-default">LOGIN</nav> -->
  <img src="img/login.png" alt="">
</header>

<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="login_act.php" method="post">
ID:<input type="text" name="lid">
PW:<input type="password" name="lpw">
<input type="submit" value="ログイン">
</form>


</body>
</html>