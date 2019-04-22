<html>
  <head custom-load-custom-css="custom-load-custom-css">
    <style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}
    </style>
    <title custom-title="title">settings - password</title>

    <!--insert font dan css-->
    <link rel="stylesheet" media="all" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Life+Savers:400,700|Playfair+Display:400italic">
    <link rel="stylesheet" type="text/css"  href="<?= base_url();?>assets/setting.css">
    <style id="custom-css">body{height:100%;margin:0;padding:0;background-color:#333;background-image:url(<?= base_url();?>assets/dark_stripes_bg-a96b18c9fa271f9d8183fd4f4dd94cdcb6872b6fc2b029b79576ed1b6d3d2964.png)}
footer .edge{background-image:url(<?= base_url();?>assets/dark_stripes_with_edge_bg-d617085f363420feef4fd9362a432af99b4f33c52b5addebfa0e9560ee328def.png);height:6px}
.auto-width{width:auto}[class^="icon-"],[class*=" icon-"]{width:29px;height:29px;line-height:30px;vertical-align:middle;background-image:url(<?=base_url();?>assets/icons_dark-52be30391833c02e12c7f511dd9398668deb7507b189fb728b796d2677075f47.png);background-position:30px 30px;display:inline-block;background-repeat:no-repeat;margin-top:1px}
.dropdown-submenu:focus>a>[class*=" icon-"]{background-image:url(<?=base_url();?>assets/icons_dark-52be30391833c02e12c7f511dd9398668deb7507b189fb728b796d2677075f47.png)}
.icon-cog{background-position:-115px -27px}
.icon-off{background-position:-175px 3px}.icon-plus{background-position:-25px -27px}.icon-trash{background-position:5px -27px}.icon-print{background-position:-55px -27px}
.icon-tag{background-position:-25px 3px}.icon-search{background-position:-55px 3px}.icon-home{background-position:-85px -27px}.icon-cog{background-position:-115px -27px}.icon-calendar{background-position:5px 3px}.icon-news{background-position:-205px 3px}
</style>

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
          <a class="user-menu-btn" href="<?=base_url();?>Monkkee/language">
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

                <li class="active">
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
                <h1>Change password</h1>
                <form class="form-horizontal" >
                  <div class="explanation">
                    <p>Here you can change your password. If you have opened monkkee in other browser windows, please close them first. When changing your password, all your entries will be re-encrypted.</p>
                    <p></p><p><span class="important-warning">Please note:</span> if you forget your password, we cannot send it to you or reset it. All your contents will be irretrievably lost.</p><p>We recommend to enter a password hint which we can email to you to help you remember your password. Read our <a href="#" target="_blank">FAQs</a> for more information about passwords and how monkkee handles them.</p><p></p>
                  </div>
                  <div class="form-group ">
                    <label class="control-label col-sm-3" for="old-password">Old password</label>
                    <div class="col-sm-4">
                      <input autocomplete="off" class="form-control" id="old-password"  type="password">
                      <div class="help-block">

                      </div>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label class="control-label col-sm-3" for="password">Password</label>
                    <div class="col-sm-4">
                      <input autocomplete="off" class="form-control" id="password" type="password">
                      <div class="help-block">

                      </div>
                      <div class="">

                      </div>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label class="control-label col-sm-3" for="password-confirmation">Password confirmation</label>
                    <div class="col-sm-4">
                      <input autocomplete="off" class="form-control" id="password-confirmation" type="password">
                      <div class="help-block">

                      </div>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label class="control-label col-sm-3" for="password-hint">Password hint</label>
                    <div class="col-sm-4">
                      <input autocomplete="off" class="form-control ng-pristine ng-valid" id="password-hint" type="text">
                      <div class="help-block">

                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-3">
                      <button class="btn btn-primary" custom-scroll-to="settings-content" type="submit" disabled="disabled">
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
