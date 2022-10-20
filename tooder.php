<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
   $bdaytime = $_POST["bdaytime"];

   $servername = "140.138.243.150";
   $username = "webbb";
   $severpassword = "webbb";
   $dbname = "ac";

   $id = $_SESSION['number'];
   
   if($_SESSION['number'] != null)
{
      if($bdaytime != null){
   $conn = new mysqli($servername, $username, $severpassword, $dbname);
   if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $room_1 = $_SESSION['room'] ;
  $phone = $_SESSION['phone'];
  $type_1 = "餐廳準備中";

  $sql = "UPDATE foodorder SET `type`= '$type_1',`datetime`='$bdaytime' WHERE `id` = '$id'";
//   $sql = "INSERT INTO foodorder (ID, food, datetime,cost,type,room,phone)
//   VALUES ('$id', '$store', '$bdaytime','$sel', '餐廳準備中','$room_1','$phone')";

     if ($conn->query($sql) === TRUE) {
        print ("<p  >".$id."已訂購成功</p>");
        print ("<p  >".$bdaytime."送達</p>");
        print ("<a href='menu.php'>回到菜單</a>");
     } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
     }
     $conn->close();
   
   }
   else{
      echo 'input error';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=post.php>';
   }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=../../index.php>';
}
?>