<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if($_SESSION['rider_number'] != null)
{
        echo '<meta http-equiv=REFRESH CONTENT=1;url=order.php>';
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=rider.php>';
}
?>