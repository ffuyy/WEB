<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("mysql_connect.inc.php");
$id = $_POST['id'];
$pw = $_POST['pw'];
//搜尋資料庫資料
$sql = "SELECT `number`,`password`,`phone` FROM rider_data where number = '$id'";
$result = $link->query($sql);
$row = $result->fetch_assoc();
if($id != null && $pw != null && $row["number"] == $id && $row["password"] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['rider_number'] = $id;
        $_SESSION['rider_phone'] = $row["phone"];
        echo 'rider登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=ridermember.php>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>