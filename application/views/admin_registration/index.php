<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">All Admins </h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin_registration/add'); ?>" class="btn btn-success btn-sm">Add</a> 
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
						<th>Actions</th>
                    </tr>
                    <?php foreach($admin_registration as $a){ ?>
                    <tr>
						<td><?php echo $a['id']; ?></td>
						<td><?php echo $a['password']; ?></td>
						<td><?php echo $a['name']; ?></td>
						<td><?php echo $a['email_id']; ?></td>
						<td><?php echo $a['mobile_no']; ?></td>
						<td>
                            <a href="<?php echo site_url('admin_registration/edit/'.$a['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin_registration/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
