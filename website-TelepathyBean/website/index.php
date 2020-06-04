<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="footer, address, phone, icons"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

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


    <link rel="stylesheet" href="css/indexStyle.css">
    <link rel="stylesheet" href="css/footerStyle.css">
    <link rel="stylesheet" href="css/navigationStyle.css">
    <link rel="stylesheet" href="css/backToTopStyle.css">

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

    <title>Telepathy Bean</title>

</head>
<body>
<div class="navigation" id="nav">
    <a class="title" href="index.php"><span>TelepathyBean</span></a>
    <a href="#" onclick="alert('Coming Soon')">News</a>
    <a href="php/ProjectsPage.php">Projects</a>
    <a href="php/ContactUsPage.php">Contact Us</a>
    <a href="php/AboutUsPage.php">About Us</a>
    <?php if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]): ?>
       <a href="logout.php" class="login_reg">Logout</a>
    <?php else: ?>
        <a href="php/LoginPage.php" class="login_reg">Login</a>
    <?php endif; ?>

    <?php if( isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]): ?>
        <a href="php/MyProfilePage.php" class="login_reg">My Profile</a>
    <?php else: ?>
      <a href="php/RegistrationPage.php" class="login_reg">Registration</a>
    <?php endif; ?>

    <a href="javascript:void(0);" class="icon" onclick="navigationDropdown()">
        <i class="fa fa-bars"></i>
    </a>
</div>


<div class="main">
    <h1>Join us</h1>
    <a class="button" href="php/AboutUsPage.php">Click Me</a>
</div>
<a id="back_to_top"></a>
<script type="text/javascript" src="js/backToTop.js"></script>

<?php
/*require_once 'config.php';*/
?>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>-><span>TelepathyBean</span></h6>
                <p class="text-justify">A recently set-up startup, our goal is to bring fresh solutions to our clients. Right we are offering services for Web Sites and Applications as well as C#/Java Desktop Applications. <br> If you have expertise in Web, Mobile or Desktop Development and want a new challenge feel free to contact us.</p>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Support Us</h6>
                <ul class="footer-links">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick" />
                        <input type="hidden" name="hosted_button_id" value="RYQALGB6WN5KN" />
                        <input type="image" src="https://www.paypalobjects.com/en_US/NL/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                        <img alt="" border="0" src="https://www.paypal.com/en_NL/i/scr/pixel.gif" width="1" height="1" />
                    </form>

                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="php/NewsPage.php">News</a></li>
                    <li><a href="php/ProjectsPage.php">Projects</a></li>
                    <li><a href="php/ContactUsPage.php">Contact Us</a></li>
                    <li><a href="php/AboutUsPage.php">About Us</a></li>
                    <li><a href="php/LoginPage.php">Login</a></li>
                    <li><a href="php/RegistrationPage.php">Join Us</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2020 Telepathy Bean BG, Inc. Some Rights Reserved.</p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="js/hamburgerMenu.js"></script>
</body>
</html>
