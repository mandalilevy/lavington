<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LAVINGTON SECURITY</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.css">

  <link rel = "icon" href = "img/logo.png" type = "image/x-icon"> 
  
</head>
<body>
	<div>
    <div class="" style="background-color:  #292b2c">
   <center> <img src="img/b.jpg" alt="" ></center>
   </div>
 <nav class="navbar navbar-expand-lg navbar-light bg-light" >

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    
<ul class="navbar-nav  mt-lg-0 mr-auto">
	<li class="nav-item">
        	<?php 
	session_start();
if (isset($_SESSION['user'])) {
                  echo '<a style="color: black; font-family:Verdana; font-weight:bolder;" class="nav-link">OFFICER ID: '.$_SESSION['user'].'</a>';
                    }


 ?>
      </li>
</ul >
<ul class="navbar-nav ">
    <li class="nav-item pl-3">
        <a data-toggle="modal" data-target="#officer" style="color: darkgreen; font-family:Verdana; font-weight: bolder;cursor: pointer;" >Assign Duty</a>
      </li> 
      <li class="nav-item pl-3">
        <a data-toggle="modal" data-target="#station"  style="color: darkgreen; font-family:Verdana; font-weight: bolder;cursor: pointer;" >Transfer Officer</a>
      </li> 
      <li class="nav-item pl-3">
        <a data-toggle="modal" data-target="#leave" style="color: darkgreen; font-family:Verdana; font-weight: bolder;cursor: pointer;" >Place officer on Leave</a>
      </li> 
       <li class="nav-item pl-3">
        <a data-toggle="modal" data-target="#suspend" style="color: darkgreen; font-family:Verdana; font-weight: bolder;cursor: pointer;" >Suspend Officer</a>
      </li>
      
</ul>
 <ul class="navbar-nav  mt-lg-0 ml-auto">
 	<li class="nav-item">
        <a style="color: blue; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" href="officers.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
      </li>
 </ul>
 </div> 
  </div>
</nav>
</div>
<div class="container jumbotron" style="background-color: white">
<?php
if (isset($_SESSION['user'])) {
$con=mysqli_connect("127.0.0.1","root","","lavington");
$query ="SELECT * FROM `officer` where id='".$_SESSION['user']."'";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) { ?> 
  <center> 
    <label style="font-weight: bolder;">Officer Name:    </label>
<input type="text" class="" readonly="readonly" name="name" style="text-transform: uppercase;color: red;border: none;"value="<?php echo $row["name"]; ?>">
 <label style="font-weight: bolder;">Officer Contacts: </label>
<input type="text" class="" readonly="readonly" name="conta" style="text-transform: uppercase;color: red;border: none;"value="<?php echo $row["contacts"]; ?>"> <br>
 <label style="font-weight: bolder;">Station Posted: </label>
<input type="text" class="" readonly="readonly" name="name" style="text-transform: uppercase;color: red;border: none;"value="<?php echo $row["station"]; ?>">
 <label style="font-weight: bolder;">Date Recruited: </label>
<input type="text" class="" readonly="readonly" name="name" style="text-transform: uppercase;color: red;border: none;"value="<?php echo $row["date"]; ?>">
</center>
<?php 
} 
}



?>
</div>
<div class="modal fade" id="officer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card card-outline-secondary">
                        <div class="card-header bg-dark">
                         <center>  <h3 class="bg-dark mx-auto" style="color: white">ASSIGN DUTY</h3></center> 
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="">
                                <div class="form-group">

                                   
<?php
if (isset($_SESSION['user'])) {
$con=mysqli_connect("127.0.0.1","root","","lavington");
$query ="SELECT * FROM `officer` where id='".$_SESSION['user']."'";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) { ?> 
<label style="font-weight: bold;">Officer ID</label>
                                    <input type="text" class="form-control" name="num" readonly="readonly"  value="<?php echo $row["id"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Officer Name</label>
                                    <input type="text" class="form-control"  name="name" value="<?php echo $row["name"]; ?>" readonly="readonly" >
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Officer Contacts</label>
                                    <input type="text" class="form-control" readonly="readonly" name="cont" value="<?php echo $row["contacts"]; ?>">

                                </div>
                               <?php }} ?>
                                 <div class="form-group">
                                    <label style="font-weight: bold;">Date</label>
                                    <input type="text" class="form-control" name="date" value="<?php echo date('d-yy-m'); ?>" readonly="readonly">
                                </div>
                                 <div class="form-group">
                                    <label style="font-weight: bold;">Time Reported</label>
                                    <input type="time" class="form-control" name="time" required="">
                                </div>
                                
                                 <div class="form-group">
                                    <label style="font-weight: bold;">Duty Assigned</label>
                                    <input type="text" class="form-control" name="duty" required="">
                                </div>
                                 <div class="form-group">
                                    <label style="font-weight: bold;">Status</label>
                                    <input type="text" class="form-control" name="status" value="active" readonly="readonly">
                                </div>
                                
<div class="modal-footer">
   <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right" name="submit">Assign</button>
                                </div>
</div>                               
                            </form>                                
                        </div>
                    </div>
      </div>
    </div>
  </div>
</div>








<div class="modal fade" id="station" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card card-outline-secondary">
                        <div class="card-header bg-dark">
                         <center>  <h3 class="bg-dark mx-auto" style="color: white">TRANSFER OFFICER</h3></center> 
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="">
                                 <div class="form-group">
                                    <label style="font-weight: bold;">New Station</label>

                                    <select class="form-control" name="name">
                                      <option value="">Select Station</option>
                                           <?php 
                                 //  session_start();
$con=mysqli_connect("127.0.0.1","root","","lavington");
$query = "SELECT * FROM station";
$query_run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($query_run)) {?>

                                      <option><?php echo $row['name'];?></option>
                                         <?php 
}
 ?>
                                    </select>
                                </div>
                                
<div class="modal-footer">
   <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right" name="trans">Transfer</button>
                                </div>
</div>                               
                            </form>                                
                        </div>
                    </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="leave" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card card-outline-secondary">
                        <div class="card-header bg-dark">
                         <center>  <h3 class="bg-dark mx-auto" style="color: white">PLACE OFFICER ON LEAVE</h3></center> 
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="">
                                <div class="form-group">

                                   
<?php
if (isset($_SESSION['user'])) {
$con=mysqli_connect("127.0.0.1","root","","lavington");
$query ="SELECT * FROM `officer` where id='".$_SESSION['user']."'";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) { ?> 
<label style="font-weight: bold;">Officer ID</label>
                                    <input type="text" class="form-control" name="num" readonly="readonly"  value="<?php echo $row["id"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Officer Name</label>
                                    <input type="text" class="form-control"  name="name" value="<?php echo $row["name"]; ?>" readonly="readonly" >
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Officer Contacts</label>
                                    <input type="text" class="form-control" readonly="readonly" name="cont" value="<?php echo $row["contacts"]; ?>">

                                </div>
                               <?php }} ?>
                                 <div class="form-group">
                                    <label style="font-weight: bold;">Start Date</label>
                                    <input type="date" class="form-control" name="sdate" required="">
                                </div>
                                  <div class="form-group">
                                    <label style="font-weight: bold;">End Date</label>
                                    <input type="date" class="form-control" name="edate" required="">
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Status</label>
                                    <input type="text" readonly="readonly" value="On Leave" class="form-control" name="status">
                                </div>
                                
<div class="modal-footer">
   <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right" name="leave">Submit</button>
                                </div>
</div>                               
                            </form>                                
                        </div>
                    </div>
      </div>
    </div>
  </div>
</div>






<div class="modal fade" id="suspend" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="card card-outline-secondary">
                        <div class="card-header bg-dark">
                         <center>  <h3 class="bg-dark mx-auto" style="color: white">SUSPEND OFFICER</h3></center> 
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="">
                                <div class="form-group">

                                   
<?php
if (isset($_SESSION['user'])) {
$con=mysqli_connect("127.0.0.1","root","","lavington");
$query ="SELECT * FROM `officer` where id='".$_SESSION['user']."'";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) { ?> 
<label style="font-weight: bold;">Officer ID</label>
                                    <input type="text" class="form-control" name="num" readonly="readonly"  value="<?php echo $row["id"]; ?>">
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Officer Name</label>
                                    <input type="text" class="form-control"  name="name" value="<?php echo $row["name"]; ?>" readonly="readonly" >
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Officer Contacts</label>
                                    <input type="text" class="form-control" readonly="readonly" name="cont" value="<?php echo $row["contacts"]; ?>">

                                </div>
                               <?php }} ?>
                                 <div class="form-group">
                                    <label style="font-weight: bold;">Date Suspended</label>
                                    <input type="date" class="form-control" name="sdate" required="">
                                </div>
                              
                                <div class="form-group">
                                    <label style="font-weight: bold;">Status</label>
                                    <input type="text" readonly="readonly" value="Suspended" class="form-control" name="status">
                                </div>
                                
<div class="modal-footer">
   <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right" name="sus">Submit</button>
                                </div>
</div>                               
                            </form>                                
                        </div>
                    </div>
      </div>
    </div>
  </div>
</div>


















</body>
 <?php
 //session_start();
if (isset($_POST['submit'])) {
$con=mysqli_connect("127.0.0.1","root","","lavington");
$query ="SELECT * FROM `duty` WHERE id='".$_POST['num']."' AND date='".$_POST['date']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('DUTY ALREADY ASSIGNED!!');</script>";
}
else{
$sql="INSERT INTO `duty`(`id`, `name`, `contacts`, `date`, `time`, `duty`) VALUES('".$_POST['num']."','".$_POST['name']."','".$_POST['cont']."','".$_POST['date']."','".$_POST['time']."','".$_POST['duty']."')";
if(mysqli_query($con, $sql)){
$upp="UPDATE `officer` SET `status`='".$_POST['status']."' WHERE id='".$_POST['num']."'";
if(mysqli_query($con, $upp)){

}
}
}
}
 ?>
 <?php 

if (isset($_SESSION['user'])) {
  if (isset($_POST['trans'])){
$con=mysqli_connect("127.0.0.1","root","","lavington");
//$ps=$_POST['num'];
$qr ="UPDATE `officer` SET `station`='".$_POST['name']."' WHERE id = '".$_SESSION['user']."'";
if ($con->query($qr) === TRUE) {
 echo "<script type='text/javascript'>alert('Transfer Successfull!!');</script>";
}
}
}
 ?>

 <?php
 //session_start();
if (isset($_POST['leave'])) {
$con=mysqli_connect("127.0.0.1","root","","lavington");
$query ="SELECT * FROM `officer` WHERE id='".$_POST['num']."' AND status='".$_POST['status']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('ALREADY PLACED ON LEAVE!!');</script>";
}
else{
$sql="INSERT INTO `rest`(`id`, `name`, `cont`, `sdate`, `edate`) VALUES('".$_POST['num']."','".$_POST['name']."','".$_POST['cont']."','".$_POST['sdate']."','".$_POST['edate']."')";
if(mysqli_query($con, $sql)){
$upp="UPDATE `officer` SET `status`='".$_POST['status']."' WHERE id='".$_POST['num']."'";
if(mysqli_query($con, $upp)){

}
}
}
}
 ?>

 <?php
 //session_start();
if (isset($_POST['sus'])) {
$con=mysqli_connect("127.0.0.1","root","","lavington");
$query ="SELECT * FROM `officer` WHERE id='".$_POST['num']."' AND status='".$_POST['status']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('ALREADY PLACED ON LEAVE!!');</script>";
}
else{
$sql="INSERT INTO `suspend`(`id`, `name`, `cont`, `date`) VALUES('".$_POST['num']."','".$_POST['name']."','".$_POST['cont']."','".$_POST['sdate']."')";
if(mysqli_query($con, $sql)){
$upp="UPDATE `officer` SET `status`='".$_POST['status']."' WHERE id='".$_POST['num']."'";
if(mysqli_query($con, $upp)){

}
}
}
}
 ?>








</html>
