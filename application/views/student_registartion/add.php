<!DOCTYPE html>
<html>
<head>
    <!-- Meta-Information -->
    <title>GHRIET | Student</title>
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

            <div class="box-header with-border">
              	<h3 class="box-title">Student Registartion Add</h3>
            </div>
            <div style ="color:red">
                <?php if($error = $this->session->flashdata('success_msg')): ?>
                    <div class="alert alert-success alert-dismissible" role="alert"> 
                        <strong>Success!</strong> <?= $error ?>
                    </div>
                <?php endif; ?>
                <?php if($error = $this->session->flashdata('error_msg')): ?>
                    <div class="alert alert-danger alert-dismissible" role="alert"> 
                        <strong>Error!</strong> <?= $error ?>
                    </div>
                <?php endif; ?>

            </div>
            <?php echo form_open('student_registartion/add'); ?>
            
          	<div class="box-body">
          		<div class="row clearfix">
					
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" placeholder=" please Enter full name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email_id" class="control-label"><span class="text-danger">*</span>Email Id</label>
						<div class="form-group">
							<input type="text" name="email_id" value="<?php echo $this->input->post('email_id'); ?>" class="form-control" id="email_id" />
							<span class="text-danger"><?php echo form_error('email_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mobile_no" class="control-label"><span class="text-danger">*</span>Mobile No</label>
						<div class="form-group">
							<input type="text" name="mobile_no" value="<?php echo $this->input->post('mobile_no'); ?>" class="form-control" id="mobile_no" />
							<span class="text-danger"><?php echo form_error('mobile_no');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="class" class="control-label"><span class="text-danger">*</span>Class</label>
						<div class="form-group">
							<input type="text" name="class" value="<?php echo $this->input->post('class'); ?>" class="form-control" id="class" />
							<span class="text-danger"><?php echo form_error('class');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="year" class="control-label"><span class="text-danger">*</span>Year</label>
						<div class="form-group">
							<input type="text" name="year" value="<?php echo $this->input->post('year'); ?>" class="form-control" id="year" />
							<span class="text-danger"><?php echo form_error('year');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	
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