<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
error_reporting(E_ALL || ~E_NOTICE);
echo '<title>My order</title>';
include("mysql_connect.inc.php");

$number = $_SESSION['number'];

//搜尋資料庫資料
// $sql = "SELECT `foodorder.id`, `restaurant_1.name`,`restaurant_1.food`,`restaurant_1.price` FROM restaurant_1 INNER JOIN foodorder ON `foodorder.food`=`restaurant_1.id`" ;
$sql = "SELECT `foodorder`.`rider`,`foodorder`.`rider_phone`,`foodorder`.`type`,`foodorder`.`id`, `restaurant_1`.`name`,`restaurant_1`.`food`,`restaurant_1`.`price`,`foodorder`.`cost`,`foodorder`.`datetime`
FROM foodorder
LEFT JOIN restaurant_1
ON (`foodorder`.`food`=`restaurant_1`.`id`) 
WHERE (`foodorder`.`cost`=`restaurant_1`.`food_id` AND '$number' = `foodorder`.`id`);";
$result = $link->query($sql);
echo '<div><td><a href="menu.php" >回到菜單</a></td></div>';

echo "<table class='styled-table' border='1'>
<tr>
<th>學號</th>
<th>餐廳</th>
<th>食物</th>
<th>送達時間</th>
<th>收費</th>
<th>狀態</th>
<th>外送員</th>
<th>外送員電話</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['food'] . "</td>";
echo "<td>" . $row['datetime'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td>" . $row['type'] . "</td>";
echo "<td>" . $row['rider'] . "</td>";
echo "<td>" . $row['rider_phone'] . "</td>";
echo "</tr>";
}
echo "</table>";
$prop_id= $_SESSION['number'];

//搜尋資料庫資料
$sql1 = "SELECT `type` FROM foodorder where id = '$prop_id'";
$result1 = $link->query($sql1);
$row1 = $result1->fetch_assoc();
if($row1['type'] == "還沒送出")
{
echo "<form action = 'tooder.php'  method='POST'><label>送達時間:
						<input type = 'datetime-local' name = 'bdaytime' id = 'bdaytime'>
						</label>
						<input class='button-54' type = 'submit' id = 'submit' value = '送出' action = 'tooder.php'>";
}
else{
    echo '<div><td><a href="fweb/docs/delete.php" >已經取餐</a></td></div>';
}

mysqli_close($link);
?>
