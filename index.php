<?php include ( "inc/connect.inc.php" ); ?>

<?php 
ob_start();
session_start();
if (!isset($_SESSION['user_login'])) {
	$user = "";
}
else {
	$user = $_SESSION['user_login'];
	$result = mysqli_query($connect,"SELECT * FROM user WHERE id='$user'");
		$get_user_email = mysqli_fetch_assoc($result);
			$uname_db = $get_user_email['firstName'];
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>WELCOME TO SPLURGEE ONLINE SHOP!</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="/js/homeslideshow.js"></script>
	</head>
	<body style="min-width: 980px;">
		<div class="homepageheader" style="position: relative;">
			<div class="signinButton loginButton">
				<div class="uiloginbutton signinButton loginButton" style="margin-right: 40px;">
					<?php 
						if ($user!="") {
							echo '<a style="text-decoration: none; color: #fff;" href="logout.php">LOG OUT</a>';
						}
						else {
							echo '<a style="color: #fff; text-decoration: none;" href="signin.php">SIGN IN</a>';
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
      
	             $targetPage = 'dbms_final/Updated/index.php';
              ?>
  <a href="<?php echo $targetPage; ?>">
  <?php echo '<a style="text-decoration: none; color: #fff;" href="Updated/index.php">GROCERY</a>'; ?>
  </a>
				</div>
				<div class="uiloginbutton signinButton loginButton" style="">
				<?php
      
	             $targetPage = 'dbms_final/admin/index.php';
              ?>
  <a href="<?php echo $targetPage; ?>">
  <?php echo '<a style="text-decoration: none; color: #fff;" href="admin/index.php">ADMIN PANEL</a>'; ?>
  </a>
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
			<div class="home-welcome-text" style="background-image: url(image/homebackgrndimg.png); height: 380px; ">
				<h1 style="margin: 0px;">Welcome To SPLURGEE!</h1>
				<h2>Largest Online Shopping.</h2>
			</div>
		</div>
		<div class="home-prodlist">
			<div>
				<h3 style="text-align: center;">PRODUCT CATEGORY</h3>
			</div>
			<div style="padding: 20px 30px; width: 85%; margin: 0 auto;">
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="women/saree.php">
							<img src="./image/product/saree/new-designer-fancy-look-attractive-saree-2-original.jpg" class="home-prodlist-imgi">
							</a>
							<h4>Sarees<h4>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="women/perfume.php">
							<img src="./image/product/perfume/perfume.jpg" class="home-prodlist-imgi"></a>
							<h4>Perfume<h4>
							
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="women/hijab.php">
							<img src="./image/product/hijab/kurthi.jpeg" class="home-prodlist-imgi"></a>
							<h4>Kurthi<h4>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="women/toilatry.php">
							<img src="./image/product/toiletry/toileteries.jpeg" class="home-prodlist-imgi"></a>
							<h4>Toiletries<h4>
						</div>
						
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="women/footwear.php">
							<img src="./image/product/footwear/footware.jpeg" class="home-prodlist-imgi"></a>
							<h4>Footwear<h4>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="women/tshirt.php">
							<img src="./image/product/tshirt/tshirts.jpeg" class="home-prodlist-imgi"></a>
							<h4>Tshirts<h4>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="women/watch.php">
							<img src="./image/product/watches.jpeg" class="home-prodlist-imgi"></a>
							<h4>Watches<h4>
						</div>
					</li>
				</ul>
				<ul style="float: left;">
					<li style="float: left; padding: 25px;">
						<div class="home-prodlist-img"><a href="women/ornament.php">
							<img src="./image/product/ornament/ornaments.jpeg" class="home-prodlist-imgi"></a>
							<h4>Ornaments<h4>
						</div>
					</li>
				</ul>
			</div>			
		</div>
	</body>
</html>