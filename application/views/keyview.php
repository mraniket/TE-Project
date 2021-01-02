
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Participate Individual Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('participate_individual/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Registration Id</th>
						<th>Department</th>
						<th>Email Id</th>
						<th>Mobile No</th>
						<th>Class</th>
						<th>Game Name</th>
						
                    </tr>
                    <?php { ?>
                    <tr>
						<td><?php echo $participate_individual['id']; ?></td>
						<td><?php echo $participate_individual['registration_id']; ?></td>
						<td><?php echo $participate_individual['department']; ?></td>
						<td><?php echo $participate_individual['email_id']; ?></td>
						<td><?php echo $participate_individual['mobile_no']; ?></td>
						<td><?php echo $participate_individual['class']; ?></td>
						<td><?php echo $participate_individual['game_name']; ?></td>
						
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
