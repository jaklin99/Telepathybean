<?php session_start();

?>
<!DOCTYPE html>
	<html lang="en" class="no-js">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="shortcut icon" href="../drawable/fav.png">

		<meta name="author" content="colorlib">

		<meta name="description" content="">

		<meta name="keywords" content="">
	
		<meta charset="UTF-8">
		
		<title>Personal</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
				<!-- link to the main file for the style of the page-->
			<link rel="stylesheet" href="../css/aboutUsStyle.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cookie" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Volkhov&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link
                rel="stylesheet"
                href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
                integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
                crossorigin="anonymous"
        />


        <link rel="stylesheet" href="../css/footerStyle.css">
        <link rel="stylesheet" href="../css/navigationStyle.css">
        <link rel="stylesheet" href="../css/backToTopStyle.css">

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script
                src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
                crossorigin="anonymous"
        ></script>
        <script
                src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
                integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
                crossorigin="anonymous"
        ></script>
        <script
                src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
                integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
                crossorigin="anonymous"
        ></script>

    </head>
		<body>	
        <?php
require_once "Navigation.php";
?>
 
			<section class="home-about-area pt-120">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 home-about-left">
							<img class="img-fluid" src="../drawable/jaki.jpg" alt="">
						</div>
						<div class="col-lg-5 col-md-6 home-about-right">
							<h6>Software developer</h6>
							<h1 class="text-uppercase">Jacqueline</h1>
							<p>
                            I am from Sofia, Bulgaria.
    Where do I live?
    I am currently living in Eindhoven, Netherlands.
    What is my occupation?
    I am a first-year-student in Fontys University and a future software engineer and developer.
    Which programming languages I have experience with?
    I have experience working with: C#, JavaScript, CSS, HTML, PHP.</p>
    <a href="#" class="primary-btn text-uppercase">discover now</a>
						</div>
					</div>
				</div>	
			</section>
		
			<section class="home-about-area pt-120">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 home-about-left">
							<img class="img-fluid" src="../drawable/kris.jpg" alt="">
						</div>
						<div class="col-lg-5 col-md-6 home-about-right">
							<h6>Software developer</h6>
							<h1 class="text-uppercase">Christian</h1>
							<p>
							Where am I from?
    I am from Sofia, Bulgaria.
    Where do I live?
    I am currently living in Eindhoven, Netherlands.
    What is my occupation?
    I am freshman in Fontys UAS and a future software engineer.
    Which programming languages I have experience with?
    I have some experience with different programming languages: C++, Java, Android Java, C#, PHP.</p>
    <a href="#" class="primary-btn text-uppercase">discover now</a>
						</div>
					</div>
				</div>	
			</section>
					
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>			
  			
		</body>
	</html>