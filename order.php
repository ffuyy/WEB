<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
error_reporting(E_ALL || ~E_NOTICE);

echo '<title>YZU Foodie Rider</title>';
echo '<a href="riderlogout.php">登出</a>';
if($_SESSION['rider_number'] != null)
{
include("mysql_connect.inc.php");

//搜尋資料庫資料
// $sql = "SELECT `foodorder.id`, `restaurant_1.name`,`restaurant_1.food`,`restaurant_1.price` FROM restaurant_1 INNER JOIN foodorder ON `foodorder.food`=`restaurant_1.id`" ;
$sql = "SELECT `foodorder`.`phone`,`foodorder`.`room`,`foodorder`.`type`,`foodorder`.`id`, `restaurant_1`.`name`,`restaurant_1`.`food`,`restaurant_1`.`price`,`foodorder`.`cost`,`foodorder`.`datetime`
FROM foodorder
LEFT JOIN restaurant_1
ON (`foodorder`.`food`=`restaurant_1`.`id`) 
WHERE `foodorder`.`cost`=`restaurant_1`.`food_id`;";
$result = $link->query($sql);
echo "<h1>接單會一次接同一客戶的所有餐點</h1>";
echo "<h1>可接訂單：</h1>";


echo "<table border='1'>
<tr>
<th>學號</th>
<th>餐廳</th>
<th>食物</th>
<th>送達時間</th>
<th>房號</th>
<th>收費</th>
<th>客戶電話</th>
<th>狀態</th>
<th>接單</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    if($row['type'] == "餐廳準備中"){
    $prop_id = $row['id'];
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['food'] . "</td>";
echo "<td>" . $row['datetime'] . "</td>";
echo "<td>" . $row['room'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['type'] . "</td>";
echo "<td><a href=\"taked.php?prop_id=".$prop_id."\">接單</a></td>";
echo "</tr>";
    }
}
echo "</table>";

$sql = "SELECT `foodorder`.`rider`,`foodorder`.`phone`,`foodorder`.`room`,`foodorder`.`type`,`foodorder`.`id`, `restaurant_1`.`name`,`restaurant_1`.`food`,`restaurant_1`.`price`,`foodorder`.`cost`,`foodorder`.`datetime`
FROM foodorder
LEFT JOIN restaurant_1
ON (`foodorder`.`food`=`restaurant_1`.`id`) 
WHERE `foodorder`.`cost`=`restaurant_1`.`food_id`;";
$result = $link->query($sql);
echo "<h1>已接訂單：</h1>";
echo "<table border='1'>
<tr>
<th>學號</th>
<th>餐廳</th>
<th>食物</th>
<th>送達時間</th>
<th>房號</th>
<th>收費</th>
<th>客戶電話</th>
<th>狀態</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
    if($_SESSION['rider_number'] == $row['rider']){
    $prop_id = $row['id'];
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['food'] . "</td>";
echo "<td>" . $row['datetime'] . "</td>";
echo "<td>" . $row['room'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['type'] . "</td>";
echo "</tr>";
}
}
echo "</table>";



mysqli_close($link);
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=rider.php>';
}
?>
