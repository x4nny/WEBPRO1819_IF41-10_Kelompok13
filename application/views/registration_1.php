<html><head>
<title>monkkee - the safest place for your thoughts</title>
<link rel="stylesheet" media="all" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Life+Savers:400,700">
<link rel="stylesheet" media="all" href="<?= base_url();?>assets/application-f8c5915810c4a1a465b0b0a2b7b1f7b5d6062d3052272c8c219405f6946bbf24.css">
<script src="/assets/account/application-c89c14b286b5ee4eac9f974170afb61af89feaa5d00a85435704f995b985ab18.js"></script>
<style>.cke{visibility:hidden;}
body{height:100%;margin:0;padding:0;background-color:#333;background-image:url(<?= base_url();?>assets/dark_stripes_bg-a96b18c9fa271f9d8183fd4f4dd94cdcb6872b6fc2b029b79576ed1b6d3d2964.png)}
footer .edge{background-image:url(<?= base_url();?>assets/dark_stripes_with_edge_bg-d617085f363420feef4fd9362a432af99b4f33c52b5addebfa0e9560ee328def.png);height:6px}</style>
<script type="text/javascript">
  //<![CDATA[
    MONKKEE_APP_CONSTANTS = {
      'cryptoJsPath': '/assets/crypto-js/crypto-js-monkkee-2b258240f8ff596f73c9c99c48e8fa690d33e4e36105b89b3bf48ba8afc039f6.js',
      'encryptionWorkerPath': '/assets/workers/encryption_worker-807f41947cf9e46fd4d726adf7598e8acda58bf315410432c1ca5eca019bb45f.js'
    }
  //]]>
</script>
<meta name="csrf-param" content="authenticity_token">
<meta name="csrf-token" content="FDbLwtQ6cAn41VF2abf1qxM0TOhZH6B/satCwRIosKUIH/L+y+t2iMNO2x6FA2oVUANX9ziTIpS992ckZYbXFg==">
<meta content="width=device-width" name="viewport">
</head>
<body>
<header class="clearfix">
<div class="logo">
<a href="/">
<img alt="Logo" src="<?= base_url();?>assets/logo.png">
<span id="logo-font"><span id="monkkee-monk">monk</span><span id="monkkee-kee">kee</span>
</span>
</a>
</div>
<div class="pull-right user-menu">
<div class="language-switcher">
<a href="/account/registration?language=de">DE</a>&nbsp;|&nbsp;<span>EN</span>&nbsp;|&nbsp;<a href="/account/registration?language=fr">FR</a>&nbsp;|&nbsp;<a href="/account/registration?language=pt">PT</a>
</div>

</div>
<a class="donate-button" href="https://www.monkkee.com/en/support-us-with-a-donation/" target="_blank">Feed the monkkee</a>
</header>
<div id="main">
<div class="content-container">
<h1>Registration</h1>
<form class="form-horizontal" id="new_registration" action="<?= base_url('auth/registration/');?>" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="FDbLwtQ6cAn41VF2abf1qxM0TOhZH6B/satCwRIosKUIH/L+y+t2iMNO2x6FA2oVUANX9ziTIpS992ckZYbXFg=="><div class="explanation">
<p>Enter your data here to create a user account.</p>
<p></p><p><span class="important-warning">Please note:</span> if you forget your password, we cannot send it to you or reset it. All your contents will be irretrievably lost.</p><p>We recommend to enter a password hint which we can email to you to help you remember your password. Read our <a href="https://www.monkkee.com/en/faq/" target="_blank">FAQs</a> for more information about passwords and how monkkee handles them.</p><p></p>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="registration_email">Email</label>
<div class="col-sm-4">
<input class="form-control" autocomplete="off" type="text" name="email" id="registration_email" value="<?= set_value('email');?>">
<?= form_error('email','<small class="text-danger pl-3">','</small>');?>
<div class="help-block"></div>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="registration_password">Password</label>
<div class="col-sm-4">
<input class="form-control" autocomplete="off" type="password" name="password1" id="registration_password">
<?= form_error('password1','<small class="text-danger pl-3">','</small>');?>
<div id="registration_password-strength-indicator"></div>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="registration_password_confirmation">Password confirmation</label>
<div class="col-sm-4">
<input class="form-control" autocomplete="off" type="password" name="password2" id="registration_password_confirmation">
<div class="help-block"></div>
<div class="help-block"></div>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-2" for="registration_password_hint">Password hint</label>
<div class="col-sm-4">
<input class="form-control" autocomplete="off" type="text" name="passwordhint" id="registration_password_hint">
<div class="help-block"></div>
</div>
</div>
<div class="form-group">
<div class="col-sm-10 col-sm-offset-2">
<input name="registration[terms_of_use]" type="hidden" value="0"><input type="checkbox" value="1" name="registration[terms_of_use]" id="registration_terms_of_use">
<label class="terms-of-use" for="registration_terms_of_use">I have read and agree to the <a href="https://www.monkkee.com/en/privacy-policy/" target="_blank">Privacy Policy</a> and <a href="https://www.monkkee.com/en/terms-of-use/" target="_blank">Terms of Use</a>.</label>
<div class="help-block"></div>
</div>
</div>
<div class="form-group">
<div class="col-sm-10 col-sm-offset-2">
<input name="registration[lost_password_warning_registered]" type="hidden" value="0"><input type="checkbox" value="1" name="registration[lost_password_warning_registered]" id="registration_lost_password_warning_registered">
<label class="lost-password-warning" for="registration_lost_password_warning_registered">I am aware that there is no way for monkkee to recover or reset my login password if I forget it and that my data will be irretrievably lost in that case. It is my sole responsibility to remember the password for my account. Learn more about this in the <a href="https://www.monkkee.com/en/faq/" target="_blank">FAQ</a> section.</label>
<div class="help-block"></div>
</div>
</div>
<div class="form-group">
<div class="col-sm-4 col-sm-offset-2">
<button class="btn btn-primary" type="submit">
<div class="btn-text-content">OK</div>
</button>
</div>
</div>
</form>
<div id="loading-animation-wrapper" style="display: none;">
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
<script type="text/javascript">
  //<![CDATA[
    $(function() {
      $('#new_registration').enablePasswordEncryption();
      $('#registration_password').enablePasswordValidationAndStrengthIndication({
        too_short: 'Password is too short. Min. 8 characters',
        invalid: 'Permitted: letters, digits, ~!@#$%^&*_-+=|(){}[]:;\'<>,.?/',
        password_strength: 'Password strength',
        bad: 'Bad',
        weak: 'Weak',
        good: 'Good',
        strong: 'Strong'
       });
    });
  //]]>
</script>

</div>
</div>
<footer>
<div class="edge"></div>
<div class="footer-main"></div>
</footer>


</body></html>