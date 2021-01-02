<?php include 'templates/header.php'; ?>
<div class="panel-content panel-data expand-data">
<div class="pg-tp">
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-lg-6 col-lg-offset-3 form-style" style="margin-left: 80px; width: 100%;">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Individual Participation</h3>
            </div>
            <?php echo form_open('participate_individual/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="email_id" class="control-label"><span class="text-danger">*</span>First Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="email_id" class="control-label"><span class="text-danger">*</span>last Name</label>
						<div class="form-group">
							<input type="text" name="lname" value="<?php echo $this->input->post('lname'); ?>" class="form-control" id="lname" />
							<span class="text-danger"><?php echo form_error('last name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="department" class="control-label"><span class="text-danger">*</span>Department</label>
						<div class="form-group">
							<select name="department" class="form-control">
								<option value="">select department</option>
								<?php 
								foreach($all_department as $department)
								{
									$selected = ($department['department_id'] == $this->input->post('department')) ? ' selected="selected"' : "";

									echo '<option value="'.$department['department_id'].'" '.$selected.'>'.$department['department_name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('department');?></span>
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
						<label for="game_name" class="control-label"><span class="text-danger">*</span>Game Name</label>
						<div class="form-group">
							<input type="text" name="game_name" value="<?php echo $this->input->post('game_name'); ?>" class="form-control" id="game_name" />
							<span class="text-danger"><?php echo form_error('game_name');?></span>
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
<?php include 'templates/footer.php'; ?>