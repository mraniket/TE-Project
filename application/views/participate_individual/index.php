
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
						<th>Student Name</th>
						<th>Department</th>
						<th>Email Id</th>
						<th>Mobile No</th>
						<th>Class</th>
						<th>Game Name</th>
						<th>Actions</th>
                    </tr>
                    <?php $i=1; foreach($participate_individual as $p){ ?>
                    <tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $p['name']."  ".$p['lname']." "; ?></td>
						<td><?php echo $p['department_name']; ?></td>
						<td><?php echo $p['email_id']; ?></td>
						<td><?php echo $p['mobile_no']; ?></td>
						<td><?php echo $p['class']; ?></td>
						<td><?php echo $p['game_name']; ?></td>
						<td>
                            <a href="<?php echo site_url('participate_individual/edit/'.$p['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('participate_individual/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $i++; } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
