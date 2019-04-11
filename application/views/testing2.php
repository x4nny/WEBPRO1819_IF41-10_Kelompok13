<html custom-autoscroll="custom-autoscroll" custom-document-inactivity-timeout="autoLogoutTimeoutInMillies" custom-document-inactivity="autoLogout()" custom-register-modal-dialog-factory="custom-register-modal-dialog-factory" ng-app="monkkee" ng-controller="AppCtrl" class="ng-scope"><head custom-load-custom-css="custom-load-custom-css"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}</style>
<title custom-title="title">monkkee - the safest place for your thoughts</title>
<link rel="stylesheet" media="all" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Life+Savers:400,700|Playfair+Display:400italic">
<link rel="stylesheet" media="all" href="<?= base_url();?>  assets/application-f8c5915810c4a1a465b0b0a2b7b1f7b5d6062d3052272c8c219405f6946bbf24.css">
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
<meta name="csrf-token" content="PC4COOEIacnvoIw/1rTPLat7VNq8+xNgW+nzm/zTjFAgBzsE/tlvSNQ7Blc6AFCT6ExPxd13kYtXtdZ+i33r4w==">
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
<style>.cke{visibility:hidden;}</style><style id="custom-css">
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
<body ng-class="bodyClass" class="desktop">
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
<div class="toolbar">
<span class="checkbox-wrapper">
<input ng-change="selectOrUnselectAll()" ng-model="model.allChecked" title="Select all" type="checkbox" class="ng-pristine ng-valid">
</span>
<div class="btn-toolbar">
<a class="btn btn-primary" href="javascript:void(0)" id="create-entry" ng-click="createEntry()" title="Create an entry">
<i class="icon-plus"></i>
</a>
<a class="btn btn-primary disabled" href="javascript:void(0)" id="delete-entries" ng-class="disabledClassIfEmpty(selectedIds)" ng-click="deleteEntries()" title="Delete selected entries">
<i class="icon-trash"></i>
</a>
<a class="btn btn-primary disabled" href="javascript:void(0)" ng-class="disabledClassIfEmpty(selectedIds)" ng-click="printEntries()" title="Print selected entries">
<i class="icon-print"></i>
</a>
<a class="btn btn-primary scroll-down-btn" custom-scroll-to="search" href="javascript:void(0)">
<i class="icon-search"></i>
</a>
<a class="btn btn-primary scroll-down-btn" custom-scroll-to="tags" href="javascript:void(0)">
<i class="icon-tag"></i>
</a>
<a class="btn btn-primary scroll-down-btn" custom-scroll-to="calendar" href="javascript:void(0)">
<i class="icon-calendar"></i>
</a>
</div>
</div>
<div class="search-explanation ng-binding ng-hide" ng-show="searchExplanation">

<span ng-class="searchParameterClass" class="ng-binding">

</span>
-
<a class="pointer" href="javascript:void(0)" id="reset-search" ng-click="resetSearch()">reset</a>
</div>
</div>
</div>
<div class="content-container clearfix ng-scope">
<div class="content-wrapper">
<div class="content">
<div class="entries">
<!-- ngRepeat: monthData in months --><div class="div ng-scope" ng-repeat="monthData in months">
<div class="month-separator" ng-hide="hideFirstSeparator &amp;&amp; $first">
<div class="month ng-binding">
March
</div>
<div class="horizontal-ruler"></div>
<div class="year ng-binding">
2019
</div>
</div>
<!-- ngRepeat: entry in monthData.entries --><div class="entry-container clearfix ng-scope" ng-repeat="entry in monthData.entries">
<div class="checkbox-datetime-wrapper">
<div class="checkbox-wrapper">
<input ng-change="updateSelectionState()" ng-model="model.checked[entry.id]" type="checkbox" class="ng-pristine ng-valid">
</div>
<div class="calendar-date" ng-attr-title="{{entry.fullDate}}" title="Fri, 29 Mar. 2019 02:37 PM">
<div class="day ng-binding">
29
</div>
<div class="month ng-binding">
Mar
</div>
<div class="time ng-binding">
02:37 PM
</div>
</div>
<div class="full-date ng-binding">
Fri, 29 Mar. 2019 02:37 PM
</div>
</div>
<a class="entry" href="#/entries/1064524">
<div class="">
<div class="title ng-binding ng-hide" ng-bind-html="entry.title" ng-show="entry.title"></div>
<div class="body ng-binding" ng-bind-html="entry.body">asdasadsasdasdadsasdasd</div>
</div>
<span class="tags ng-hide" ng-show="entry.tags.length > 0">
Tags:
<!-- ngRepeat: tag in entry.tags -->
</span>
</a>
</div><!-- end ngRepeat: entry in monthData.entries --><div class="entry-container clearfix ng-scope" ng-repeat="entry in monthData.entries">
<div class="checkbox-datetime-wrapper">
<div class="checkbox-wrapper">
<input ng-change="updateSelectionState()" ng-model="model.checked[entry.id]" type="checkbox" class="ng-pristine ng-valid">
</div>
<div class="calendar-date" ng-attr-title="{{entry.fullDate}}" title="Sun, 24 Mar. 2019 03:32 PM">
<div class="day ng-binding">
24
</div>
<div class="month ng-binding">
Mar
</div>
<div class="time ng-binding">
03:32 PM
</div>
</div>
<div class="full-date ng-binding">
Sun, 24 Mar. 2019 03:32 PM
</div>
</div>
<a class="entry" href="#/entries/1059035">
<div class="">
<div class="title ng-binding ng-hide" ng-bind-html="entry.title" ng-show="entry.title"></div>
<div class="body ng-binding" ng-bind-html="entry.body">lmao</div>
</div>
<span class="tags ng-hide" ng-show="entry.tags.length > 0">
Tags:
<!-- ngRepeat: tag in entry.tags -->
</span>
</a>
</div><!-- end ngRepeat: entry in monthData.entries --><div class="entry-container clearfix ng-scope" ng-repeat="entry in monthData.entries">
<div class="checkbox-datetime-wrapper">
<div class="checkbox-wrapper">
<input ng-change="updateSelectionState()" ng-model="model.checked[entry.id]" type="checkbox" class="ng-pristine ng-valid">
</div>
<div class="calendar-date" ng-attr-title="{{entry.fullDate}}" title="Sun, 24 Mar. 2019 03:32 PM">
<div class="day ng-binding">
24
</div>
<div class="month ng-binding">
Mar
</div>
<div class="time ng-binding">
03:32 PM
</div>
</div>
<div class="full-date ng-binding">
Sun, 24 Mar. 2019 03:32 PM
</div>
</div>
<a class="entry" href="#/entries/1059034">
<div class="">
<div class="title ng-binding" ng-bind-html="entry.title" ng-show="entry.title">Welcome to monkkee!</div>
<div class="body ng-binding" ng-bind-html="entry.body">We wish you a great time with monkkee! If you need help, use the link to the support page or the FAQs at the bottom of the page.    Regards  Your monkkee team</div>
</div>
<span class="tags ng-hide" ng-show="entry.tags.length > 0">
Tags:
<!-- ngRepeat: tag in entry.tags -->
</span>
</a>
</div><!-- end ngRepeat: entry in monthData.entries -->
</div><!-- end ngRepeat: monthData in months -->
<div class="load-more ng-hide" ng-show="loadMoreVisible">
<button class="btn btn-primary" ng-click="loadMore()">
<div class="btn-text-content">Load more</div>
</button>
<button class="btn btn-primary" ng-click="loadAll()">
<div class="btn-text-content">Load all</div>
</button>
</div>
<div class="none centered ng-hide" ng-show="noneMsgVisible">No entries found</div>
</div>
</div>
</div>
<div class="sidebar">
<div class="horizontal-ruler sidebar-top-ruler"></div>
<section id="search">
<h1>
<i class="icon-search"></i>
Search
</h1>
<div class="search ng-scope" ng-controller="SearchCtrl">
<!-- ngInclude:  --><div ng-include="" src="&quot;/api/templates/search&quot;" class="ng-scope"><form ng-submit="submit()" class="ng-scope ng-pristine ng-valid">
<div class="input-group">
<input autocomplete="off" class="form-control ng-pristine ng-valid" id="appendedInputButton" ng-model="model.searchInput" placeholder="Search" type="search">
<button class="btn btn-primary input-group-addon" title="Search" type="submit">
<i class="icon-search"></i>
</button>
</div>
</form>
</div>
</div>
</section>
<div class="horizontal-ruler"></div>
<section id="tags">
<h1>
<i class="icon-tag"></i>
Tags
</h1>
<p class="clearfix">
<!-- ngRepeat: tag in tags -->
</p>
<p>
<a href="#/tags">Manage tags</a>
</p>
</section>
<div class="horizontal-ruler"></div>
<section id="calendar">
<h1>
<i class="icon-calendar"></i>
Calendar
</h1>
<input class="input ng-pristine ng-valid" custom-date-picker-change="dateChanged(event)" custom-date-picker-enabled-days="enabledDays" custom-date-picker="dd/mm/yyyy,true,true,Close" id="datepicker" ng-model="model.date" placeholder="Select date" type="text">
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


<div class="datepicker dropdown-menu"><div class="datepicker-days datepicker-mode" style="display: block;"><table class=" table-condensed"><thead><tr><th class="prev">‹</th><th colspan="5" class="switch">April 2019</th><th class="next">›</th></tr><tr><th class="dow">Mon</th><th class="dow">Tue</th><th class="dow">Wed</th><th class="dow">Thu</th><th class="dow">Fri</th><th class="dow">Sat</th><th class="dow">Sun</th></tr></thead><tbody><tr><td class="day old disabled">25</td><td class="day old disabled">26</td><td class="day old disabled">27</td><td class="day old disabled">28</td><td class="day old enabled">29</td><td class="day old disabled">30</td><td class="day old disabled">31</td></tr><tr><td class="day disabled">1</td><td class="day disabled">2</td><td class="day disabled">3</td><td class="day disabled">4</td><td class="day disabled">5</td><td class="day disabled">6</td><td class="day disabled">7</td></tr><tr><td class="day disabled">8</td><td class="day active disabled">9</td><td class="day disabled">10</td><td class="day disabled">11</td><td class="day disabled">12</td><td class="day disabled">13</td><td class="day disabled">14</td></tr><tr><td class="day disabled">15</td><td class="day disabled">16</td><td class="day disabled">17</td><td class="day disabled">18</td><td class="day disabled">19</td><td class="day disabled">20</td><td class="day disabled">21</td></tr><tr><td class="day disabled">22</td><td class="day disabled">23</td><td class="day disabled">24</td><td class="day disabled">25</td><td class="day disabled">26</td><td class="day disabled">27</td><td class="day disabled">28</td></tr><tr><td class="day disabled">29</td><td class="day disabled">30</td><td class="day new disabled">1</td><td class="day new disabled">2</td><td class="day new disabled">3</td><td class="day new disabled">4</td><td class="day new disabled">5</td></tr></tbody></table></div><div class="datepicker-months datepicker-mode" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev">‹</th><th colspan="5" class="switch">2019</th><th class="next">›</th></tr></thead><tbody><tr><td colspan="7"><span class="month">Jan.</span><span class="month">Feb.</span><span class="month">Mar.</span><span class="month active">Apr.</span><span class="month">May</span><span class="month">Jun.</span><span class="month">Jul.</span><span class="month">Aug.</span><span class="month">Sep.</span><span class="month">Oct.</span><span class="month">Nov.</span><span class="month">Dec.</span></td></tr></tbody></table></div><div class="datepicker-years datepicker-mode" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev">‹</th><th colspan="5" class="switch">2010-2019</th><th class="next">›</th></tr></thead><tbody><tr><td colspan="7"><span class="year old">2009</span><span class="year">2010</span><span class="year">2011</span><span class="year">2012</span><span class="year">2013</span><span class="year">2014</span><span class="year">2015</span><span class="year">2016</span><span class="year">2017</span><span class="year">2018</span><span class="year active">2019</span><span class="year old">2020</span></td></tr></tbody></table></div><div class="datepicker-close"><a href="#">Close</a></div></div></body></html>