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
    <link rel="stylesheet" type="text/css"  href="/assets/style.css">

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

    .name{
      color: #ff8200;
      padding-top: 10px;
      padding-bottom: 5px;
      border-bottom: 1px solid #D5D5D5;
      border-bottom-width: 1px;

    }


    .ctestimonials{
      background-color: #F5F5F5;
      height: 320px;
      width: 100%;
      font-size: 14px;
      padding-left: 165px;
      padding-right: 190px;
    }



    .medsos{
      height: 120px;
    }
    header{
      background: url(assets/img/bg-headfoot.png);
      height: 130px;
      width: 100%;
      font-family: "Life Savers",cursive;

    }
    footer{
      background: url(assets/img/bg-headfoot.png);
      height: 140px;
      width: 100%;
      font-family: "Open Sans",arial,sans-serif;
      font-size: 14px;
      color: white;
      padding-left: 145px;
      padding-right:250px;
      padding-top: 40px;

    }

    .s{
      background: blue;
    }
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

    .name{
      color: #ff8200;
      padding-top: 10px;
      padding-bottom: 5px;
      border-bottom: 1px solid #D5D5D5;
      border-bottom-width: 1px;

    }


    .ctestimonials{
      background-color: #F5F5F5;
      height: 320px;
      width: 100%;
      font-size: 14px;
      padding-left: 165px;
      padding-right: 190px;
    }



    .medsos{
      height: 120px;
    }
    header{
      background: url(assets/img/bg-headfoot.png);
      height: 130px;
      width: 100%;
      font-family: "Life Savers",cursive;

    }
    footer{
      background: url(assets/img/bg-headfoot.png);
      height: 140px;
      width: 100%;
      font-family: "Open Sans",arial,sans-serif;
      font-size: 14px;
      color: white;
      padding-left: 145px;
      padding-right:250px;
      padding-top: 40px;

    }

    .s{
      background: blue;
    }
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

    .name{
      color: #ff8200;
      padding-top: 10px;
      padding-bottom: 5px;
      border-bottom: 1px solid #D5D5D5;
      border-bottom-width: 1px;

    }


    .ctestimonials{
      background-color: #F5F5F5;
      height: 320px;
      width: 100%;
      font-size: 14px;
      padding-left: 165px;
      padding-right: 190px;
    }



    .medsos{
      height: 120px;
    }
    header{
      background: url(assets/img/bg-headfoot.png);
      height: 130px;
      width: 100%;
      font-family: "Life Savers",cursive;

    }
    footer{
      background: url(assets/img/bg-headfoot.png);
      height: 140px;
      width: 100%;
      font-family: "Open Sans",arial,sans-serif;
      font-size: 14px;
      color: white;
      padding-left: 145px;
      padding-right:250px;
      padding-top: 40px;

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


  <section class="content cslogan" id="slogan">
    <div class="content-line">
      <p>monkkee – the safest place for your thoughts</p>
    </div>
  </section>

  <section class="content   cabout" id="about">
    <div class="container">
      <div class="title">
        Keep a private and free online diary
      </div>
      <div class="row">
        <div class="col-sm text-left c-about">
          <img class="about-img  text-center" src="assets/img/pencil.png" alt="pencil"></img>
          <p class="sub-title-about text-center">Keep an online journal</p>
          You want to keep your thoughts in a place where no one can find them? Or capture great ideas so they do not get lost? The online diary monkkee offers you a safe place for your very personal topics.
        </div>
        <div class="col-sm text-left c-about">
          <img class="about-img  text-center" src="assets/img/private.png" alt="private"></img>
          <p class="sub-title-about text-center">Secret and private</p>
          The use of monkkee is private only. There is no feature to make entries publicly viewable. This ensures that your secret diary remains safe from prying eyes. Just like in a good old paper diary.
        </div>
        <div class="col-sm text-left c-about ">
          <img class="about-img  text-center" src="assets/img/lock.png" alt="lock"></img>
          <p class="sub-title-about text-center">Secure and encrypted</p>
          To guarantee you ultimate security, monkkee uses a comprehensive security concept. Client-side encryption, AES, SSL – find out more about security and why monkkee is unique.
        </div>
        <div class="col-sm text-left c-about">
          <img class="about-img  text-center" src="assets/img/cloud.png" alt="cloud"></img>
          <p class="sub-title-about text-center">Access via Internet</p>
          To use monkkee all you need is a computer with Internet access. Whether you are at home or on the move – if you have a sudden urge to write, you can access your data at any time and from anywhere.
        </div>
      </div>
    </div>
  </section>

  <section class="content s-register" id="register">
    <div class="container">
      <div class="row text-white  text-center justify-content-center">
        <div class="col-12 btn-regist">
          <a href="#">Sign up – it’s free!</a>
        </div>
        <div class="col-5 btn-regist">
          <a href="#">To my account</a>
        </div>

      </div>
    </div>
  </section>

  <section class="cfeatures" id="features">
    <div class="container">
      <div class="title">
        Features
      </div>
      <div class="row">
        <div class="text-left a-title">
        Keep a private journal securely on the Internet – to provide a convenient user experience your personal online diary monkkee offers you a variety of features… and it’s free!
        </div>
      </div>
      <div class="row">
        <div class="col-sm text-left c-features">
          <img class="features-img" src="assets/img/pocket_knife.png" alt="pocket_knife"></img>
      </div>
        <div class="col-sm text-left c-features">
          <ul>
            <li>Free use</li>
            <li>Convenient editor</li>
            <li>Insert images</li>
            <li>Automatic saving</li>
            <li>Create your own categories using tags</li>
            <li>Calendar</li>
            <li>Search within entries</li>
            <li>Print view</li>
            <li>Export feature</li>
            <li>Automatic logout in case of inactivity</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="csecurity" id="security">
    <div class="container">
      <div class="title">
        Security
      </div>
      <div class="row">
        <p class="a-title">
          The free online diary monkkee offers you the safest place for your thoughts. A comprehensive security concept protects your content against unauthorized access. And this is how it works:
        </p>
        <p>
          As soon as content created by you is saved, it is directly encrypted on your computer, i.e. even before its leaves your device and is transferred to the server via the Internet. With this end-to-end encryption approach monkkee set themselves apart from other competitors who do not encrypt user data at all or only provide server-side encryption.
        </p>
        <img class="security-img" src="assets/img/encryption_process.png" alt="encryption_process"></img>
        <p class="a-title">
          The decryption key for monkkee is your password, which you must enter each time you log on. The encryption method used is AES-256. Initially developed for military purposes, this highly secure encoding technology is nowadays used by governments, institutions and banks to encrypt top-secret information.
        </p>
        <p>
          The encrypted data is transferred directly between your device and the server. For this purpose, monkkee uses an additional SSL-based encryption technology. That way, no one can eavesdrop on the transfer.
        </p>
        <p>
          Only you can decrypt your entries now, since you are the only one to know the password. This means that even the system administrators of monkkee cannot read your data. It also means that it is not possible to hand data over to government authorities, as is currently being discussed in the media. As a side effect, it is not possible to restore your password in case you forget it. So always remember your password – there is no spare key!
        </p>
        <p>
          If you have any further questions regarding security, check out our  <a style=" color:#ff8200">FAQs</a> or send a message to monkkee using the<a style=" color:#ff8200"> contact form.</a>
        </p>
      </div>
    </div>
  </section>

  <section class="cdonations" id="donations">
    <div class="container">
      <div class="title">
        Our business model = your donations
      </div>
      <div class="row">
        <div class="text-left a-title">
          <p>
            Maybe you’ve already noticed that we don’t take advertising or membership fees here. Neither will we ever touch or monetize your personal data, as the protection of your privacy is our top priority.
          </p>
          <p>
          In fact, monkkee is funded exclusively through donations from its users and through the ongoing support of the monkkee founders. monkkee was born out of passion for the cause and the desire to create great software. It is the work of a few passionate individuals, not one of large internet companies. With its client-side encryption, we’re convinced that monkkee is a unique product and we want to make the software accessible to any person wishing to use it.
        </p>
        </div>
      </div>
      <div class="row">
        <div class="col-4 c-donations1">
          <img class="dona-img" src="assets/img/dona.png" alt="dona"></img>
        </div>
        <div class="col-8 text-left c-donations2">
          <p>
            Our long-term goal is for monkkee to be fully community-driven and pay for itself. To make this work, we depend on regular donations. The more donations we receive, the more secure monkkee’s future. Donations are used to run and maintain the software, develop new features and, last but not least, pay the bills for our server hosting costs, which have increased considerably since our start in 2013 due to the growing user base and increased storage needs.
          </p>
          <p>
            We want to shape monkkee’s future together with you. As a crowd, we are strong and can compete with commercial providers. If you have never made a donation before, please consider helping us with a small contribution. We are grateful for every single donation we receive, no matter how small or big!
          </p>
          <p>
            <a style=" color:#ff8200">Click here to visit the donation site.</a>
          </p>
        </div>
      </div>
    </div>
</section>

<section class="cteam" id="team">
  <div class="container">
    <div class="title">
      Team
    </div>
    <div class="row justify-content-center  a-title">
      <div class="col-2.5">
        <img class="team-img" src="assets/img/ciwi.jpg" alt="ciwi"></img>
        <p class="text-center name">Cahya</p>
        <p class="text-center ">
          <a style=" color:#ff8200">Web Development</a> <br>
          <a>cahya@monkkee.com</a>
        </p>
      </div>
      <div class="col-2.5">
        <img class="team-img" src="assets/img/cowo.jpg" alt="cowo"></img>
        <p class="text-center name">Daffa</p>
        <p class="text-center ">
          <a style=" color:#ff8200">Web Development</a> <br>
          <a>daffa@monkkee.com</a>
        </p>
      </div>
      <div class="col-2.5">
        <img class="team-img" src="assets/img/ciwi.jpg" alt="ciwi"></img>
        <p class="text-center name">Maya</p>
        <p class="text-center ">
          <a style=" color:#ff8200">Web Development</a> <br>
          <a>maya@monkkee.com</a>
        </p>
      </div>
    </div>
  </div>
</section>

<section class="ctestimonials" id="testimonials">
  <div class="container">
    <div class="title">
      Testimonials
    </div>
    <!-- <div class="row justify-content-center  a-title">
      <div class="col-2.5">
        <img class="team-img" src="assets/img/ciwi.jpg" alt="ciwi"></img>
        <p>Cahya</p>
        <p>Web Development</p>
        <a>cahya@monkkee</a>
      </div>
      <div class="col-2.5">
        <img class="team-img" src="assets/img/cowo.jpg" alt="cowo"></img>
      </div>
      <div class="col-2.5">
        <img class="team-img" src="assets/img/ciwi.jpg" alt="ciwi"></img>
      </div>
    </div> -->
  </div>
</section>
