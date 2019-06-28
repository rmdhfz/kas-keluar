<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<!--[if IE 7 ]>
<html class="no-js ie7 oldie" dir="ltr" lang="id-ID">
<![endif]-->
<!--[if IE 8 ]>
<html class="no-js ie8 oldie" dir="ltr" lang="id-ID">
<![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]>
<!-->
<html class="no-js" dir="ltr" lang="id-ID">
<!--<![endif]-->
<head>
    <title>File Manager System | FMS - Hafiz Ramadhan</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!--[if lt IE 10]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content=""/>
    <meta name="keywords" content="" />
    <meta name="author" content="Hafiz Ramadhan" />
    <meta name='HandheldFriendly' content='true'/>
    <meta name="MobileOptimized" content="320"/>
    <meta content='yes' name='apple-mobile-web-app-capable'/>
    <meta content='#263544' name='apple-mobile-web-app-status-bar-style'/>
    <meta content='#263544' name='theme-color'/>
    <meta content='#263544' name='msapplication-navbutton-color'/>
    <meta content='true' name='MSSmartTagsPreventParsing'/>
    <base href="../">
    <link rel="icon" href="<?php echo base_url('static/assets/images/index.png') ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url('static/assets/images/index.png') ?>" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="static/bower_components/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/assets/pages/waves/css/waves.min.css" type="text/css" media="all"> <link rel="stylesheet" type="text/css" href="static/assets/icon/feather/css/feather.css">
    <link rel="stylesheet" type="text/css" href="static/assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="static/assets/icon/icofont/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="static/assets/icon/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="static/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="static/assets/css/pages.css">
    <link rel="stylesheet" type="text/css" href="static/assets/css/notif.min.css">
    <script type="text/javascript">
        var json, post;
                json = 'json';
                post = 'post';
            function ClearFormData(id){
                 $(id)[0].reset();
            }
            function notif(_title_, _type_, _pesan_){ 
                sweetAlert({ 
                    title: _title_, 
                    type: _type_, 
                    text: _pesan_, 
                    timer: 1750, 
                    showConfirmButton: false 
                }); 
            }
            function safeURL(url){
              var safeURL = window.btoa(url);
              return safeURL;
            }
            function readURL(url){
              var readURL = window.atob(url);
              return readURL; 
            }
            function check_is_email(email) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test( email );
            }
            function readIMG(input) {
              if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $('#imgpreview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
              }
            }
    </script>
</head>
<!-- <body themebg-pattern="theme6" style="background-image: url('<?php echo base_url('static/assets/images/login-background.jpg'); ?>')"> -->
<body themebg-pattern="theme6" style="background-image: url('<?php echo base_url('static/assets/images/login-background.jpg'); ?>')">
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="login-block" style="margin-top: -2rem; padding-top: 6rem;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                     <div class="auth-box card">
                        <div id="alert"></div>
                        <div class="card-block">
                            <div class="row m-b-20">
                                <div class="col-md-12">
                                    <h3 class="text-center txt-primary"><b>File Manager</b></h3>
                                    <hr/>
                                </div>
                            </div>
                            <div class="container-fluid">
                            <form class="md-float-material form-material" id="formPemulihan" method="post">
                                <input type="hidden" name="id" id="id" value="<?php echo base64_decode($this->uri->segment(2)); ?>" />
                                <div class="form-group form-primary">
                                    <input type="password" name="newpassword" class="form-control" required="on" autocomplete="off" autosave="off" maxlength="35" minlength="4" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.confirmnewpassword.pattern = this.value;"/>
                                    <span class="form-bar"></span>
                                    <label class="float-label">Kata Sandi Baru</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="confirmnewpassword" id="confirmnewpassword" class="form-control" required="on" autocomplete="off" autosave="off" maxlength="35" minlength="4" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Kata sandi yang kamu masukan tidak sama' : '');" />
                                    <span class="form-bar"></span>
                                    <label class="float-label">Konfirmasi Kata Sandi</label>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" id="btnlogin">Reset Kata Sandi </button>
                                    </div>
                                </div>
                                <p class="text-inverse text-left"> Filemanager @ 2018 by 
                                    <a href="https://www.linkedin.com/in/hafiz-ramadhan-0b1a2717b/" target="_blank"> <b> Hafiz Ramadhan </b></a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="static/assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="static/assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="static/assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="static/assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="static/assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->

    <script type="text/javascript" src="static/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="static/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="static/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="static/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <script src="static/assets/pages/waves/js/waves.min.js"></script>
    <script type="text/javascript" src="static/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <script type="text/javascript" src="static/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="static/bower_components/modernizr/js/css-scrollbars.js"></script>
    <script type="text/javascript" src="static/assets/js/common-pages.js"></script>
    <script type="text/javascript" src="static/assets/js/notif.min.js"></script>
    <script type="text/javascript">
        $("#formPemulihan").submit(function(event) {
            var url, data, safe, button, img, secureimg, form;
                event.preventDefault();
                url = "<?php safeURL(site_url('frontend/resetKataSandiById')); ?>";
                safe = readURL(url);
                data = $(this).serialize();
                form = $("#formPemulihan input");
                button = $("#btnlogin");
                img = '<?php safeURL(base_url('static/assets/images/loading.gif')); ?>';
                secureimg = readURL(img);
                button.removeClass('btn-primary').addClass('btn-default');
                button.text('').html("<img src="+secureimg+">").prop('disabled', true);
                form.prop('disabled', true);
                setTimeout(function() {
                    $.ajax({
                        url: safe,
                        data: data,
                        dataType: json,
                        method: post,
                        success: function(data){
                            if (data.success == true) {
                                form.prop('disabled', false);
                                notif('Pemberitahuan', 'success', 'Akun kamu berhasil direset, silahkan login kembali');
                                setTimeout(function(){
                                    window.location = "<?php echo site_url(); ?>";
                                },200);
                            }else{
                                notif('Pemberitahuan', 'error', data.msg);
                                form.prop('disabled', false);
                                button.removeClass('btn-default').addClass('btn-primary').text('Reset Kata Sandi').prop('disabled', false);
                            }
                        },
                        error: function(){
                            notif('Pemberitahuan', 'error', 'Update Kata Sandi, karena kesalahan sistem.');
                            console.log('500 | Login Error');
                            button.removeClass('btn-default').addClass('btn-primary').text('LOGIN').prop('disabled', false);
                            form.prop('disabled', false);
                        }
                    })
                }, 210);
        });
    </script>
</body>
</html>
