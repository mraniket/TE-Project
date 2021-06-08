<?php include 'templates/header.php'; ?>
<meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="description" content="">   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>css/color-schemes/color2.css" title="color2">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>css/color-schemes/color4.css" title="color4">
    <link rel="alternate stylesheet" href="<?php echo base_url(); ?>css/color-schemes/color5.css" title="color5">
<div class="panel-content">
    <div class="lgn-wrp grysh">
        <div class="bg-img" style="background-image: url(<?php echo base_url(); ?>images/resource/backgroundimg5.jpg );"></div>
        <div class="lgn-innr">
            <div class="widget lgn-frm">
                <div class="frm-tl">
                    <h4>Login to Admin</h4>
                    <span>Fill your detail to get in</span>
                </div>
                <form id="form-login" action="<?php echo base_url(); ?>Dashboard/process_login" method="post" class="form-horizontal ">
              
                        <div class="row mrg10">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <input class="brd-rd5" type="text" id="username" name="username" placeholder="User Name" />
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <input class="brd-rd5" type="password" id="password" name="password" placeholder="Password" />
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <span class="chbx"><input type="checkbox" id="chk1" /><label for="chk1">Remember Me</label></span>
                        </div>
                        <a href="<?php echo base_url(); ?>index.php/admin/add" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
                        <div class="col-xs-4 text-right">
                            <input type="submit" class="btn btn-effect-ripple btn-sm btn-primary" value="Let's Go" name="login">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <footer>
          <p>Copyright <a href="#" title=""></a> 2020</p>
          <span>GHRIET</span>
        </footer>
    </div><!-- Login Wrapper -->
</div><!-- Panel Content -->

