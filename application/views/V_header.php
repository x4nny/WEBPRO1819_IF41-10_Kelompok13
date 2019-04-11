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
    <!--Fon Awesome-->
    <!-- <link rel="stylesheet" type="text/css" href="fontawesome\svg-with-js\css\fa-svg-with-js.css">
    <link rel="stylesheet" type="text/css" href="fontawesome\plus\plus-solid.svg">
    <script defer src="fontawesome/svg-with-js/js/fontawesome-all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css"> -->

    <!--Insert CSS----------------------------------------------------------------------->
    <link rel="stylesheet" type="text/css"  href="assets/css/style.css">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url();?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link type="text/css" rel="stylesheet" media="all" href="https://fonts.googleapis.com/css?family=Life+Savers:400,700|Playfair+Display:400italic">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&amp;subset=latin,latin-ext">

    <style>
    /*home content start*/
    .text-slogan{
      font-size: 35px;
      text-align: center;
      font-family: "Life Savers",cursive;
      color: #999999;
      font-weight: 700;
    }

    .content-slogan{
      height: 45px;
      padding: 30px 0 10px 0;
    }
    /*home content end*/
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
        <a class="nak">DE</a> |
        <a class="ak">EN</a> |
        <a class="nak">FR</a> |
        <a class="nak">PT</a>
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
      <a class="nav-item nav-link nav-monk" href="#">ABOUT</a>
      <a class="nav-item nav-link nav-monk" href="#">FEATURES</a>
      <a class="nav-item nav-link nav-monk" href="#">SECURITY</a>
      <a class="nav-item nav-link nav-monk" href="#">TEAM</a>
      <a class="nav-item nav-link nav-monk" href="#">BLOG</a>
    </div>
  </div>
</nav>
