<html custom-autoscroll="custom-autoscroll" custom-document-inactivity-timeout="autoLogoutTimeoutInMillies" custom-document-inactivity="autoLogout()" custom-register-modal-dialog-factory="custom-register-modal-dialog-factory" ng-app="monkkee" ng-controller="AppCtrl" class="ng-scope"><head custom-load-custom-css="custom-load-custom-css"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}</style>
<title custom-title="title">monkkee - the safest place for your thoughts</title>
<link rel="stylesheet" media="all" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Life+Savers:400,700|Playfair+Display:400italic">
<link rel="stylesheet" media="all" href="<?= base_url();?>assets/application-f8c5915810c4a1a465b0b0a2b7b1f7b5d6062d3052272c8c219405f6946bbf24.css">
<script type="text/javascript">
  //<![CDATA[
    MONKKEE_APP_CONSTANTS = {
      'cryptoJsPath': '/assets/crypto-js/crypto-js-monkkee-2b258240f8ff596f73c9c99c48e8fa690d33e4e36105b89b3bf48ba8afc039f6.js',
      'fileSaverPath': '/assets/FileSaver/FileSaver-586bf5398f43f9c9c989c5cb7de21e34053679ae016a2020c795937514e804da.js',
      'vkbeautifyPath': '/assets/vkbeautify/vkbeautify-14557489fd1da9f53d76614924da290b448634e00624a22784c5cef85cdcf1e7.js',
      'toMarkdownPath': '/assets/to-markdown/to-markdown-726403932b5feb3727936764d1335c750f2269c3f6d4627833d397e207fbde66.js',
      'jsPDFPath': '/assets/jsPDF/jspdf.debug-29eb65a701b13e47a76101dec3d7f5a30e2cd4c2bc644959624b637cee244d57.js',
      'slyPath': '/assets/sly/sly-e1e6a1da71ba60b290b5e819ca99b371c4f36ff3dfd804453c4a9e93834cb2cb.js',
      'encryptionWorkerPath': '/assets/workers/encryption_worker-807f41947cf9e46fd4d726adf7598e8acda58bf315410432c1ca5eca019bb45f.js',
      'proxyPath': '/proxy/',
    }
  //]]>
</script>
<script src="/assets/application-ebceaac41b00a1306e722f12198b4e49247602abfb8f10009615eb773621fcc4.js"></script>
<meta name="csrf-param" content="authenticity_token">
<meta name="csrf-token" content="2oP9/wUrReFaMs5OykMpw+XXWku9Wl4lZ+TIOAxmR8zGqsTDGvpDYGGpRCYm97Z9puBBVNzW3M5ruO3de8ggfw==">
<meta content="width=device-width" name="viewport">
<!--[if lt IE 9]>
<script type="text/javascript">
  //<![CDATA[
    document.createElement('header');
    document.createElement('nav');
    document.createElement('section');
    document.createElement('article');
    document.createElement('aside');
    document.createElement('footer');
    document.createElement('hgroup');
  //]]>
</script>
<![endif]-->
<style>.cke{visibility:hidden;}
body{height:100%;margin:0;padding:0;background-color:#333;background-image:url(<?= base_url();?>assets/dark_stripes_bg-a96b18c9fa271f9d8183fd4f4dd94cdcb6872b6fc2b029b79576ed1b6d3d2964.png)}
footer .edge{background-image:url(<?= base_url();?>assets/dark_stripes_with_edge_bg-d617085f363420feef4fd9362a432af99b4f33c52b5addebfa0e9560ee328def.png);height:6px}</style></head>
<body ng-class="bodyClass" class="desktop">
<header class="clearfix">
<div class="logo">
<a ng-href="#/" href="#/">
<img alt="Logo" src="<?= base_url();?>assets/logo-f0892a4a253a67a010b482174e0e4a9f3d95eccc89e4c73422f09d6168df6b6b.png">
<span id="logo-font"><span id="monkkee-monk">monk</span><span id="monkkee-kee">kee</span>
</span>
</a>
</div>
<div class="pull-right user-menu">
<div ng-show="userMenuVisible" class="">
<!-- ngInclude: userMenuTemplate --><div ng-include="userMenuTemplate" class="ng-scope"><div ng-hide="loggedIn" class="ng-scope">
<div class="language-switcher">
<a href="/?language=de">DE</a>&nbsp;|&nbsp;<span>EN</span>&nbsp;|&nbsp;<a href="/?language=fr">FR</a>&nbsp;|&nbsp;<a href="/?language=pt">PT</a>
</div>

</div>
<div ng-show="loggedIn" class="ng-scope ng-hide">
<a class="user-menu-btn" href="#/settings/locale">
<i class="icon-cog icon-light"></i>
Settings
</a>
<button class="user-menu-btn" ng-click="logout($event)" href="<?=base_url();?>Auth/logout">
<i class="icon-off icon-light"></i>
Logout
</button>
</div>
<a class="donate-button ng-scope" href="https://www.monkkee.com/en/support-us-with-a-donation/" ng-show="donationButtonVisible" target="_blank">Feed the monkkee</a>
</div>
</div>
</div>
</header>
<div id="main">
<!-- ngView: ng-view --><div ng-view="ng-view" class="ng-scope"><div class="toolbar-container-wrapper ng-scope">
<div class="toolbar-container clearfix">
<div class="toolbar"></div>
</div>
</div>
<div class="content-container clearfix ng-scope">
<div class="content-wrapper">
<div class="content">
<div class="login-wrapper">
<?= $this->session->flashdata('message');?>
<form action="<?php echo base_url('auth'); ?>" method="post">
<div class="ng-hide" ng-show="formStatus">

</div>
<div class="form-group ">
<label class="control-label col-sm-3" for="login">User</label>
<div class="col-sm-9">
<input autocapitalize="none" autocomplete="off" class="form-control ng-pristine ng-valid" custom-autofocus="custom-autofocus" id="login" name="email" ng-change="resetErrorStatus()" ng-model="model.login" placeholder="Email address or alias" type="text" value="<?= set_value('email');?>">
<?= form_error('email','<small class="text-danger pl-3">','</small>');?>
<div class="help-block ng-binding">

</div>
</div>
</div>
<div class="form-group ">
<label class="control-label col-sm-3" for="password">Password</label>
<div class="col-sm-9">
<input autocomplete="off" class="form-control ng-pristine ng-valid" id="password" name="password" ng-change="resetErrorStatus()" ng-model="model.password" placeholder="Password" type="password">
<div class="help-block ng-binding">

</div>
</div>
</div>
<div class="form-group">
<div class="col-sm-9 col-sm-offset-3">
<button class="btn btn-primary" type="submit">
<div class="btn-text-content">Login</div>
</button>
<div class="login-links">
<a href="/account/password_reminder">Send password reminder</a>
|
<a href="/account/registration">Register</a>
</div>
</div>
</div>
</form>
<div ng-show="loggedIn" class="ng-hide">
<p class="ng-binding">You are logged in as .</p>
<p>
<a href="#/entries">Go to your entries.</a>
</p>
</div>
</div>
</div>
</div>
<div class="sidebar">
<div class="horizontal-ruler sidebar-top-ruler"></div>
<section id="blog-articles">
<h1>
<i class="icon-news"></i>
News
</h1>
<div class="blog-article">
<div class="publish-date">16/02/2019</div>
<a href="https://www.monkkee.com/en/new-timestamp-function/" target="_blank">
New: Timestamp function
</a>
</div>
<div class="blog-article">
<div class="publish-date">19/07/2018</div>
<a href="https://www.monkkee.com/en/how-does-tagging-work-in-monkkee/" target="_blank">
How does “Tagging” work in monkkee?
</a>
</div>
<div class="blog-article">
<div class="publish-date">05/05/2017</div>
<a href="https://www.monkkee.com/en/why-you-must-never-forget-your-password/" target="_blank">
Why you must never forget your monkkee password!!
</a>
</div>
<div class="blog-article">
<div class="publish-date">23/04/2016</div>
<a href="https://www.monkkee.com/en/monkkee-wont-launch-app-near-future/" target="_blank">
Why monkkee won’t launch an app in the near future
</a>
</div>
</section>
</div>
</div>
</div>
</div>
<div ng-show="footerVisible" class="">
<!-- ngInclude: footerTemplate --><div ng-include="footerTemplate" class="ng-scope"><footer class="ng-scope">
<div class="edge"></div>
<div class="footer-main">
<ul class="footer-menu">
<li class="footer-menu-item">
<a class="footer-link" href="https://www.monkkee.com/en/" target="_blank">Homepage</a>
</li>
<li class="footer-menu-item">
<a class="footer-link" href="https://www.monkkee.com/en/support/" target="_blank">Support</a>
</li>
<li class="footer-menu-item">
<a class="footer-link" href="https://www.monkkee.com/en/faq/" target="_blank">FAQ</a>
</li>
<li class="footer-menu-item">
<a class="footer-link" href="https://www.monkkee.com/en/blog/" target="_blank">Blog</a>
</li>
<li class="footer-menu-item">
<a class="footer-link" href="https://www.monkkee.com/en/support-us-with-a-donation/" target="_blank">Feed the monkkee</a>
</li>
</ul>
</div>
</footer>
<div id="back-to-top-container" class="ng-scope">
<div>
<a class="pointer" custom-scroll-to-top="true" style="display: none;">
⇧
back to top
</a>
</div>
</div>
</div>
</div>
<div id="loading-animation-wrapper" ng-animate="{show: 'loading-animation-show'}" ng-show="animationVisible()" class="ng-hide">
<div class="underlay-screen"></div>
<div class="overlay-screen">
<div class="inner">
<div class="underlay-animation"></div>
<div class="overlay-animation">
<img class="animation" src="/assets/ajax-loader-ca14342448e7ef4f67a664c6642fb3411ebe67fc448b5e4adde46b296190ed54.png">
<br>
Loading<span id="dots"><span class="dot" id="dot1">.</span><span class="dot" id="dot2">.</span><span class="dot" id="dot3">.</span></span></div>
</div>
</div>
</div>

<script src="/javascripts/ckeditor-4.5.7-mnk4/ckeditor.js"></script>
<script src="/assets/footer_scripts-c365c106e29792cd3b5608d34958cc9d3eb025976648c370a5b23913b3f510b3.js"></script>


</body></html>