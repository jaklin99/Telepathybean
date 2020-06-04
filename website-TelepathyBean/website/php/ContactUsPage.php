<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
header("location: LoginPage.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="footer, address, phone, icons"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

   

    <link rel="stylesheet" href="../css/contactStyle.css">
    <link rel="stylesheet" href="../css/footerStyle.css">
    <link rel="stylesheet" href="../css/navigationStyle.css">
    <link rel="stylesheet" href="../css/backToTopStyle.css">


    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Volkhov&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

    <title>Contact Us</title>
</head>
<body>
<?php
require_once "Navigation.php";
?>
<?php if($_SESSION["type"] == "Standard"): ?>
    <div>
  <form action="/action_page.php">

    <label for="subject">Subject</label>
    <input type="text" name="subject" placeholder="Subject">
   <br>
  <textarea>Message us...</textarea>
  <button href="#" type="submit" value="login">SEND</button>
    
  </form>
</div>

<?php else: require_once "../contact.php";?>
<?php endif; ?>



<a id="back_to_top"></a>
<script type="text/javascript" src="../js/backToTop.js"></script>
<?php
require_once "Footer.php";
?>
</body>
</html>