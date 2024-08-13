<?php include ( "inc/connect.inc.php" ); ?>
<?php 
ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
	$user = "";
}
else {
	$user = $_SESSION['user_login'];
	$result = mysqli_query($con, "SELECT * FROM user WHERE id='$user'");
	$get_user_email = mysqli_fetch_assoc($result);
	$uname_db = $get_user_email != null ? $get_user_email['firstName'] : null;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Welcome to splurgee online grocery</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="/js/homeslideshow.js"></script>
	</head>
	<body style="min-width: 980px;">
		<div class="homepageheader" style="position: relative;background-color:white;">
			<div class="signinButton loginButton">
				<div class="uiloginbutton signinButton loginButton" style="margin-right: 40px;">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="logout.php">LOG OUT</a>';
						}
						else {
							echo '<a style="color: #fff; text-decoration: none;" href="signin.php">SIGN UP</a>';
						}
					 ?>
					
				</div>
				<div class="uiloginbutton signinButton loginButton" style="">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="profile.php?uid='.$user.'">Hi '.$uname_db.'</a>';
						}
						else {
							echo '<a style="text-decoration: none; color: #fff;" href="login.php">LOG IN</a>';
						}
					 ?>
				</div>
				<div class="uiloginbutton signinButton loginButton" style="">
				<?php
      
	  $targetPage = 'dbms_final/index.php';
   ?>
<a href="<?php echo $targetPage; ?>">
<?php echo '<a style="text-decoration: none; color: #fff;" href="index.php">HOME</a>'; ?>
				</div>
				<div class="uiloginbutton signinButton loginButton" style="">
				<?php
      
	  $targetPage = 'dbms_final/updated/admin/index.php';
   ?>
<a href="<?php echo $targetPage; ?>">
<?php echo '<a style="text-decoration: none; color: #fff;" href="admin/index.php">ADMIN PANEL</a>'; ?>
				</div>
			</div>
			<div style="float: left; margin: 5px 0px 0px 23px;">
				<a href="index.php">
					<img style=" height: 75px; width: 130px;" src="image/logo.png">
				</a>
			</div>
			<div class="">
				<div id="srcheader">
					<form id="newsearch" method="get" action="search.php">
					        <input type="text" class="srctextinput" name="keywords" size="21" maxlength="120"  placeholder="Search Here..."><input type="submit" value="search" class="srcbutton" >
					</form>
				<div class="srcclear"></div>
				</div>
			</div>
		</div>
		<div class="home-welcome">
			<div class="home-welcome-text" style="background-image: url(image/cauli.jpg); height: 380px; opacity:0.7; ">
				<div style="padding-top: 180px;">
					<div style=" background-color: #dadbe6;">
						<h1 style="margin: 0px;">Welcome To splurgee online grocery</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="home-prodlist">
			<div>
				<h3 style="text-align: center;">Products Category</h3>
			</div>
			<div style="padding: 20px 30px; width: 85%; margin: 0 auto;">
			
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Snacks.php">
							<img src="./image/product/snack/snacks.jpeg" class="home-prodlist-imgi">
							</a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Sweets.php">
							<img src="./image/product/sweet/chocolates.jpeg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Hygene.php">
							<img src="./image/product/hygiene/hygine.jpeg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Shampoo.php">
							<img src="./image/product/shampoo/shampoo.jpeg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Soap&Detergent.php">
							<img src="./image/product/soap/soaps.jpeg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Drinks.php">
							<img src="./image/product/drink/drinks.jpeg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="OurProducts/Seasonings.php">
							<img src="./image/product/seasoning/seasoning.jpeg" class="home-prodlist-imgi"></a>
						</div>
					</li>
				</ul>
			</div>			
		</div>
	</body>
</html>