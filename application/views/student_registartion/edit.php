<?php include 'templates/header.php'; ?>
<div class="panel-content panel-data expand-data">
<div class="pg-tp">
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-style" style="margin-left: 100px; width: 100%;">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title"> Edit Student Registartion </h3>
            </div>
 </div>
 </div>
          <div class="row">
    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-style" style="margin-left: 100px; width: 100%;">
      	<div class="box box-info">
			<?php echo form_open('student_registartion/edit/'.$student_registartion['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="text" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $student_registartion['password']); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $student_registartion['name']); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email_id" class="control-label"><span class="text-danger">*</span>Email Id</label>
						<div class="form-group">
							<input type="text" name="email_id" value="<?php echo ($this->input->post('email_id') ? $this->input->post('email_id') : $student_registartion['email_id']); ?>" class="form-control" id="email_id" />
							<span class="text-danger"><?php echo form_error('email_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mobile_no" class="control-label"><span class="text-danger">*</span>Mobile No</label>
						<div class="form-group">
							<input type="text" name="mobile_no" value="<?php echo ($this->input->post('mobile_no') ? $this->input->post('mobile_no') : $student_registartion['mobile_no']); ?>" class="form-control" id="mobile_no" />
							<span class="text-danger"><?php echo form_error('mobile_no');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="class" class="control-label"><span class="text-danger">*</span>Class</label>
						<div class="form-group">
							<input type="text" name="class" value="<?php echo ($this->input->post('class') ? $this->input->post('class') : $student_registartion['class']); ?>" class="form-control" id="class" />
							<span class="text-danger"><?php echo form_error('class');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="year" class="control-label"><span class="text-danger">*</span>Year</label>
						<div class="form-group">
							<input type="text" name="year" value="<?php echo ($this->input->post('year') ? $this->input->post('year') : $student_registartion['year']); ?>" class="form-control" id="year" />
							<span class="text-danger"><?php echo form_error('year');?></span>
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
		</div>
    </div>
</div>
</div>
<?php include 'templates/footer.php'; ?>