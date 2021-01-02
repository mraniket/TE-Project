<!DOCTYPE html>
<html>
<head>
    <!-- Meta-Information -->
    <title>Ghriet | Student</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>resources/img/favicon.png">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Vendor: Bootstrap 4 Stylesheets  -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" type="text/css">

    <!-- Our Website CSS Styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/icons.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/main.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/responsive.css" type="text/css">

    <!-- Color Scheme -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/color-schemes/color.css" type="text/css" title="color3">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>css/color-schemes/color1.css" title="color1">
    <link rel="alternate stylesheet" href="css/color-schemes/color2.css" title="color2">
    <link rel="alternate stylesheet" href="css/color-schemes/color4.css" title="color4">
    <link rel="alternate stylesheet" href="css/color-schemes/color5.css" title="color5">
</head>
<body class="panel-data">




<div class="panel-content">
    <div class="lgn-wrp grysh">
        <div class="bg-img" style="background-image: url(images/resource/bg-img1.png);"></div>
        <div class="lgn-innr">
            <div class="widget lgn-frm">
<div id="login-container">
            <!-- Login Header -->
            <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
                <script src='https://kit.fontawesome.com/a076d05399.js'></script>
                
            </h1>
            <!-- END Login Header -->

            <!-- Login Block -->
            <div class="block animation-fadeInQuickInv">
                <!-- Login Title -->
                <div class="block-title">
                   
                    <h2>Login</h2>
                </div>
                <!-- END Login Title -->

                <!-- Login Form -->
                <form id="form-login" action="<?php echo base_url(); ?>index.php/student/process_login" method="post" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="text" id="username" name="username" class="form-control" placeholder="Your email-id">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Your password">
                        </div>
                    </div>
                    <!-- <div class="form-group form-actions">
                        <div class="col-xs-8">
                            <label class="csscheckbox csscheckbox-primary">
                                <input type="checkbox" id="login-remember-me" name="login-remember-me">
                                <span></span>
                            </label>
                            Remember Me.
                        </div> -->
                        <div class="col-xs-4 text-right">
                            <input type="submit" class="btn btn-effect-ripple btn-sm btn-primary" value="Let's Go" name="login">
                        </div>
                           
                            <a href="#">
                               <a href="<?php echo site_url('student_registartion/add');?>"><i class="fa fa-plus"></i> new registration</a>
                            </a>
                            
                         
                    </div>
                </form>
                <!-- END Login Form -->
            </div>
            <!-- END Login Block -->

            <!-- Footer -->
            <footer class="text-muted text-center animation-pullUp">
                <small><span id="year"></span> &copy;Team Noob</small>
            </footer>
            <!-- END Footer -->
    </div>
    </form>
            </div>
        </div>
        <footer>
          <p>Copyright <a href="#" title="">Example Company</a> &amp; 2017 - 2018</p>
          <span>noobs</span>
        </footer>
    </div><!-- Login Wrapper -->
</div><!-- Panel Content -->
    <!-- Vendor: Javascripts -->
    
</body>
</html>