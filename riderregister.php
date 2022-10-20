<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>註冊頁面</title>
    <link rel="stylesheet" href="assets/css/button1.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/theme.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jua&family=Lato:ital,wght@1,300&family=Mochiy+Pop+One&family=Noto+Sans+HK&family=Raleway:wght@300&family=Russo+One&display=swap" rel="stylesheet">
</head>
<body style ="padding-top: 0px; background-color: rgb(238,238,238);">
<br><br><br>
    <section class="bg-gray200 pt-10 pb-5">
     <div class="row justify-content-center" style="position:relative;margin-top:-100px;">
    <div class="col-md-5">
       <article class="card">  
       <div class="card-body" style="text-align:center;">
        <form class="" action="rideradd.php" method="post">
     <label class="form-label">學校電郵:</label>
        <input type="mail" name="mail" value="" placeholder="sxxxxxxx@mail.yzu.edu.tw" pattern="s\d{7}@mail.yzu.edu.tw" required><br>
   <label class="form-label">密碼:</label>
        <input type="password" name="password" value="" placeholder="輸入密碼"  required><br>
  <label class="form-label">學號:</label>
        <input type="text" name="number" value="" placeholder="XXXXXXX"  required><br>
   <label class="form-label">姓名:</label>
        <input type="text" name="name" value="" placeholder="輸入姓名"  required><br>
   <label class="form-label">電話號碼:</label>
        <input type="text" name="phone" value="" placeholder="#### - ### - ###" pattern="09\d{2}-\d{3}-\d{3}" required><br>
   <label class="form-label">房號:</label>
        <input type="text" name="room" value="" placeholder="輸入房號"  required><br><br>
   <input class="button-54" type="submit" name="" value="註冊">
     </form>
       </div>
       </article>
      </div>
    </div>
    </section>
</body>
</html>