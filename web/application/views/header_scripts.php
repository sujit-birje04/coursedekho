<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Courses Dekho</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icomoon-social.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/leaflet.css" />
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/homePageOnly.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/cd_style.css">


          <?php
            if($this->router->fetch_class() == 'home'){
          ?>
            <style>
                .header{
                    background: url('<?php echo base_url(); ?>assets/img/homepage-slider/slider-bg4.jpg') no-repeat fixed;
                    background-size: cover;
                    min-height: 650px;
                    position: relative;
                }

                .bg-color
                {
                    background-color: rgba(0, 0, 0, 0.5);
                    min-height: 650px;
                }
                #main-header
                {
                   /* padding: 20px 0; */
                }
                .navbar-default {
                    background-color: transparent;
                    border:0px;
                }
                .navbar-fixed-top {
                    top: 0;
                    border-width: 0 0 1px;
                }
                h2 {
                    margin: 0;
                    border-bottom: none;
                }
                        .contact-form .form-control
                {
                    background-color: transparent;
                    border-radius: 0px;
                    color: #fff !important;
                    border-color: #4285f4;
                }
                .form-control:focus {
                    border-color: #4285f4;
                    outline: 0;
                    
                    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
                    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
                }
                #contact h2.service-title.pad-bt15 {
                    color: #fff;
                }

                .social-login .social-login-buttons {
                  text-align: center;
                      margin-bottom: -20px;
                }
                .social-login .social-login-buttons a {
                  position: relative;
                  display: inline-block;
                  white-space: nowrap;
                  height: 35px;
                  line-height: 35px;
                  padding-right: 15px;
                      padding-left: 50px;
                  margin: 10px 5px;
                  color: #fff;
                  font-size: 15px;
                    font-weight: 400;
                  text-align: left;
                  -webkit-border-radius: 3px;
                  -webkit-background-clip: padding-box;
                  -moz-border-radius: 3px;
                  -moz-background-clip: padding;
                  border-radius: 3px;
                  background-clip: padding-box;
                  -webkit-transition: opacity .2s linear;
                  -moz-transition: opacity .2s linear;
                  -o-transition: opacity .2s linear;
                  -ms-transition: opacity .2s linear;
                  transition: opacity .2s linear;
                  -webkit-transform: translateZ(0);
                  -moz-transform: translateZ(0);
                  -o-transform: translateZ(0);
                  -ms-transform: translateZ(0);
                  transform: translateZ(0);
                }
                .social-login .social-login-buttons a:hover {
                  opacity: 0.8;
                  text-decoration: none;
                }
                .social-login .social-login-buttons a:before {
                  content: '';
                  display: block;
                  position: absolute;
                  left: 10px;
                  top: 5px;
                  width: 24px;
                  height: 24px;
                  background-image: url(<?php echo base_url(); ?>assets/img/social-login.png);
                  background-repeat: no-repeat;
                }
                .social-login .btn-facebook-login {
                  padding-left: 35px;
                  background-color: #6886bc;
                  background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiB2aWV3Qm94PSIwIDAgMSAxIiBwcmVzZXJ2ZUFzcGVjdFJhdGlvPSJub25lIj48bGluZWFyR3JhZGllbnQgaWQ9ImdyYWQtdWNnZy1nZW5lcmF0ZWQiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIiB4MT0iMCUiIHkxPSIwJSIgeDI9IjAlIiB5Mj0iMTAwJSI+PHN0b3Agb2Zmc2V0PSIwIiBzdG9wLWNvbG9yPSIjNjg4NmJjIiBzdG9wLW9wYWNpdHk9IjEiLz48c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM0NjZjYTkiIHN0b3Atb3BhY2l0eT0iMSIvPjwvbGluZWFyR3JhZGllbnQ+PHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz48L3N2Zz4=);
                  background-image: -moz-linear-gradient(top,#6886bc 0,#466ca9 100%);
                  background-image: -webkit-linear-gradient(top,#6886bc 0,#466ca9 100%);
                  background-image: -o-linear-gradient(top,#6886bc 0,#466ca9 100%);
                  background-image: linear-gradient(top,#6886bc 0,#466ca9 100%);
                }
                .social-login .btn-twitter-login {
                  padding-left: 45px;
                  background-color: #d43e33;
                }
                .social-login .btn-facebook-login:before {
                  left: 10px;
                  background-position: 0 0;
                }
                .social-login .btn-twitter-login:before {
                  left: 15px;
                  background-position: -48px 0;
                }
                .social-login .not-member p {
                  font-size: 1.5em;
                  font-weight: 600;
                  font-style: normal;
                  margin-top: 30px;
                  border-top: 1px solid #CCC;
                }
                .cd_homeSocialLogin a {
                    width: 100%;
                }

                .social-login .social-login-buttons a:before {
                    border-right: 1px solid #ddd;
                }
            </style>
          <?php
            }
          ?>



    </head>
	   