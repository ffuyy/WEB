<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>登入頁面</title>
 <link rel="stylesheet" href="assets/css/button1.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@400;700&family=Jua&family=Lato:ital,wght@1,300&family=Mochiy+Pop+One&family=Noto+Sans+HK&family=Outfit&family=Raleway:wght@300&family=Russo+One&display=swap" rel="stylesheet">
    <?php require_once "rider.html" ?>
    <style>
    body {
    min-height: 100vh;
    max-width: 400px;
    margin: 0 auto;
}
</style>
  </head>
  <body >
  <div style="border: 2px solid #FFFFFF; border-radius: 20px; background-color :#FFFFFF;text-align:center ;margin-top:55px;width : 20xp;font-size: 150%;">
             <b><h2 style="font-family: 'Balsamiq Sans', cursive;font-size:40px;">Rider Login</h2></b>
           <div>
           <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form name="form" method="post" action="riderconnect.php">
帳號：<input type="text" name="id" /> <br>
密碼：<input type="password" name="pw" /><br><br>
<a href="riderregister.php" style="color:#FA8072;font-size:25px;">申請帳號</a><br><br>
<input class="button-54" type="submit" name="button" value="登入" />
<br><br><br>
</div>
</form>
   </div>
  </body>
</html>