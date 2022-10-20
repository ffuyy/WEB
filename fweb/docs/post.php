<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
error_reporting(E_ALL || ~E_NOTICE);
   $sel = $_POST["id"];
   $store = @$_POST["store"];

   $servername = "140.138.243.150";
   $username = "webbb";
   $severpassword = "webbb";
   $dbname = "ac";
   $id = $_SESSION['number'];
   
   if($_SESSION['number'] != null)
{
   if($sel != null){
   $conn = new mysqli($servername, $username, $severpassword, $dbname);
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

include("../../mysql_connect.inc.php");

$sql1 = "SELECT `room`,`type` FROM foodorder where id = '$id'";
$result1 = $link->query($sql1);
$row1 = $result1->fetch_assoc();

if($row1['type'] == "外送員已經接單" || $row1['type'] == "餐廳準備中")
{
   print ("<p  >上一份訂單沒完成</p>");
   print ("<p  >不能下單</p>");
   print ("<a href='../../myoder.php'>我的餐單</a>");
}
else
{
   $room_1 = $_SESSION['room'] ;
   $phone = $_SESSION['phone'];
 
   $sql = "INSERT INTO foodorder (ID, food,cost,type,room,phone)
   VALUES ('$id', '$store','$sel', '還沒送出','$room_1','$phone')";
 //   $sql = "INSERT INTO foodorder (ID, food, datetime,cost,type,room,phone)
 //   VALUES ('$id', '$store', '$bdaytime','$sel', '餐廳準備中','$room_1','$phone')";
 
      if ($conn->query($sql) === TRUE) {
         print ("<p  >".$id."</p>");
         print ("<p  >已經加入你的餐點</p>");
         print ("<p  >請到你的餐點送出餐點</p>");
         print ("<a href='../../menu.php'>回到菜單</a>");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      $conn->close();
}
   }
   else{
      echo 'input error';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=../../menu.php>';
   }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=../../index.php>';
}
?>