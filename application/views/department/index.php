<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"> Listing Department</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('department/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Department Id</th>
						<th>Department Name</th>
						<th>Actions</th>
                    </tr>
                    <?php $i=1; foreach($department as $d){ ?>
                    <tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $d['department_name']; ?></td>
						<td>
                            <a href="<?php echo site_url('department/edit/'.$d['department_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('department/remove/'.$d['department_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $i++; } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
