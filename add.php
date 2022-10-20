<?php
     ini_set("display_errors","On");
     error_reporting(E_ALL || ~E_NOTICE);

     $mail = $_POST['mail'];
     $password1 = $_POST['password'];
     $name = $_POST['name'];
     $phone = $_POST['phone'];
     $number = $_POST['number'];
     $room = $_POST['room'];

     $servername = "140.138.243.150";
     $username = "webbb";
     $severpassword = "webbb";
     $dbname = "ac";
     include("mysql_connect.inc.php");
     $sql1 = "SELECT `mail`,`number`,`phone` FROM student_data WHERE number = '$number'";
$result1 = $link->query($sql1);
$row1 = $result1->fetch_assoc();

if($row1['number'] != $number ){
     
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
     
     $sql = "INSERT INTO student_data (mail, number, password,phone,name,room)
     VALUES ('$mail', '$number', '$password1','$phone','$name','$room')";
     
     if ($conn->query($sql) === TRUE) {
      echo '註冊成功!';
      echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
     } else {
       echo "Error: " . $sql . "<br>" . $conn->error;
     }
     $conn->close();
}
else{
  echo '該學號已經有註冊過了';
  echo '<meta http-equiv=REFRESH CONTENT=2;url=riderregister.php>';
}
$link->close();
 ?>