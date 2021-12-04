<?php session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myblog";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
 {
    die("Connection failed: " . $conn->connect_error);
 } 
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>RwemaAPI-Resto</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="#">
								<img src="assets/img/logo.jpg" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="#">Home</a>
								</li>
								<li><a href="#">News</a>
								</li>
								<li><a href="#">Contact</a></li>
								
								</li>
								<li>
									<div class="header-icons">
										
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="search.php"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							
							<h3>Search For:</h3>
							<form action="search.php" Method="POST">
							<input type="text" name="search" placeholder= "Type rating No, location ...">
							<input type="submit" value="Search"> <i class="fas fa-search"></i>
							</form>
							

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">supervision & rating </p>
							<h1>culinary health supervision and rating agency in Rwanda</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">The</span> Dishes for this restaurant equals
						
						<?php

if(isset($_GET['restaurant_id']))
{

$id=$_GET['restaurant_id'];
$quer="SELECT * FROM dishes WHERE restaurant_id='$id' ";
 $result = $conn->query($quer);
 $num = $result->num_rows;
 echo ''.$num.'';
}

?>	



</h3>


					</div>
				</div>
			</div>

			<table  width="800" border="2" align="center">
<tr> <th>Restaurant_Id</th><th>Dish_Name</th> <th>cooking_time</th> <th>ingredients</th> <th>dish_price</th><th>pic_one</th><th>pic_two</th><th>pic_three</th> </tr>

<?php
  
if(isset($_GET['restaurant_id']))
{
$id=$_GET['restaurant_id'];

$query1= "SELECT restaurant_id, dishname, cooking_time, ingredients, dish_price,pic_one,pic_two,pic_three FROM dishes WHERE restaurant_id='$id'";
$result = $conn->query($query1);


if ($result->num_rows > 0){
while($row = $result->fetch_array()) {

echo "<tr><td>".$row['restaurant_id']."</td>";
echo "<td>".$row['dishname']."</td>";
echo "<td>".$row['cooking_time']."</td>";
echo "<td>".$row['ingredients']."</td>";
echo "<td>".$row['dish_price']."</td>";
$pic_one ='<img src="data:image/jpeg;base64,'.base64_encode($row['pic_one']).'" ';
echo "<td class=image>".$pic_one."</td>";
$pic_two='<img src="data:image/jpeg;base64,'.base64_encode($row['pic_two']).'" ';
echo "<td class=image>".$pic_two."</td>";
$pic_three='<img src="data:image/jpeg;base64,'.base64_encode($row['pic_three']).'" ';
echo "<td class=image>".$pic_three."</td>";








}

}
else{
    echo "No dish found Fund for this restaurant";
}
}

?>
</tr>
</div>
</table>


		</div>
	</div>

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">About us</h2>
						<p>
						This website was created by by Bagirishya Rwema to demostrate how APis are used
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get in Touch</h2>
						<ul>
							<li>24/8, Muhanga, Rwanda</li>
							<li>rwema@gmai.com</li>
							<li>+078 045 415</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Write 2 Rwema</h2>
						<p>via mailing.</p>
						<form action="#">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2021 - <a href="#">Rwema Bagirishya</a>,  All Rights Reserved.</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>
