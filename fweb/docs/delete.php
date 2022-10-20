<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
     ini_set("display_errors","On");

     $id = $_SESSION['number'];

     $servername = "140.138.243.150";
     $username = "webbb";
     $severpassword = "webbb";
     $dbname = "ac";
     
     // Create connection
     $conn = new mysqli($servername, $username, $severpassword, $dbname);
     // Check connection
     if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
     }
     
     $sql = "SET NAMES UTF8";
     
     if ($conn->query($sql) === TRUE) {
     } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
     }
     
     $sql = "DELETE FROM `foodorder` WHERE `id` = $id";
     
     if ($conn->query($sql) === TRUE) {
       echo '<meta http-equiv=REFRESH CONTENT=1;url=../../menu.php>';
     } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
     }
     
     $conn->close();
 ?>