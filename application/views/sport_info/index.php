<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sport Info </h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('sport_info/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Game Name</th>
						<th>From Date</th>
						<th>To Date</th>
						<th>Actions</th>
                    </tr>
                    <?php $i=1; foreach($sport_info as $s){ ?>
                    <tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $s['game_name']; ?></td>
						<td><?php echo $s['from_date']; ?></td>
						<td><?php echo $s['to_date']; ?></td>
						<td>
                            <a href="<?php echo site_url('sport_info/edit/'.$s['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('sport_info/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $i++; } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
