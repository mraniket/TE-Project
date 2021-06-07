<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Edit Team</h3>
            </div>
			<?php echo form_open('participate_team/edit/'.$participate_team['team_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="leader_registration_id" class="control-label"><span class="text-danger">*</span>Team Leader</label>
						<div class="form-group">
							<select name="leader_registration_id" class="form-control">
								<option value="">select student_registartion</option>
								<?php 
								foreach($all_student_registartion as $student_registartion)
								{
									$selected = ($student_registartion['id'] == $participate_team['leader_registration_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$student_registartion['id'].'" '.$selected.'>'.$student_registartion['name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('leader_registration_id');?></span>
						</div>
					</div>
					<div class="col-md-6">leader_registration_id
						<label for="department" class="control-label"><span class="text-danger">*</span>Department</label>
						<div class="form-group">
							<select name="department" class="form-control">
								<option value="">select department</option>
								<?php 
								foreach($all_department as $department)
								{
									$selected = ($department['department_id'] == $participate_team['department']) ? ' selected="selected"' : "";

									echo '<option value="'.$department['department_id'].'" '.$selected.'>'.$department['department_name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('department');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="sport" class="control-label"><span class="text-danger">*</span>Sport Info</label>
						<div class="form-group">
							<select name="sport" class="form-control">
								<option value="">select sport_info</option>
								<?php 
								foreach($all_sport_info as $sport_info)
								{
									$selected = ($sport_info['id'] == $participate_team['sport']) ? ' selected="selected"' : "";

									echo '<option value="'.$sport_info['id'].'" '.$selected.'>'.$sport_info['game_name'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('sport');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="members1_id" class="control-label"><span class="text-danger">*</span>Team Member</label>
						<div class="form-group">
							<input type="text" name="members1_id" value="<?php echo ($this->input->post('members1_id') ? $this->input->post('members1_id') : $participate_team['members1_id']); ?>" class="form-control" id="members1_id" />
							<span class="text-danger"><?php echo form_error('members1_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="members2_id" class="control-label"><span class="text-danger">*</span>Team Member </label>
						<div class="form-group">
							<input type="text" name="members2_id" value="<?php echo ($this->input->post('members2_id') ? $this->input->post('members2_id') : $participate_team['members2_id']); ?>" class="form-control" id="members2_id" />
							<span class="text-danger"><?php echo form_error('members2_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="members3_id" class="control-label"><span class="text-danger">*</span>Team Member </label>
						<div class="form-group">
							<input type="text" name="members3_id" value="<?php echo ($this->input->post('members3_id') ? $this->input->post('members3_id') : $participate_team['members3_id']); ?>" class="form-control" id="members3_id" />
							<span class="text-danger"><?php echo form_error('members3_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="members4_id" class="control-label"><span class="text-danger">*</span>Team Member </label>
						<div class="form-group">
							<input type="text" name="members4_id" value="<?php echo ($this->input->post('members4_id') ? $this->input->post('members4_id') : $participate_team['members4_id']); ?>" class="form-control" id="members4_id" />
							<span class="text-danger"><?php echo form_error('members4_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="members5_id" class="control-label"><span class="text-danger">*</span>Team Member </label>
						<div class="form-group">
							<input type="text" name="members5_id" value="<?php echo ($this->input->post('members5_id') ? $this->input->post('members5_id') : $participate_team['members5_id']); ?>" class="form-control" id="members5_id" />
							<span class="text-danger"><?php echo form_error('members5_id');?></span>
						</div>
					</div>
				
					<div class="col-md-6">
						<label for="email_id" class="control-label"><span class="text-danger">*</span>Email Id</label>
						<div class="form-group">
							<input type="text" name="email_id" value="<?php echo ($this->input->post('email_id') ? $this->input->post('email_id') : $participate_team['email_id']); ?>" class="form-control" id="email_id" />
							<span class="text-danger"><?php echo form_error('email_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="mobile_no" class="control-label"><span class="text-danger">*</span>Mobile No</label>
						<div class="form-group">
							<input type="text" name="mobile_no" value="<?php echo ($this->input->post('mobile_no') ? $this->input->post('mobile_no') : $participate_team['mobile_no']); ?>" class="form-control" id="mobile_no" />
							<span class="text-danger"><?php echo form_error('mobile_no');?></span>
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