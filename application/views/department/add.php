<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title"> Add Department</h3>
            </div>
            <?php echo form_open('department/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="department_name" class="control-label"><span class="text-danger">*</span>Department Name</label>
						<div class="form-group">
							<input type="text" name="department_name" value="<?php echo $this->input->post('department_name'); ?>" class="form-control" id="department_name" />
							<span class="text-danger"><?php echo form_error('department_name');?></span>
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