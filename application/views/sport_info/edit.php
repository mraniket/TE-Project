<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sport Info Edit</h3>
            </div>
			<?php echo form_open('sport_info/edit/'.$sport_info['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="game_name" class="control-label"><span class="text-danger">*</span>Game Name</label>
						<div class="form-group">
							<input type="text" name="game_name" value="<?php echo ($this->input->post('game_name') ? $this->input->post('game_name') : $sport_info['game_name']); ?>" class="form-control" id="game_name" />
							<span class="text-danger"><?php echo form_error('game_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="from_date" class="control-label"><span class="text-danger">*</span>From Date</label>
						<div class="form-group">
							<input type="text" name="from_date" value="<?php echo ($this->input->post('from_date') ? $this->input->post('from_date') : $sport_info['from_date']); ?>" class="has-datepicker form-control" id="from_date" />
							<span class="text-danger"><?php echo form_error('from_date');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="to_date" class="control-label"><span class="text-danger">*</span>To Date</label>
						<div class="form-group">
							<input type="text" name="to_date" value="<?php echo ($this->input->post('to_date') ? $this->input->post('to_date') : $sport_info['to_date']); ?>" class="has-datepicker form-control" id="to_date" />
							<span class="text-danger"><?php echo form_error('to_date');?></span>
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