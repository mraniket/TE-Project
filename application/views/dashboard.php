<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=2">
<meta name="viewport" content="width=device-width, initial-scale=2">
<style type="text/css">
      body {
 {
  background-color: black;
  font-family: cursive;
}

.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e50073, 0 0 40px #e50073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e50073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
{
  font-family: 'Lato', sans-serif;
}

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}

  font-family: Arial, Helvetica, sans-serif;
}

.flip-card {
  background-color: transparent;
  width: 800px;
  height: 400px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
   position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  
}

.flip-card-back {
    background: linear-gradient(to top right, #33ccff 3%, #ff0066 100%);
  color: black;
  transform: rotateY(180deg);
}
</style>

</head>
<body>


<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
<h3>Search</h3>
<form action="<?php echo base_url(); ?>Participate_individual/KeyWords" method="post">
  <input type="text" name="title">
  <input type="submit" name="submit" value="Search">
</form>
<div class="row" style=" margin-top:50px;">
  
  
  <div class="col-md-12">
    <div class="card">
      
          <div class="row">
      <div class="box-body" style=" margin-left:35px;"><h3>Idividual Games</h3>
        <table class="table table-striped">
         <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Department</th>
            <th>Email Id</th>
            <th>Mobile No</th>
            <th>Class</th>
            <th>Game Name</th>
            
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
          </tr>
                    <?php $i++; } ?>
        </table>
                                
       </div>
    </div>

        </div></br>
        <div class="box-body"><div class="box-body"><h3>Team Games</h3>
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
            
                 </tr>
                 <?php $i=1; foreach($participate_team as $p){ ?>
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
            
                    </tr>
                    <?php $i++; } ?>
                </table>
                                
            </div>
      </div>
    </div>
  </div>
  
</div>
</div>


</div>

</body>
</html> 
