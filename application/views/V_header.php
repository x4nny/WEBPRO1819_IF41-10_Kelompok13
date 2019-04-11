<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Monkkee</title>


    <!--Offline bootstrap----------------------------------------------------------->
    <!-- <script type="text/javascript" src="bootstrap/js/jquery-3.3.1.min.js"></script> -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->


    <!--Insert CSS----------------------------------------------------------------------->
    <link rel="stylesheet" type="text/css"  href="assets/css/style.css">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url();?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" media="all" href="https://fonts.googleapis.com/css?family=Life+Savers:400,700|Playfair+Display:400italic">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&amp;subset=latin,latin-ext">

    <style>
    /*home content start*/
    .content{
      margin-bottom: 30px;
      margin-right: 150px;
      margin-left: 150px;
    }
    .content-line{
      height: 45px;
    }

    .title{
      font-family: "Open Sans",arial,sans-serif;
      font-size: 25.2px;
      font-weight: 700;
      color: #555555;
      text-align: center;
      padding-top: 35px;
      padding-bottom: 5px;
      margin-bottom: 15px;
      border-bottom: 1px solid #D5D5D5;
      border-bottom-width: 1px;

    }

    .cslogan{
      font-size: 35px;
      text-align: center;
      font-family: "Life Savers",cursive;
      color: #999999;
      font-weight: 700;
      height: 60px;
      padding: 30px 0 10px 0;
    }


    /*home content end*/

    /*btn register*/
    .btn-regist {
      font-size: 19px;
      font-weight: 700;
      font-family: "Open Sans",arial,sans-serif;
      /* width: 100px; */
      min-width: 0;
      border-radius: 13px;
      margin-left: 10px;
      margin-right: 10px;
      height: 40px;
      background: #FF8200;
      border: 2px solid #FFA200;
      padding-top: 3px;
      margin-bottom: 15px;
      /* color: white; */


        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%;
    }
    /*btn register end*/

    .cabout{
      font-size: 14.5px;
      color: #303030;
      height: 570px;
      margin-top: 0px;
      margin-bottom: 20px;
    }

    .c-about{
      border-right: 1px dotted #DDDDDD;
      height: 420px;
      width: 232px;
      margin-top: 25px;
    }
    .sub-title-about{
      font-size: 18px;
      font-weight: 500;
      letter-spacing: 1px;
      color: #555555;
    }

    .about-img{
      margin-left: 25px;;

    }

    /* features*/
    .cfeatures{
      background-color: #F5F5F5;
      height: 430px;
      width: 100%;
      font-size: 14px;
      padding-left: 165px;
      padding-right: 250px;


    }

    .c-features{
      width: 495px;
      height: 240px;

    }

    .features-img{
      width: 225px;
      height: 225px;
      margin-left: 155px;
      margin-top: 10px;

    }

    .a-title{
        padding-top: 20px;
        padding-bottom: 10px;
    }
    /* features end*/

    /*security*/
    .csecurity{
      height: 800px;
      width: 100%;
      font-size: 14px;
      padding-left: 165px;
      padding-right: 190px;


    }

    .security-img{

    }
    /*security end*/


    .cdonations{
      background-color: #F5F5F5;
      height: 610px;
      width: 100%;
      font-size: 14px;
      padding-left: 165px;
      padding-right: 190px;
    }

    .dona-img{
      weight:260px;
      height:300px;
    }
    .c-donations1{
      weight: 323px;
      height: 323px;
    }

    .c-donations2{
      padding-left: 40px;

    }

    .cteam{
      height: 460px;
    }

    .team-img{
      width: 220px;
      height: 180px;
      padding-left: 8px;
      padding-right: 8px;
    }

    .ctestimonials{
      background-color: #F5F5F5;
      height: 320px;
      width: 100%;
      font-size: 14px;
      padding-left: 165px;
      padding-right: 190px;
    }
    header{
      background: url(assets/img/bg-headfoot.png);
      height: 130px;
      width: 100%;
      font-family: "Life Savers",cursive;

    }
    footer{
      background: url(assets/img/bg-headfoot.png);
      height: 130px;
      width: 100%;
      font-family: "Life Savers",cursive;
      color: green;

    }

    .s{
      background: blue;
    }


    </style>

</head>
<body>
  <header>
    <div id="head" class="d-flex flex-row">
      <div class="item logo " data-toggle="collapse">
        <a href="#">
          <img class="logo-img" src="assets/img/logo.png" alt="logo"></img>
          <span class="logo-font">
            <span class="lf-monk">monk</span>
            <span class="lf-kee">kee</span>
          </span>
        </a>
      </div>
      <div class="item ml-auto lang" data-toggle="collapse">
        <a style=" color:#ff8200">DE</a> |
        <a class="ak">EN</a> |
        <a style=" color:#ff8200">FR</a> |
        <a style=" color:#ff8200">PT</a>
      </div>
    </div>
    <div id="head" class="d-flex flex-row ">
      <div class="item ml-auto feed" data-toggle="collapse">
          Feed the monkkee
      </div>
    </div>
  </header>

  <nav class="navbar navbar-expand-lg navbar-light bg-light nbr">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link nav-monk" href="#about">ABOUT</a>
      <a class="nav-item nav-link nav-monk" href="#">FEATURES</a>
      <a class="nav-item nav-link nav-monk" href="#">SECURITY</a>
      <a class="nav-item nav-link nav-monk" href="#">TEAM</a>
      <a class="nav-item nav-link nav-monk" href="#">BLOG</a>
    </div>
  </div>
</nav>
