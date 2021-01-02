<?php include 'templates/header.php'; ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
            
                  

                </a>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4>Carrom</h4>

                <p><td>Individual Game</td></p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?php echo site_url('participate_individual/add');?>" class="small-box-footer">Participate <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h5>Chess</sup></h5>

                <p><td>Individual Game</td></p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="<?php echo site_url('participate_individual/add');?>" class="small-box-footer">Participate <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h5>Kabaddi</h5>
                <p>Team Game</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo site_url('participate_team/add');?>" class="small-box-footer">Participate <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h5>Table Tennis</h5>

                <p>Individual Game</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="<?php echo site_url('participate_individual/add');?>" class="small-box-footer">Participate <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            
          </div>
          <!-- ./col -->
        </div>
        <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 ">
            <!-- small box -->
              <div class="box">
            <div class="box-header">
                <h3 class="box-title">Team Games</h3>
              
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
            <th>sr. No</th>
            <th>Game Name</th>
            <th>From Date</th>
            <th>To Date</th>
            
                    </tr>
                    <?php $i=1; foreach($sport_info as $s){ ?>
                    <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $s['game_name']; ?></td>
            <td><?php echo $s['from_date']; ?></td>
            <td><?php echo $s['to_date']; ?></td>
           
                    </tr>
                    <?php $i++; } ?>
                </table>
                                
            </div>
        </div>
              
            
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
          <div class="col-lg-6 ">
            <!-- small box -->
            <div class="box">
            <div class="box-header">
                <h3 class="box-title">Individual Games</h3>
              
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
            <th>sr. No</th>
            <th>Game Name</th>
            <th>Department</th>
            <th>Class</th>
            
                    </tr>
                    
                    <tr>
            <td>1</td>
            <td>Tennis</td>
            <td>All</td>
            <td>All</td>
           
                    </tr>
                     <tr>
            <td>2</td>
            <td>Carrom</td>
            <td>-</td>
            <td>-</td>
           
                    </tr>
                     <tr>
            <td>3</td>
            <td>Chess</td>
            <td>-</td>
            <td>-</td>
           
                    </tr>
                     <tr>
            <td>4</td>
            <td>.</td>
            <td>-</td>
            <td>-</td>
           
                    </tr>
                     <tr>
            <td>5</td>
            <td>.</td>
            <td>-</td>
            <td>-</td>
           
                    </tr>
                   
                </table>
                                
            </div>
        </div>
            
          </div>
          <!-- ./col -->
          
            
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              
              
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">statistics</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">statistics</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">statistics</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->
<div class="row">
    <div class="col-md-12">
        
    </div>
</div>

            <!-- solid sales graph -->
            
            <!-- /.card -->

            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'templates/footer.php'; ?>