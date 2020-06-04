<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="footer, address, phone, icons"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="stylesheet" href="../../../../Users/krish/Downloads/TelepathyBean-new/TelepathyBean-new/css/indexStyle.css">
    <link rel="stylesheet" href="../../../../Users/krish/Downloads/TelepathyBean-new/TelepathyBean-new/css/footerStyle.css">
    <link rel="stylesheet" href="../../../../Users/krish/Downloads/TelepathyBean-new/TelepathyBean-new/css/navigationStyle.css">
    <link rel="stylesheet" href="../../../../Users/krish/Downloads/TelepathyBean-new/TelepathyBean-new/css/backToTopStyle.css">


    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Volkhov&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

    <title>Telepathy Bean</title>
</head>
<body>
<div class="navigation">
    <nav>
        <ul>
            <li ><a><span>TelepathyBean</span></a></li>
            <li class="home"><a href="php/NewsPage.php">News</a></li>
            <li class="home"><a href="../../../../Users/krish/Downloads/TelepathyBean-new/TelepathyBean-new/php/ProjectsPage.php">Projects</a></li>
            <li class="home"><a href="../../../../Users/krish/Downloads/TelepathyBean-new/TelepathyBean-new/php/ContactUsPage.php">Contact Us</a></li>
            <li class="home"><a href="../../../../Users/krish/Downloads/TelepathyBean-new/TelepathyBean-new/php/AboutUsPage.php">About Us</a></li>
            <li class="login_reg" ><a href="../../../../Users/krish/Downloads/TelepathyBean-new/TelepathyBean-new/php/LoginPage.php">Login</a></li>
            <li class="login_reg"><a href="../../../../Users/krish/Downloads/TelepathyBean-new/TelepathyBean-new/php/RegistrationPage.php">Registration</a></li>
        </ul>
    </nav>
</div>
<div class="main">
    <h1>Join us</h1>
    <a class="button" href="../../../../Users/krish/Downloads/TelepathyBean-new/TelepathyBean-new/php/AboutUsPage.php">Click Me</a>
</div>
<a id="back_to_top"></a>
<script type="text/javascript" src="../../../../Users/krish/Downloads/TelepathyBean-new/TelepathyBean-new/js/backToTop.js"></script>
<!-- <?php
/*include("php/config.php");

if (isset($_POST['but_upload'])) {

    $name = $_FILES['file']['name'];
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    // Select file type
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    // Check extension
    if (in_array($imageFileType, $extensions_arr)) {

        // Insert record

        $query = "insert into images(Id, Name, Image) values(null, '" . $name . "', 'Hmm')";
        mysqli_query($con, $query);

        // Upload file
        move_uploaded_file($_FILES['file']['tmp_name'], $target_dir . $name);
    }
}*/
?>

        <!--<form method="post" action="" enctype='multipart/form-data'>
            <input type='file' name='file' />
            <input type='submit' value='Save name' name='but_upload'>
        </form>-->
<footer class="footer">
    <div class="footer-left">
        <!-- <img src="drawable/logo.png">-->
        <h3>-> <span>Telepathy Bean</span></h3>

        <p class="footer-links">
            <a href="#">Home</a>
            |
            <a href="#">News</a>
            |
            <a href="#">Projects</a>
            |
            <a href="#">Contact Us</a>
            |
            <a href="#">About Us</a>
            |
            <a href="#">Login</a>
            |
            <a href="#">Registration</a>
        </p>

        <p class="footer-company-name">© 2020 Telepathy Bean Inc.</p>
    </div>

    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span> 66 Azis Street</span>
                Eindhoven, Netherlands</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+31 674 898 468</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:427502@student.fontys.nl">427502@student.fontys.nl</a></p>
        </div>
    </div>
    <div class="footer-right">
        <p class="footer-company-about">
            <span>About the company</span>
            Startup. Fresh Solutions. Good Results.</p>
        <div class="footer-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
        </div>
    </div>
</footer>

</body>
</html>
