<html>
  <head custom-load-custom-css="custom-load-custom-css">
    <style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}
    </style>
    <title custom-title="title">settings - editor</title>

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

                <li class="active">
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
                <h1>Editor</h1>
                <form class="form-horizontal" >
                  <h2>Start entry</h2>
                  <div class="explanation">
                    Here you can decide whether you would like to start your entries with a heading or with normal text.
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="startEntryWith">
                      Start new entry with...
                    </label>
                    <div class="col-sm-4 radio-list">
                      <div class="radio">
                        <label>
                          <input id="normal-text" name="start-entry-with" type="radio" value="normal-text">
                            normal text
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input id="heading" name="start-entry-with" type="radio" value="heading">
                            heading
                        </label>
                      </div>
                    </div>
                  </div>
                  <h2>Maximize automatically</h2>
                  <div class="explanation">
                    Selecting this option makes the editor full screen as soon as you start editing an entry.
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="maximizeWhenEditing">
                      Maximize automatically
                    </label>
                    <div class="col-sm-4">
                      <select class="form-control" name="maximizeWhenEditing">
                        <option value="never">Never</option>
                        <option value="only_mobile">Only on mobile devices</option>
                        <option value="always">On all devices</option>
                      </select>
                    </div>
                  </div>
                  <h2>Editor buttons</h2>
                  <div class="explanation">
                    Here you can select the buttons to be displayed in your editor toolbar by default.
                  </div>
                  <div id="dummy-editor-wrapper">
                    <div custom-contenteditable="custom-contenteditable" id="editable" contenteditable="true" class="contenteditable cke_editable cke_editable_inline cke_contents_ltr" tabindex="0" spellcheck="true" role="textbox" aria-label="Rich Text Editor, editable" title="Rich Text Editor, editable"><p><br></p></div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_toolgroup">
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__bold_icon"></span>
                            </a>
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__italic_icon"></span>
                            </a>
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__underline_icon"></span>
                            </a>
                          </span>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                      <label>
                        <input name="basicstyles_computer" type="checkbox" value="basicstylesComputer">
                        <span>
                          &nbsp;Computers
                        </span>
                      </label>
                      &nbsp; &nbsp;
                      <label>
                        <input name="basicstyles_mobile" type="checkbox" value="basicstylesMobile">
                        &nbsp;Mobile devices
                      </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_toolgroup">
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__strike_icon"></span>
                            </a>
                          </span>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                      <label>
                        <input name="strike_computer" type="checkbox"
                        value="strikeComputer">
                        <span>
                          &nbsp;Computers
                        </span>
                        </label>
                          &nbsp; &nbsp;
                        <label>
                          <input name="strike_mobile" type="checkbox" value="strikeMobile">
                          &nbsp;Mobile devices
                      </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_toolgroup">
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__numberedlist_icon"></span>
                            </a>
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__bulletedlist_icon"></span>
                            </a>
                          </span>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                      <label>
                          <input name="list_computer" type="checkbox" value="listComputer">
                          <span>
                            &nbsp;Computers
                          </span>
                        </label>
                          &nbsp; &nbsp;
                        <label>
                          <input name="list_mobile" type="checkbox" value="listMobile">
                          &nbsp;Mobile devices
                      </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_toolgroup">
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__outdent_icon"></span>
                            </a>
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__indent_icon"></span>
                            </a>
                          </span>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                    <label>
                      <input name="indent_computer" type="checkbox" value="indentComputer">
                      <span>
                        &nbsp;Computers
                      </span>
                    </label>
                      &nbsp; &nbsp;
                    <label>
                      <input name="indent_mobile" type="checkbox" value="indentMobile">
                      &nbsp;Mobile devices
                    </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_toolgroup">
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__justifyleft_icon"></span>
                            </a>
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__justifycenter_icon"></span>
                            </a>
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__justifyright_icon"></span>
                            </a>
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__justifyblock_icon"></span>
                            </a>
                          </span>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                      <label>
                        <input name="align_computer" type="checkbox" value="alignComputer">
                        <span>
                          &nbsp;Computers
                        </span>
                      </label>
                        &nbsp; &nbsp;
                      <label>
                        <input name="align_mobile" type="checkbox" value="alignMobile">
                        &nbsp;Mobile devices
                      </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_toolgroup">
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__blockquote_icon"></span>
                            </a>
                          </span>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                      <label>
                        <input name="blocks_computer" type="checkbox" value="blocksComputer">
                          <span>
                          &nbsp;Computers
                        </span>
                      </label>
                        &nbsp; &nbsp;
                      <label>
                        <input name="blocks_mobile" type="checkbox" value="blocksMobile">
                        &nbsp;Mobile devices
                      </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_toolgroup">
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__bidiltr_icon"></span>
                            </a>
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__bidirtl_icon"></span>
                            </a>
                          </span>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                      <label>
                        <input name="bidi_computer" type="checkbox" value="bidiComputer">
                        <span>
                          &nbsp;Computers
                        </span>
                      </label>
                        &nbsp; &nbsp;
                      <label>
                        <input name="bidi_mobile" type="checkbox" value="bidiMobile">
                        &nbsp;Mobile devices
                      </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_toolgroup">
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__textcolor_icon"></span>
                            </a>
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__bgcolor_icon"></span>
                            </a>
                          </span>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                      <label>
                        <input name="colors_computer" type="checkbox"  value="colorsComputer">
                        <span>
                          &nbsp;Computers
                        </span>
                      </label>
                        &nbsp; &nbsp;
                      <label>
                        <input name="colors_mobile" type="checkbox" value="colorsMobile">
                        &nbsp;Mobile devices
                      </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_toolgroup">
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__link_icon"></span>
                            </a>
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__unlink_icon"></span>
                            </a>
                          </span>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                      <label>
                        <input name="links_computer" type="checkbox" value="linksComputer">
                        <span>
                          &nbsp;Computers
                        </span>
                      </label>
                        &nbsp; &nbsp;
                      <label>
                        <input name="links_mobile" type="checkbox" value="linksMobile">
                        &nbsp;Mobile devices
                      </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_toolgroup">
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__image_icon"></span>
                            </a>
                          </span>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                      <label>
                        <input name="image_computer" type="checkbox" value="imageComputer">
                        <span>
                          &nbsp;Computers
                        </span>
                      </label>
                        &nbsp; &nbsp;
                      <label>
                        <input name="image_mobile" type="checkbox" value="imageMobile">
                        &nbsp;Mobile devices
                      </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_toolgroup">
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__horizontalrule_icon"></span>
                            </a>
                          </span>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                      <label>
                        <input name="horizontalrule_computer" type="checkbox" value="horizontalruleComputer">
                        <span>
                          &nbsp;Computers
                        </span>
                      </label>
                        &nbsp; &nbsp;
                      <label>
                        <input name="horizontalrule_mobile" type="checkbox" value="horizontalruleMobile">
                        &nbsp;Mobile devices
                      </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_toolgroup">
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__specialchar_icon"></span>
                            </a>
                          </span>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                      <label>
                        <input name="specialchar_computer" type="checkbox" value="specialcharComputer">
                        <span>
                          &nbsp;Computers
                        </span>
                      </label>
                        &nbsp; &nbsp;
                      <label>
                        <input name="specialchar_mobile" type="checkbox" value="specialcharMobile">
                        &nbsp;Mobile devices
                      </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_toolgroup">
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__smiley_icon"></span>
                            </a>
                          </span>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                      <label>
                        <input name="smiley_computer" type="checkbox"  value="smileyComputer">
                        <span>
                          &nbsp;Computers
                        </span>
                      </label>
                        &nbsp; &nbsp;
                      <label>
                        <input name="smiley_mobile" type="checkbox" value="smileyMobile">
                        &nbsp;Mobile devices
                      </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_toolgroup">
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__timestamp_icon"></span>
                            </a>
                          </span>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                      <label>
                        <input name="timestamp_computer" type="checkbox" value="timestampComputer">
                        <span>
                          &nbsp;Computers
                        </span>
                      </label>
                        &nbsp; &nbsp;
                      <label>
                        <input name="timestamp_mobile" type="checkbox" value="timestampMobile">
                        &nbsp;Mobile devices
                      </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_combo cke_combo__format cke_combo_off"></span>
                          <a class="cke_combo_button">
                            <span class="cke_combo_text">
                              Format
                            </span>
                            <span class="cke_combo_open">
                              <span class="cke_combo_arrow"></span>
                            </span>
                          </a>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                    <label>
                      <input name="styles_computer" type="checkbox" value="stylesComputer">
                      <span>
                        &nbsp;Computers
                      </span>
                    </label>
                      &nbsp; &nbsp;
                    <label>
                      <input name="styles_mobile" type="checkbox" value="stylesMobile">
                      &nbsp;Mobile devices
                    </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_combo cke_combo__font cke_combo_off"></span>
                          <a class="cke_combo_button">
                            <span class="cke_combo_text">
                              Font
                            </span>
                            <span class="cke_combo_open">
                              <span class="cke_combo_arrow"></span>
                            </span>
                          </a>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                      <label>
                        <input name="font_computer" type="checkbox" value="fontComputer">
                        <span>
                          &nbsp;Computers
                        </span>
                      </label>
                        &nbsp; &nbsp;
                      <label>
                        <input name="font_mobile"  type="checkbox" value="fontMobile">
                        &nbsp;Mobile devices
                      </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_combo cke_combo__fontsize cke_combo_off"></span>
                          <a class="cke_combo_button">
                            <span class="cke_combo_text">
                              Size
                            </span>
                            <span class="cke_combo_open">
                              <span class="cke_combo_arrow"></span>
                            </span>
                          </a>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                      <label>
                        <input name="fontsize_computer" type="checkbox" value="fontsizeComputer">
                        <span>
                          &nbsp;Computers
                        </span>
                      </label>
                        &nbsp; &nbsp;
                      <label>
                        <input name="fontsize_mobile"  type="checkbox" value="fontsizeMobile">
                        &nbsp;Mobile devices
                      </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_toolgroup">
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__removeformat_icon"></span>
                            </a>
                          </span>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                      <label>
                        <input name="removeformat_computer" type="checkbox"  value="removeformatComputer">
                        <span>
                          &nbsp;Computers
                        </span>
                      </label>
                        &nbsp; &nbsp;
                      <label>
                        <input name="removeformat_mobile" type="checkbox" value="removeformatMobile">
                        &nbsp;Mobile devices
                      </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-form-group">
                    <label class="control-label col-sm-3">
                      <div class="cke_reset_all cke_ltr">
                        <span class="cke_toolbar">
                          <span class="cke_toolgroup">
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__undo_icon"></span>
                            </a>
                            <a class="cke_button" href="javascript:void(0)">
                              <span class="cke_button_icon cke_button__redo_icon"></span>
                            </a>
                        </span>
                        </span>
                      </div>
                    </label>
                    <div class="col-sm-4 editor-buttons-value-col">
                      <label>
                        <input name="undo_computer" type="checkbox"  value="undoComputer">
                        <span>
                          &nbsp;Computers
                        </span>
                      </label>
                        &nbsp; &nbsp;
                      <label>
                        <input name="undo_mobile" type="checkbox" value="undoMobile">
                        &nbsp;Mobile devices
                      </label>
                    </div>
                  </div>
                  <div class="form-group editor-buttons-save-form-group">
                    <div class="col-sm-4 col-sm-offset-3">
                      <button class="btn btn-primary" custom-scroll-to="settings-content" type="submit">
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


      <div id="cke_editable" class="cke cke_1 cke_reset_all cke_chrome cke_editor_editable cke_float cke_ltr cke_browser_webkit" dir="ltr" title="" lang="en" role="application" style="display: none; z-index: 9999; user-select: none;" aria-labelledby="cke_editable_arialbl"><span id="cke_editable_arialbl" class="cke_voice_label">Rich Text Editor, editable</span><div class="cke_inner"><div id="cke_1_top" class="cke_top" role="presentation"><span id="cke_8" class="cke_voice_label">Editor toolbars</span><span id="cke_1_toolbox" class="cke_toolbox" role="group" aria-labelledby="cke_8" onmousedown="return false;"><span id="cke_12" class="cke_toolbar" aria-labelledby="cke_12_label" role="toolbar"><span id="cke_12_label" class="cke_voice_label">Editing</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_13" class="cke_button cke_button__bold cke_button_off" href="javascript:void('Bold')" title="Bold" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_13_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(0,event);" onfocus="return CKEDITOR.tools.callFunction(1,event);" onclick="CKEDITOR.tools.callFunction(2,this);return false;"><span class="cke_button_icon cke_button__bold_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -24px;background-size:auto;">&nbsp;</span><span id="cke_13_label" class="cke_button_label cke_button__bold_label" aria-hidden="false">Bold</span></a><a id="cke_14" class="cke_button cke_button__italic cke_button_off" href="javascript:void('Italic')" title="Italic" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_14_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(3,event);" onfocus="return CKEDITOR.tools.callFunction(4,event);" onclick="CKEDITOR.tools.callFunction(5,this);return false;"><span class="cke_button_icon cke_button__italic_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -48px;background-size:auto;">&nbsp;</span><span id="cke_14_label" class="cke_button_label cke_button__italic_label" aria-hidden="false">Italic</span></a><a id="cke_15" class="cke_button cke_button__underline cke_button_off" href="javascript:void('Underline')" title="Underline" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_15_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(6,event);" onfocus="return CKEDITOR.tools.callFunction(7,event);" onclick="CKEDITOR.tools.callFunction(8,this);return false;"><span class="cke_button_icon cke_button__underline_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -144px;background-size:auto;">&nbsp;</span><span id="cke_15_label" class="cke_button_label cke_button__underline_label" aria-hidden="false">Underline</span></a><a id="cke_16" class="cke_button cke_button__strike cke_button_off" href="javascript:void('Strikethrough')" title="Strikethrough" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_16_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(9,event);" onfocus="return CKEDITOR.tools.callFunction(10,event);" onclick="CKEDITOR.tools.callFunction(11,this);return false;"><span class="cke_button_icon cke_button__strike_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -72px;background-size:auto;">&nbsp;</span><span id="cke_16_label" class="cke_button_label cke_button__strike_label" aria-hidden="false">Strikethrough</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_17" class="cke_button cke_button__numberedlist cke_button_off" href="javascript:void('Insert/Remove Numbered List')" title="Insert/Remove Numbered List" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_17_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(12,event);" onfocus="return CKEDITOR.tools.callFunction(13,event);" onclick="CKEDITOR.tools.callFunction(14,this);return false;"><span class="cke_button_icon cke_button__numberedlist_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -1440px;background-size:auto;">&nbsp;</span><span id="cke_17_label" class="cke_button_label cke_button__numberedlist_label" aria-hidden="false">Insert/Remove Numbered List</span></a><a id="cke_18" class="cke_button cke_button__bulletedlist cke_button_off" href="javascript:void('Insert/Remove Bulleted List')" title="Insert/Remove Bulleted List" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_18_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(15,event);" onfocus="return CKEDITOR.tools.callFunction(16,event);" onclick="CKEDITOR.tools.callFunction(17,this);return false;"><span class="cke_button_icon cke_button__bulletedlist_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -1392px;background-size:auto;">&nbsp;</span><span id="cke_18_label" class="cke_button_label cke_button__bulletedlist_label" aria-hidden="false">Insert/Remove Bulleted List</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_19" class="cke_button cke_button__outdent cke_button_disabled " href="javascript:void('Decrease Indent')" title="Decrease Indent" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_19_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(18,event);" onfocus="return CKEDITOR.tools.callFunction(19,event);" onclick="CKEDITOR.tools.callFunction(20,this);return false;"><span class="cke_button_icon cke_button__outdent_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -1128px;background-size:auto;">&nbsp;</span><span id="cke_19_label" class="cke_button_label cke_button__outdent_label" aria-hidden="false">Decrease Indent</span></a><a id="cke_20" class="cke_button cke_button__indent cke_button_off" href="javascript:void('Increase Indent')" title="Increase Indent" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_20_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(21,event);" onfocus="return CKEDITOR.tools.callFunction(22,event);" onclick="CKEDITOR.tools.callFunction(23,this);return false;"><span class="cke_button_icon cke_button__indent_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -1080px;background-size:auto;">&nbsp;</span><span id="cke_20_label" class="cke_button_label cke_button__indent_label" aria-hidden="false">Increase Indent</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_21" class="cke_button cke_button__justifyleft cke_button_off" href="javascript:void('Align Left')" title="Align Left" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_21_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(24,event);" onfocus="return CKEDITOR.tools.callFunction(25,event);" onclick="CKEDITOR.tools.callFunction(26,this);return false;"><span class="cke_button_icon cke_button__justifyleft_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -1200px;background-size:auto;">&nbsp;</span><span id="cke_21_label" class="cke_button_label cke_button__justifyleft_label" aria-hidden="false">Align Left</span></a><a id="cke_22" class="cke_button cke_button__justifycenter cke_button_off" href="javascript:void('Center')" title="Center" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_22_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(27,event);" onfocus="return CKEDITOR.tools.callFunction(28,event);" onclick="CKEDITOR.tools.callFunction(29,this);return false;"><span class="cke_button_icon cke_button__justifycenter_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -1176px;background-size:auto;">&nbsp;</span><span id="cke_22_label" class="cke_button_label cke_button__justifycenter_label" aria-hidden="false">Center</span></a><a id="cke_23" class="cke_button cke_button__justifyright cke_button_off" href="javascript:void('Align Right')" title="Align Right" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_23_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(30,event);" onfocus="return CKEDITOR.tools.callFunction(31,event);" onclick="CKEDITOR.tools.callFunction(32,this);return false;"><span class="cke_button_icon cke_button__justifyright_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -1224px;background-size:auto;">&nbsp;</span><span id="cke_23_label" class="cke_button_label cke_button__justifyright_label" aria-hidden="false">Align Right</span></a><a id="cke_24" class="cke_button cke_button__justifyblock cke_button_off" href="javascript:void('Justify')" title="Justify" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_24_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(33,event);" onfocus="return CKEDITOR.tools.callFunction(34,event);" onclick="CKEDITOR.tools.callFunction(35,this);return false;"><span class="cke_button_icon cke_button__justifyblock_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -1152px;background-size:auto;">&nbsp;</span><span id="cke_24_label" class="cke_button_label cke_button__justifyblock_label" aria-hidden="false">Justify</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_25" class="cke_button cke_button__blockquote cke_button_off" href="javascript:void('Block Quote')" title="Block Quote" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_25_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(36,event);" onfocus="return CKEDITOR.tools.callFunction(37,event);" onclick="CKEDITOR.tools.callFunction(38,this);return false;"><span class="cke_button_icon cke_button__blockquote_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -216px;background-size:auto;">&nbsp;</span><span id="cke_25_label" class="cke_button_label cke_button__blockquote_label" aria-hidden="false">Block Quote</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_26" class="cke_button cke_button__bidiltr cke_button_off" href="javascript:void('Text direction from left to right')" title="Text direction from left to right" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_26_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(39,event);" onfocus="return CKEDITOR.tools.callFunction(40,event);" onclick="CKEDITOR.tools.callFunction(41,this);return false;"><span class="cke_button_icon cke_button__bidiltr_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -168px;background-size:auto;">&nbsp;</span><span id="cke_26_label" class="cke_button_label cke_button__bidiltr_label" aria-hidden="false">Text direction from left to right</span></a><a id="cke_27" class="cke_button cke_button__bidirtl cke_button_off" href="javascript:void('Text direction from right to left')" title="Text direction from right to left" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_27_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(42,event);" onfocus="return CKEDITOR.tools.callFunction(43,event);" onclick="CKEDITOR.tools.callFunction(44,this);return false;"><span class="cke_button_icon cke_button__bidirtl_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -192px;background-size:auto;">&nbsp;</span><span id="cke_27_label" class="cke_button_label cke_button__bidirtl_label" aria-hidden="false">Text direction from right to left</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_28" class="cke_button cke_button__textcolor cke_button_off" href="javascript:void('Text Color')" title="Text Color" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_28_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(45,event);" onfocus="return CKEDITOR.tools.callFunction(46,event);" onclick="CKEDITOR.tools.callFunction(47,this);return false;"><span class="cke_button_icon cke_button__textcolor_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -456px;background-size:auto;">&nbsp;</span><span id="cke_28_label" class="cke_button_label cke_button__textcolor_label" aria-hidden="false">Text Color</span><span class="cke_button_arrow"></span></a><a id="cke_29" class="cke_button cke_button__bgcolor cke_button_off" href="javascript:void('Background Color')" title="Background Color" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_29_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(48,event);" onfocus="return CKEDITOR.tools.callFunction(49,event);" onclick="CKEDITOR.tools.callFunction(50,this);return false;"><span class="cke_button_icon cke_button__bgcolor_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -432px;background-size:auto;">&nbsp;</span><span id="cke_29_label" class="cke_button_label cke_button__bgcolor_label" aria-hidden="false">Background Color</span><span class="cke_button_arrow"></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_30" class="cke_toolbar" aria-labelledby="cke_30_label" role="toolbar"><span id="cke_30_label" class="cke_voice_label">Insert</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_31" class="cke_button cke_button__link cke_button_off" href="javascript:void('Link')" title="Link" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_31_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(51,event);" onfocus="return CKEDITOR.tools.callFunction(52,event);" onclick="CKEDITOR.tools.callFunction(53,this);return false;"><span class="cke_button_icon cke_button__link_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -1320px;background-size:auto;">&nbsp;</span><span id="cke_31_label" class="cke_button_label cke_button__link_label" aria-hidden="false">Link</span></a><a id="cke_32" class="cke_button cke_button__unlink cke_button_disabled " href="javascript:void('Unlink')" title="Unlink" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_32_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(54,event);" onfocus="return CKEDITOR.tools.callFunction(55,event);" onclick="CKEDITOR.tools.callFunction(56,this);return false;"><span class="cke_button_icon cke_button__unlink_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -1344px;background-size:auto;">&nbsp;</span><span id="cke_32_label" class="cke_button_label cke_button__unlink_label" aria-hidden="false">Unlink</span></a><span class="cke_toolbar_separator" role="separator"></span><a id="cke_33" class="cke_button cke_button__image cke_button_off" href="javascript:void('Image')" title="Image" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_33_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(57,event);" onfocus="return CKEDITOR.tools.callFunction(58,event);" onclick="CKEDITOR.tools.callFunction(59,this);return false;"><span class="cke_button_icon cke_button__image_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -1032px;background-size:auto;">&nbsp;</span><span id="cke_33_label" class="cke_button_label cke_button__image_label" aria-hidden="false">Image</span></a><a id="cke_34" class="cke_button cke_button__horizontalrule cke_button_off" href="javascript:void('Insert Horizontal Line')" title="Insert Horizontal Line" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_34_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(60,event);" onfocus="return CKEDITOR.tools.callFunction(61,event);" onclick="CKEDITOR.tools.callFunction(62,this);return false;"><span class="cke_button_icon cke_button__horizontalrule_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -984px;background-size:auto;">&nbsp;</span><span id="cke_34_label" class="cke_button_label cke_button__horizontalrule_label" aria-hidden="false">Insert Horizontal Line</span></a><a id="cke_35" class="cke_button cke_button__specialchar cke_button_off" href="javascript:void('Insert Special Character')" title="Insert Special Character" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_35_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(63,event);" onfocus="return CKEDITOR.tools.callFunction(64,event);" onclick="CKEDITOR.tools.callFunction(65,this);return false;"><span class="cke_button_icon cke_button__specialchar_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -2112px;background-size:auto;">&nbsp;</span><span id="cke_35_label" class="cke_button_label cke_button__specialchar_label" aria-hidden="false">Insert Special Character</span></a><a id="cke_36" class="cke_button cke_button__smiley cke_button_off" href="javascript:void('Smiley')" title="Smiley" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_36_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(66,event);" onfocus="return CKEDITOR.tools.callFunction(67,event);" onclick="CKEDITOR.tools.callFunction(68,this);return false;"><span class="cke_button_icon cke_button__smiley_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -1992px;background-size:auto;">&nbsp;</span><span id="cke_36_label" class="cke_button_label cke_button__smiley_label" aria-hidden="false">Smiley</span></a><a id="cke_37" class="cke_button cke_button__timestamp cke_button_off" href="javascript:void('Insert Timestamp')" title="Insert Timestamp" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_37_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(69,event);" onfocus="return CKEDITOR.tools.callFunction(70,event);" onclick="CKEDITOR.tools.callFunction(71,this);return false;"><span class="cke_button_icon cke_button__timestamp_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -2208px;background-size:auto;">&nbsp;</span><span id="cke_37_label" class="cke_button_label cke_button__timestamp_label" aria-hidden="false">Insert Timestamp</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_38" class="cke_toolbar" aria-labelledby="cke_38_label" role="toolbar"><span id="cke_38_label" class="cke_voice_label">Styles</span><span class="cke_toolbar_start"></span><span id="cke_9" class="cke_combo cke_combo__format cke_combo_off" role="presentation"><span id="cke_9_label" class="cke_combo_label">Format</span><a class="cke_combo_button" title="Paragraph Format" tabindex="-1" href="javascript:void('Paragraph Format')" hidefocus="true" role="button" aria-labelledby="cke_9_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(73,event,this);" onfocus="return CKEDITOR.tools.callFunction(74,event);" onclick="CKEDITOR.tools.callFunction(72,this);return false;"><span id="cke_9_text" class="cke_combo_text cke_combo_inlinelabel">Format</span><span class="cke_combo_open"><span class="cke_combo_arrow"></span></span></a></span><span id="cke_10" class="cke_combo cke_combo__font cke_combo_off" role="presentation"><span id="cke_10_label" class="cke_combo_label">Font</span><a class="cke_combo_button" title="Font Name" tabindex="-1" href="javascript:void('Font Name')" hidefocus="true" role="button" aria-labelledby="cke_10_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(76,event,this);" onfocus="return CKEDITOR.tools.callFunction(77,event);" onclick="CKEDITOR.tools.callFunction(75,this);return false;"><span id="cke_10_text" class="cke_combo_text cke_combo_inlinelabel">Font</span><span class="cke_combo_open"><span class="cke_combo_arrow"></span></span></a></span><span id="cke_11" class="cke_combo cke_combo__fontsize cke_combo_off" role="presentation"><span id="cke_11_label" class="cke_combo_label">Size</span><a class="cke_combo_button" title="Font Size" tabindex="-1" href="javascript:void('Font Size')" hidefocus="true" role="button" aria-labelledby="cke_11_label" aria-haspopup="true" onkeydown="return CKEDITOR.tools.callFunction(79,event,this);" onfocus="return CKEDITOR.tools.callFunction(80,event);" onclick="CKEDITOR.tools.callFunction(78,this);return false;"><span id="cke_11_text" class="cke_combo_text cke_combo_inlinelabel">Size</span><span class="cke_combo_open"><span class="cke_combo_arrow"></span></span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_39" class="cke_toolbar" aria-labelledby="cke_39_label" role="toolbar"><span id="cke_39_label" class="cke_voice_label">cleanup</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_40" class="cke_button cke_button__removeformat cke_button_off" href="javascript:void('Remove Format')" title="Remove Format" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_40_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(81,event);" onfocus="return CKEDITOR.tools.callFunction(82,event);" onclick="CKEDITOR.tools.callFunction(83,this);return false;"><span class="cke_button_icon cke_button__removeformat_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -1848px;background-size:auto;">&nbsp;</span><span id="cke_40_label" class="cke_button_label cke_button__removeformat_label" aria-hidden="false">Remove Format</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_41" class="cke_toolbar" aria-labelledby="cke_41_label" role="toolbar"><span id="cke_41_label" class="cke_voice_label">state</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_42" class="cke_button cke_button__undo cke_button_disabled " href="javascript:void('Undo')" title="Undo" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_42_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(84,event);" onfocus="return CKEDITOR.tools.callFunction(85,event);" onclick="CKEDITOR.tools.callFunction(86,this);return false;"><span class="cke_button_icon cke_button__undo_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -2328px;background-size:auto;">&nbsp;</span><span id="cke_42_label" class="cke_button_label cke_button__undo_label" aria-hidden="false">Undo</span></a><a id="cke_43" class="cke_button cke_button__redo cke_button_disabled " href="javascript:void('Redo')" title="Redo" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_43_label" aria-haspopup="false" aria-disabled="true" onkeydown="return CKEDITOR.tools.callFunction(87,event);" onfocus="return CKEDITOR.tools.callFunction(88,event);" onclick="CKEDITOR.tools.callFunction(89,this);return false;"><span class="cke_button_icon cke_button__redo_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -2280px;background-size:auto;">&nbsp;</span><span id="cke_43_label" class="cke_button_label cke_button__redo_label" aria-hidden="false">Redo</span></a><span class="cke_toolbar_separator" role="separator"></span><span id="cke_44"><a href="#" class="cke_button cke_button__savetoggle cke_button_off cke_button_disabled" onclick="CKEDITOR.tools.callFunction(90,this);return false;" title="Save"><span class="cke_button_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -1872px;background-size:auto;"> </span></a><span class="cke_savetoggle cke_savetoggle_disabled"><span class="cke_combo_text cke_combo_inlinelabel cke_savetoggle_text">saved</span></span></span></span><span class="cke_toolbar_end"></span></span><span id="cke_45" class="cke_toolbar" aria-labelledby="cke_45_label" role="toolbar"><span id="cke_45_label" class="cke_voice_label">usability</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_46" class="cke_button cke_button__simplemaximize cke_button_off" href="javascript:void('Maximize')" title="Maximize" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_46_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(91,event);" onfocus="return CKEDITOR.tools.callFunction(92,event);" onclick="CKEDITOR.tools.callFunction(93,this);return false;"><span class="cke_button_icon cke_button__simplemaximize_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -1968px;background-size:auto;">&nbsp;</span><span id="cke_46_label" class="cke_button_label cke_button__simplemaximize_label" aria-hidden="false">Maximize</span></a></span><span class="cke_toolbar_end"></span></span><span id="cke_47" class="cke_toolbar" aria-labelledby="cke_47_label" role="toolbar"><span id="cke_47_label" class="cke_voice_label">toolbarcontrol</span><span class="cke_toolbar_start"></span><span class="cke_toolgroup" role="presentation"><a id="cke_48" class="cke_button cke_button__moreorless cke_button_off" href="javascript:void('Expand toolbar')" title="Expand toolbar" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_48_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(94,event);" onfocus="return CKEDITOR.tools.callFunction(95,event);" onclick="CKEDITOR.tools.callFunction(96,this);return false;"><span class="cke_button_icon cke_button__show_complete_toolbar_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -1536px;background-size:auto;">&nbsp;</span><span id="cke_48_label" class="cke_button_label cke_button__moreorless_label" aria-hidden="false">Expand toolbar</span></a><a id="cke_49" class="cke_button cke_button__close cke_button_off" href="javascript:void('Exit edit mode')" title="Exit edit mode" tabindex="-1" hidefocus="true" role="button" aria-labelledby="cke_49_label" aria-haspopup="false" onkeydown="return CKEDITOR.tools.callFunction(97,event);" onfocus="return CKEDITOR.tools.callFunction(98,event);" onclick="CKEDITOR.tools.callFunction(99,this);return false;"><span class="cke_button_icon cke_button__close_icon" style="background-image:url('https://my.monkkee.com/javascripts/ckeditor-4.5.7-mnk4/plugins/icons.png?t=J2RL');background-position:0 -384px;background-size:auto;">&nbsp;</span><span id="cke_49_label" class="cke_button_label cke_button__close_label" aria-hidden="false">Exit edit mode</span></a></span><span class="cke_toolbar_end"></span></span></span></div></div></div></body></html>
