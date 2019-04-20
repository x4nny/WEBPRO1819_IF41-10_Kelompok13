
<html>
  <head custom-load-custom-css="custom-load-custom-css">
    <style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}
    </style>
    <title custom-title="title">settings - delete</title>

    <!--insert font dan css-->
    <link rel="stylesheet" media="all" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Life+Savers:400,700|Playfair+Display:400italic">
    <link rel="stylesheet" type="text/css"  href="<?= base_url();?>assets/setting.css">


  </head>

  <body class="desktop">

      <header class="clearfix">
        <div class="logo">
          <a href="#">
          <img alt="Logo" src="<?= base_url();?>assets/logo.png">
          <span id="logo-font">
            <span id="monkkee-monk">monk</span>
            <span id="monkkee-kee">kee</span>
          </span>
          </a>
        </div>
        <div class="pull-right user-menu">
          <a class="user-menu-btn" href="#">
            <i class="icon-cog icon-light"></i>
              Settings
          </a>
          <button class="user-menu-btn">
            <i class="icon-off icon-light"></i>
              Logout
          </button>
          <a class="donate-button" href="">Feed the monkkee</a>
        </div>
      </header>

      <div id="main">
          <div class="toolbar-container-wrapper">
            <div class="toolbar-container clearfix">
                <div class="toolbar">
                  <div class="btn-toolbar">
                    <a class="btn btn-primary" href="#" title="Back to overview">
                      <i class="icon-home"></i>
                    </a>
                  </div>
                </div>
            </div>
          </div>

          <div class="content-container clearfix">
            <div id="settings-menu">
                <ul class="nav nav-list sidenav">
                  <li>
                    <a href="<?php echo base_url().'Monkkee/language'; ?>">
                    <i class="icon-chevron-right"></i>
                    Language
                    </a>
                  </li>

                <li >
                  <a href="<?php echo base_url().'Monkkee/email'; ?>">
                  <i class="icon-chevron-right"></i>
                  Email
                  </a>
                </li>

                <li>
                  <a href="<?php echo base_url().'Monkkee/password'; ?>">
                  <i class="icon-chevron-right"></i>
                  Password
                  </a>
                </li>

                <li>
                  <a href="<?php echo base_url().'Monkkee/alias'; ?>">
                  <i class="icon-chevron-right"></i>
                  Login alias
                  </a>
                </li>

                <li>
                  <a href="<?php echo base_url().'Monkkee/timeout'; ?>">
                  <i class="icon-chevron-right"></i>
                  Inactivity timeout
                  </a>
                </li>

                <li>
                  <a href="<?php echo base_url().'Monkkee/editor'; ?>">
                  <i class="icon-chevron-right"></i>
                  Editor
                  </a>
                </li>

                <li>
                  <a href="<?php echo base_url().'Monkkee/export'; ?>">
                  <i class="icon-chevron-right"></i>
                  Export
                  </a>
                </li>

                <li>
                  <a href="<?php echo base_url().'Monkkee/donation'; ?>">
                  <i class="icon-chevron-right"></i>
                  Donations
                  </a>
                </li>

                <li  class="active">
                  <a href="<?php echo base_url().'Monkkee/delete'; ?>">
                  <i class="icon-chevron-right"></i>
                  Delete account
                  </a>
                </li>
              </ul>
            </div>

<!-- ubah disini -->
            <div class="container-fluid" id="settings-content">
              <h1>Delete user account</h1>
                <form class="form-horizontal">
                <div class="explanation">
                  Do you really want to delete your monkkee user account? That is really a pity! Your account will not be instantly deleted when clicking on the button below. You will first receive an email with a confirmation link. Only when you have clicked on the link will your user account be deleted.
                </div>
                <div class="form-group">
                  <div class="col-sm-4 col-sm-offset-3">
                    <button class="btn btn-danger" type="submit">
                      Delete user account
                    </button>
                  </div>
                </div>
              </form>

            </div>
<!-- ubah sampai disini -->
          </div>
      </div>


        <!-- ngInclude: footerTemplate -->

          <footer>
            <div class="edge"></div>
            <div class="footer-main">
              <ul class="footer-menu">
                <li class="footer-menu-item">
                  <a class="footer-link" href="#">Homepage</a>
                </li>
                <li class="footer-menu-item">
                  <a class="footer-link" href="#">Support</a>
                </li>
                <li class="footer-menu-item">
                  <a class="footer-link" href="#">FAQ</a>
                </li>
                <li class="footer-menu-item">
                  <a class="footer-link" href="#">Blog</a>
                </li>
                <li class="footer-menu-item">
                  <a class="footer-link" href="#">Feed the monkkee</a>
                </li>
              </ul>
            </div>
          </footer>

          <div id="back-to-top-container">
            <div>
              <a class="pointer" custom-scroll-to-top="true" style="display: none;">
                ⇧
                back to top
              </a>
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
              Loading<span id="dots"><span class="dot" id="dot1">.</span><span class="dot" id="dot2">.</span><span class="dot" id="dot3">.</span></span>
            </div>
          </div>
        </div>
      </div>

      <script src="/javascripts/ckeditor-4.5.7-mnk4/ckeditor.js"></script>
      <script src="/assets/footer_scripts-c365c106e29792cd3b5608d34958cc9d3eb025976648c370a5b23913b3f510b3.js"></script>


  </body>
</html>







<html custom-autoscroll="custom-autoscroll" custom-document-inactivity-timeout="autoLogoutTimeoutInMillies" custom-document-inactivity="autoLogout()" custom-register-modal-dialog-factory="custom-register-modal-dialog-factory" ng-app="monkkee" ng-controller="AppCtrl" class="ng-scope"><head custom-load-custom-css="custom-load-custom-css"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}</style>
<title custom-title="title">monkkee - the safest place for your thoughts</title>
<link rel="stylesheet" media="all" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Life+Savers:400,700|Playfair+Display:400italic">
<link rel="stylesheet" media="all" href="/assets/application-f8c5915810c4a1a465b0b0a2b7b1f7b5d6062d3052272c8c219405f6946bbf24.css">
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
<meta name="csrf-token" content="OayE8iCRHjEgq+IvRRWw1pt262pdbtmMhOYaDS6ZK1HI97Xzid1ymZ83Q9/PkVMiA137MjCaPQCkWsIbvLiaYA==">
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
<style>.cke{visibility:hidden;}</style><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="/assets/sly/sly-e1e6a1da71ba60b290b5e819ca99b371c4f36ff3dfd804453c4a9e93834cb2cb.js" src="/assets/sly/sly-e1e6a1da71ba60b290b5e819ca99b371c4f36ff3dfd804453c4a9e93834cb2cb.js"></script><style id="custom-css">
#cke_editable a.cke_button__strike { display: none; }
#cke_editable a.cke_button__justifyleft { display: none; }
#cke_editable a.cke_button__justifycenter { display: none; }
#cke_editable a.cke_button__justifyright { display: none; }
#cke_editable a.cke_button__justifyblock { display: none; }
#cke_editable span.cke_toolbar:nth-of-type(1) span.cke_toolbar_separator:nth-of-type(4) { display: none; }
#cke_editable a.cke_button__blockquote { display: none; }
#cke_editable span.cke_toolbar:nth-of-type(1) span.cke_toolbar_separator:nth-of-type(5) { display: none; }
#cke_editable a.cke_button__bidiltr { display: none; }
#cke_editable a.cke_button__bidirtl { display: none; }
#cke_editable span.cke_toolbar:nth-of-type(1) span.cke_toolbar_separator:nth-of-type(6) { display: none; }
#cke_editable a.cke_button__horizontalrule { display: none; }
#cke_editable a.cke_button__specialchar { display: none; }
#cke_editable a.cke_button__smiley { display: none; }
#cke_editable a.cke_button__timestamp { display: none; }
#cke_editable span.cke_combo__font { display: none; }
#cke_editable span.cke_combo__fontsize { display: none; }
#cke_editable span.cke_toolbar:nth-of-type(4) { display: none; }
</style></head>
<body ng-class="bodyClass" class="desktop" style="">
<header class="clearfix">
<div class="logo">
<a ng-href="#/entries" href="#/entries">
<img alt="Logo" src="/assets/logo-f0892a4a253a67a010b482174e0e4a9f3d95eccc89e4c73422f09d6168df6b6b.png">
<span id="logo-font"><span id="monkkee-monk">monk</span><span id="monkkee-kee">kee</span>
</span>
</a>
</div>
<div class="pull-right user-menu">
<div ng-show="userMenuVisible" class="">
<!-- ngInclude: userMenuTemplate --><div ng-include="userMenuTemplate" class="ng-scope"><div ng-hide="loggedIn" class="ng-scope ng-hide">
<div class="language-switcher">
<a href="/?language=de">DE</a>&nbsp;|&nbsp;<span>EN</span>&nbsp;|&nbsp;<a href="/?language=fr">FR</a>&nbsp;|&nbsp;<a href="/?language=pt">PT</a>
</div>

</div>
<div ng-show="loggedIn" class="ng-scope">
<a class="user-menu-btn" href="#/settings/locale">
<i class="icon-cog icon-light"></i>
Settings
</a>
<button class="user-menu-btn" ng-click="logout($event)">
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
<div class="toolbar-wrapper">
<div class="toolbar">
<div class="btn-toolbar">
<a class="btn btn-primary" href="#/entries" title="Back to overview">
<i class="icon-home icon-white"></i>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="content-container clearfix ng-scope">
<div ng-controller="SettingsCtrl" class="ng-scope">
<div id="settings-page-select">
<span>Go to:</span>
<select name="selectSettingsPage" ng-change="goToSettingsPage()" ng-model="model.currentPage" class="ng-pristine ng-valid">
<option value="locale">Language</option>
<option value="email">Email</option>
<option value="password">Password</option>
<option value="login">Login alias</option>
<option value="logout">Inactivity timeout</option>
<option value="editor">Editor</option>
<option value="export">Export</option>
<option value="donation_payment">Donations</option>
<option value="delete_account">Delete account</option>
</select>
</div>
<div id="settings-menu">
<ul class="nav nav-list sidenav">
<li ng-class="cssClass('locale')">
<a href="#/settings/locale">
<i class="icon-chevron-right"></i>
Language
</a>
</li>
<li ng-class="cssClass('email')">
<a href="#/settings/email">
<i class="icon-chevron-right"></i>
Email
</a>
</li>
<li ng-class="cssClass('password')">
<a href="#/settings/password">
<i class="icon-chevron-right"></i>
Password
</a>
</li>
<li ng-class="cssClass('login')">
<a href="#/settings/login">
<i class="icon-chevron-right"></i>
Login alias
</a>
</li>
<li ng-class="cssClass('logout')">
<a href="#/settings/logout">
<i class="icon-chevron-right"></i>
Inactivity timeout
</a>
</li>
<li ng-class="cssClass('editor')">
<a href="#/settings/editor">
<i class="icon-chevron-right"></i>
Editor
</a>
</li>
<li ng-class="cssClass('export')">
<a href="#/settings/export">
<i class="icon-chevron-right"></i>
Export
</a>
</li>
<li ng-class="cssClass('donation_payment')">
<a href="#/settings/donation_payment">
<i class="icon-chevron-right"></i>
Donations
</a>
</li>
<li ng-class="cssClass('delete_account')" class="active">
<a href="#/settings/delete_account">
<i class="icon-chevron-right"></i>
Delete account
</a>
</li>
</ul>
</div>
</div>
<div class="container-fluid" id="settings-content">
<h1>Delete user account</h1>
<form class="form-horizontal ng-pristine ng-valid" ng-submit="submit()">
<div class="ng-hide" ng-show="formStatus">

</div>
<div class="explanation">Do you really want to delete your monkkee user account? That is really a pity! Your account will not be instantly deleted when clicking on the button below. You will first receive an email with a confirmation link. Only when you have clicked on the link will your user account be deleted.</div>
<div class="form-group">
<div class="col-sm-4 col-sm-offset-3">
<button class="btn btn-danger" type="submit">
Delete user account
</button>
</div>
</div>
</form>

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
