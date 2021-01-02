<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Participate Team Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('participate_team/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Team Id</th>
						<th>Leader Name</th>
						<th>Department</th>
						<th>Sport</th>
						<th>Member 1</th>
						<th>Member 2 </th>
                        <th>Member 3 </th>
                        <th>Member 4 </th>
                        <th>Member 5 </th>
                        <th>Member 6 </th>
                        <th>Member 7 </th>
						<th>Email Id</th>
						<th>Mobile No</th>
						<th>Actions</th>
                    </tr>
                    <?php $i=1 ;foreach($participate_team as $p){ ?>
                    <tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $p['name']; ?></td>
						<td><?php echo $p['department_name']; ?></td>
						<td><?php echo $p['game_name']; ?></td>
						<td><?php echo $p['members1_id']; ?></td>
						<td><?php echo $p['members2_id']; ?></td>
                        <td><?php echo $p['members3_id']; ?></td>
                        <td><?php echo $p['members4_id']; ?></td>
                        <td><?php echo $p['members5_id']; ?></td>
                        <td><?php echo $p['members6_id']; ?></td>
                        <td><?php echo $p['members7_id']; ?></td>
						<td><?php echo $p['email_id']; ?></td>
						<td><?php echo $p['mobile_no']; ?></td>
						<td>
                            <a href="<?php echo site_url('participate_team/edit/'.$p['team_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('participate_team/remove/'.$p['team_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $i++; } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
