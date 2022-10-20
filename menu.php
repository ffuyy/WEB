<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>YZU Foodie</title>
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/theme.css">
</head>
<body style="padding:25px;">
    <main role="main">
    <section class="mt-0 mb-0">
		<div>
		<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<?php echo '<a href="logout.php">登出</a>'; ?>
	<?php echo '<a href="myoder.php">我的餐點</a>'; ?>
</div>
<?php
if($_SESSION['number'] != null)
{
	echo "<h2 style = 'text-align: right'>" . $_SESSION['number'] . "</h2>";
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>

    <div class="container mb-0">
    	<h1 class="font-weight-bold title" style="font-size:50px" text-align= "center">我要訂外賣</h1>
    	<br>
    </div>
    <div class="container-fluid">
    	<div class="row">
    		<div class="card-columns">
    			<div class="card card-pin">
    				<img class="card-img"  src="fweb/docs/image/仙桃.jpg" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">仙桃總鋪</h2>
    					<div class="more">
    						<a href="fweb/docs/posy.php">
    						<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> 點餐 </a>
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img"  src="fweb/docs/image/吃飯撈麵.jpg" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">吃飯撈麵</h2>
    					<div class="more">
    						<a href="fweb/docs/eat.php">
    						<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> 點餐 </a>
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img"  src="fweb/docs/image/喜樂.jpg" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">喜樂</h2>
    					<div class="more">
    						<a href="fweb/docs/xizu.php">
    						<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> 點餐 </a>
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img"  src="fweb/docs/image/陽光.jpg" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">陽光</h2>
    					<div class="more">
    						<a href="fweb/docs/sun.php">
    						<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>點餐 </a>
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img" src="fweb/docs/image/美而美.jpg" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">美而美</h2>
    					<div class="more">
    						<a href="fweb/docs/meier.php">
    						<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> 點餐 </a>
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img" style="height:315px;" src="fweb/docs/image/八方雲集.jpg" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">八方雲集</h2>
    					<div class="more">
    						<a href="fweb/docs/eight.php">
    						<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> 點餐 </a>
    					</div>
    				</div>
    			</div>
    			
    			<div class="card card-pin">
    				<img class="card-img" src="fweb/docs/image/興仁.jpg" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">興仁食堂</h2>
    					<div class="more">
    						<a href="fweb/docs/xin.php">
    						<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> 點餐 </a>
    					</div>
    				</div>
    			</div>
    			
    		
    			<div class="card card-pin">
    				<img class="card-img" src="fweb/docs/image/炸鍋.jpg" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">炸鍋</h2>
    					<div class="more">
    						<a href="fweb/docs/fried.php">
    						<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> 點餐 </a>
    					</div>
    				</div>
    			</div>
    			
    			<div class="card card-pin">
    				<img class="card-img" src="fweb/docs/image/原來如思.jpg" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">原來如思</h2>
    					<div class="more">
    						<a href="fweb/docs/ori.php">
    						<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> 點餐 </a>
    					</div>
    				</div>
    			</div>
    			<div class="card card-pin">
    				<img class="card-img" src="fweb/docs/image/炸雞大師.jpg" alt="Card image">
    				<div class="overlay">
    					<h2 class="card-title title">炸雞大師</h2>
    					<div class="more">
    						<a href="fweb/docs/chi.php">
    						<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> 點餐 </a>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    </section>
    </main>
</body>
</html>