<?php

session_start();

@include 'config.php';


$mail = $_SESSION['email'];

$query = "SELECT * from newreg where email = '$mail'"; 
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_array($result);
           
$maths_score = $row[7];
if($maths_score < 40){
	$maths_grade = 'F';
	$maths_remark = 'Fail';
}elseif($maths_score < 50){
	$maths_grade = 'D';
	$maths_remark = 'Pass';
}elseif($maths_score < 60){
	$maths_grade = 'C';
	$maths_remark = 'Credit';
}elseif($maths_score < 70){
	$maths_grade = 'B';
	$maths_remark = 'Good';
}elseif($maths_score >= 70){
	$maths_grade = 'A';
	$maths_remark = 'Excellent';
}

$eng_score = $row[8];
if($eng_score < 40){
	$eng_grade = 'F';
	$eng_remark = 'Fail';
}elseif($eng_score < 50){
	$eng_grade = 'D';
	$eng_remark = 'Pass';
}elseif($eng_score < 60){
	$eng_grade = 'C';
	$eng_remark = 'Credit';
}elseif($eng_score < 70){
	$eng_grade = 'B';
	$eng_remark = 'Good';
}elseif($eng_score >= 70){
	$eng_grade = 'A';
	$eng_remark = 'Excellent';
}

$crs_score = $row[9];
if($crs_score < 40){
	$crs_grade = 'F';
	$crs_remark = 'Fail';
}elseif($crs_score < 50){
	$crs_grade = 'D';
	$crs_remark = 'Pass';
}elseif($crs_score < 60){
	$crs_grade = 'C';
	$crs_remark = 'Credit';
}elseif($crs_score < 70){
	$crs_grade = 'B';
	$crs_remark = 'Good';
}elseif($crs_score >= 70){
	$crs_grade = 'A';
	$crs_remark = 'Excellent';
}


?>


<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Book Store</title>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="format-detection" content="telephone=no">
	    <meta name="apple-mobile-web-app-capable" content="yes">
	    <meta name="author" content="">
	    <meta name="keywords" content="">
	    <meta name="description" content="">

	    <link rel="stylesheet" type="text/css" href="css/normalize.css">
	    <link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
	    <link rel="stylesheet" type="text/css" href="css/vendor.css">
	    <link rel="stylesheet" type="text/css" href="style.css">

		<!-- script
		================================================== -->
		<script src="js/modernizr.js"></script>

	</head>

<body>

<div id="header-wrap">
	
	<div class="top-content">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="social-links">
						<ul>
							<li>
								<a href="#"><i class="icon icon-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="icon icon-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="icon icon-youtube-play"></i></a>
							</li>
							<li>
								<a href="#"><i class="icon icon-behance-square"></i></a>
							</li>
						</ul>
					</div><!--social-links-->
				</div>
				<div class="col-md-6">
					<div class="right-element">
						<a href="#" class="user-account for-buy"><i class="icon icon-user"></i><span>Account</span></a>
						<a href="#" class="cart for-buy"><i class="icon icon-clipboard"></i><span>Cart:(0 $)</span></a>

						<div class="action-menu">

							<div class="search-bar">
								<a href="#" class="search-button search-toggle" data-selector="#header-wrap">
									<i class="icon icon-search"></i>
								</a>
								<form role="search" method="get" class="search-box">
									<input class="search-field text search-input" placeholder="Search" type="search">
								</form>
							</div>
						</div>

					</div><!--top-right-->
				</div>
				
			</div>
		</div>
	</div><!--top-content-->

	<header id="header">
		<div class="container">
			<div class="row">

				<div class="col-md-2">
					<div class="main-logo">
						<a href="index.html"><img src="images/main-logo.png" alt="logo"></a>
					</div>

				</div>

				<div class="col-md-10">
					
					<nav id="navbar">
						<div class="main-menu stellarnav">
							<ul class="menu-list">
								<li class="menu-item active"><a href="#home" data-effect="Home">Home</a></li>
								<li class="menu-item"><a href="#about" class="nav-link" data-effect="About">About</a></li>
								<li class="menu-item has-sub">
									<a href="#pages" class="nav-link" data-effect="Pages">Pages</a>

									<ul>
								        <li class="active"><a href="index.php">Home</a></li>
								        <li><a href="about.html">About</a></li>
								        <li><a href="styles.html">Styles</a></li>
								        <li><a href="blog.html">Blog</a></li>
								        <li><a href="single-post.html">Post Single</a></li>
								        <li><a href="shop.html">Our Store</a></li>
								        <li><a href="single-product.html">Product Single</a></li>
								        <li><a href="contact.html">Contact</a></li>
								        <li><a href="thank-you.html">Thank You</a></li>
								     </ul>

								</li>
								<li class="menu-item"><a href="#popular-books" class="nav-link" data-effect="Shop">Shop</a></li>
								<li class="menu-item"><a href="#latest-blog" class="nav-link" data-effect="Articles">Articles</a></li>
								<li class="menu-item"><a href="#contact" class="nav-link" data-effect="Contact">Contact</a></li>
							</ul>

							<div class="hamburger">
				                <span class="bar"></span>
				                <span class="bar"></span>
				                <span class="bar"></span>
				            </div>

						</div>
					</nav>

				</div>

			</div>
		</div>
	</header>
		
</div><!--header-wrap-->

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-title">Result</h1>
				<div class="breadcrumbs">
					<span class="item"><a href="index.html">Home /</a></span>
					<span class="item">Styles</span>
				</div>
			</div>
		</div>
	</div>
</section>



<section>
	<div class="container">


		<h3>Table</h3>
		<table class="u-full-width">
			<thead>
			<tr>
				<th>Subject</th>
				<th>Score</th>
				<th>Grade</th>
				<th>Remark</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Mathematics</td>
				<td><?php echo $maths_score; ?></td>
				<td><?php echo $maths_grade; ?></td>
				<td><?php echo $maths_remark; ?></td>
			</tr>

			<tr>
				<td>English</td>
				<td><?php echo $eng_score; ?></td>
				<td><?php echo $eng_grade; ?></td>
				<td><?php echo $eng_remark; ?></td>
			</tr>
			<tr>
				<td>CRS</td>
				<td><?php echo $crs_score; ?></td>
				<td><?php echo $crs_grade; ?></td>
				<td><?php echo $crs_remark; ?></td>
			</tr>
			</tbody>
		</table>
			</div>
			
		</div>

		<div class="row">

						<div class="col-md-6">
							<p>© 2022 All rights reserved. Free HTML Template by <a href="https://www.templatesjungle.com/" target="_blank">TemplatesJungle</a></p>
						</div>

				 -->

					</div>
				</div><!--grid-->

			</div><!--footer-bottom-content-->
		</div>
	</div>
</div>

<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>

</body>
</html>	