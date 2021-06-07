
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Participate Individual Edit</h3>
            </div>
			<?php echo form_open('participate_individual/edit/'.$participate_individual['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="registration_id" class="control-label"><span class="text-danger">*</span>Student Registartion</label>
						<div class="form-group">
							<select name="registration_id" class="form-control">
								<option value="">select student_registartion</option>
								<?php 
								foreach($all_student_registartion as $student_registartion)
								{
									$selected = ($student_registartion['id'] == $participate_individual['registration_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$student_registartion['id'].'" '.$selected.'>'.$student_registartion['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('registration_id');?></span>
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
									$selected = ($department['department_id'] == $participate_individual['department']) ? ' selected="selected"' : "";

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
							<input type="text" name="email_id" value="<?php echo ($this->input->post('email_id') ? $this->input->post('email_id') : $participate_individual['email_id']); ?>" class="form-control" id="email_id" />
							<span class="text-danger"><?php echo form_error('email_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mobile_no" class="control-label"><span class="text-danger">*</span>Mobile No</label>
						<div class="form-group">
							<input type="text" name="mobile_no" value="<?php echo ($this->input->post('mobile_no') ? $this->input->post('mobile_no') : $participate_individual['mobile_no']); ?>" class="form-control" id="mobile_no" />
							<span class="text-danger"><?php echo form_error('mobile_no');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="class" class="control-label"><span class="text-danger">*</span>Class</label>
						<div class="form-group">
							<input type="text" name="class" value="<?php echo ($this->input->post('class') ? $this->input->post('class') : $participate_individual['class']); ?>" class="form-control" id="class" />
							<span class="text-danger"><?php echo form_error('class');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="game_name" class="control-label"><span class="text-danger">*</span>Game Name</label>
						<div class="form-group">
							<input type="text" name="game_name" value="<?php echo ($this->input->post('game_name') ? $this->input->post('game_name') : $participate_individual['game_name']); ?>" class="form-control" id="game_name" />
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