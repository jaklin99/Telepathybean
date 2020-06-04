<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: LoginPage.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="footer, address, phone, icons"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    
    <link rel="stylesheet" href="../css/footerStyle.css">
    <link rel="stylesheet" href="../css/navigationStyle.css">
    <link rel="stylesheet" href="../css/backToTopStyle.css">
    <link rel="stylesheet" href="../css/newsStyle.css">


    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Volkhov&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
    
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<?php
require_once "Navigation.php";
?>
    <div class="container">
      <div class="row">
        <div class="[ col-xs-12 col-sm-offset-2 col-sm-6 ]">
          <ul class="event-list">
            <li>
              <time datetime="1881-05-19">
                <span class="day">Future project</span>
                <span class="month">Mayıs</span>
                <span class="year">1919</span>
                <span class="time">Tüm Gün</span>
              </time>
              
              <div class="info">
                <h2 class="title">19 Mayıs</h2>
                <p class="desc">Zafer Bayramı</p>
              </div>
              <div class="social">
                <ul>
                  <li class="edit" style="width:33%;">
                    <a href="#"><span class="fa fa-pencil-square-o"></span></a>
                  </li>
                  <li class="confirm" style="width:34%;">
                    <a href="#"><span class="fa fa-check"></span></a>
                  </li>
                  <li class="delete" style="width:33%;">
                    <a href="#"><span class="fa fa-trash-o"></span></a>
                  </li>
                </ul>
              </div>
            </li>

            <li>
              <time datetime="2014-07-20 0000">
                <span class="day">23</span>
                <span class="month">Nisan</span>
                <span class="year">1920</span>
                <span class="time">12:00</span>
              </time>
              <div class="info">
                <h2 class="title">Ulusal Egemenlik</h2>
                <p class="desc">PS Vita</p>
                <ul>
                  <li style="width:50%;">
                    <a href="http://okantiktas.com"
                      ><span class="fa fa-trademark"></span> Website</a
                    >
                  </li>
                  <li style="width:50%;">
                    <span class="fa fa-try"></span> 40 TL
                  </li>
                </ul>
              </div>
              <div class="social">
                <ul>
                  <li class="edit" style="width:33%;">
                    <a href="#"><span class="fa fa-pencil-square-o"></span></a>
                  </li>
                  <li class="confirm" style="width:34%;">
                    <a href="#"><span class="fa fa-check"></span></a>
                  </li>
                 
                </ul>
              </div>
            </li>

            <li>
              <time datetime="2014-07-31 1600">
                <span class="day">04</span>
                <span class="month">Mayıs</span>
                <span class="year">2017</span>
                <span class="time">13:57</span>
              </time>
              <img
                alt="Duyar Kimya Ziyaret"
                src="http://scontent.cdninstagram.com/t51.2885-19/s150x150/16229470_1105297716245462_9037530429749460992_n.jpg"
              />
              <div class="info">
                <h2 class="title">Duyar Kimya Ziyaret</h2>
                <p class="desc">Crm Programı Kurulum</p>
                <ul>
                  <li style="width:33%;">
                    100 <span class="fa fa-male"></span>
                  </li>
                  <li style="width:34%;">
                    80 <span class="fa fa-child"></span>
                  </li>
                </ul>
              </div>
              <div class="social">
                <ul>
                  <li class="edit" style="width:33%;">
                    <a href="#"><span class="fa fa-pencil-square-o"></span></a>
                  </li>
                  <li class="confirm" style="width:34%;">
                    <a href="#"><span class="fa fa-check"></span></a>
                  </li>
                  <li class="delete" style="width:33%;">
                    <a href="#"><span class="fa fa-trash-o"></span></a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  <?php
require_once "Footer.php";
?>

</body>
</html>
