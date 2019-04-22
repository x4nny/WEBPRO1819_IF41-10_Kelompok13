<html>
  <head custom-load-custom-css="custom-load-custom-css">
    <style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}
    </style>
    <title custom-title="title">settings - language</title>

    <!--insert font dan css-->
    <link rel="stylesheet" media="all" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Life+Savers:400,700|Playfair+Display:400italic">
    <link rel="stylesheet" type="text/css"  href="<?= base_url();?>assets/setting.css">


  </head>

  <body class="desktop">

      <header class="clearfix" style="background: url(assets/img/bg-headfoot.png);">
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
                    <li class="active">
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

                  <li>
                    <a href="<?php echo base_url().'Monkkee/delete'; ?>">
                    <i class="icon-chevron-right"></i>
                    Delete account
                    </a>
                  </li>
                </ul>
              </div>

<!-- ubah disini -->
              <div class="container-fluid" id="settings-content">
                <h1>Language selection</h1>
                <form class="form-horizontal">
                  <div class="explanation">
                    Here you can configure the language of the user interface. Choose either a concrete language or the option "Default language" to use the language of your browser.
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="selectLocale">
                      Language
                    </label>
                    <div class="col-sm-4">
                      <select class="form-control" name="selectLocale">
                        <option value="de">Deutsch</option>
                        <option value="en">English</option>
                        <option value="fr">Français</option>
                        <option value="pt">Portuguese</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-3">
                      <button class="btn btn-primary" type="submit">
                        <div class="btn-text-content">OK</div>
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
