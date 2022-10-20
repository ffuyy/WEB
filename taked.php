<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
ini_set("display_errors","On");

$prop_id = $_GET['prop_id'];
$rider_number = $_SESSION['rider_number'];
$rider_phone = $_SESSION['rider_phone'];

include("mysql_connect.inc.php");

//搜尋資料庫資料
$sql1 = "SELECT `type` FROM foodorder where id = '$prop_id'";
$result1 = $link->query($sql1);
$row1 = $result1->fetch_assoc();

if($row1['type'] == "還沒送出"){
  echo "<h1>還沒送出</h1>";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=order.php>';
}
else{
if($row1['type'] == "餐廳準備中")
{
$servername = "140.138.243.150";
     $username = "webbb";
     $severpassword = "webbb";
     $dbname = "ac";

     $type_1 = "外送員已經接單";
     
     // Create connection
     $conn = new mysqli($servername, $username, $severpassword, $dbname);
     // Check connection
     if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
     }
     $sql = "UPDATE foodorder SET `type`= '$type_1' WHERE `id` = '$prop_id'";
     $sql3 = "UPDATE foodorder SET `rider`= '$rider_number', `rider_phone`= '$rider_phone'WHERE `id` = '$prop_id'";
     $conn->query($sql3);
     if ($conn->query($sql) === TRUE) {
        echo "<h1>成功接單</h1>";
       echo '<meta http-equiv=REFRESH CONTENT=1;url=order.php>';
     } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
     }
     
     $conn->close();
    }
    else{
        echo "<h1>已經有人接單了</h1>";
        echo '<meta http-equiv=REFRESH CONTENT=1;url=order.php>';
    }
}
?>