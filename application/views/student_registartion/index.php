<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Student Registartion </h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('student_registartion/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Password</th>
						<th>Name</th>
						<th>Email Id</th>
						<th>Mobile No</th>
						<th>Class</th>
						<th>Year</th>
						<th>Actions</th>
                    </tr>
                    <?php $i=1; foreach($student_registartion as $s){ ?>
                    <tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $s['password']; ?></td>
						<td><?php echo $s['name']; ?></td>
						<td><?php echo $s['email_id']; ?></td>
						<td><?php echo $s['mobile_no']; ?></td>
						<td><?php echo $s['class']; ?></td>
						<td><?php echo $s['year']; ?></td>
						<td>
                            <a href="<?php echo site_url('student_registartion/edit/'.$s['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('student_registartion/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php  $i++; } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
