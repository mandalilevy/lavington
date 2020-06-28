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
if (isset($_SESSION['admin'])) {
                  echo '<a style="color: black; font-family:Verdana; font-weight:bolder;" class="nav-link"> '.$_SESSION['admin'].'</a>';
                    }


 ?>
      </li>
</ul >
<ul class="navbar-nav  mt-lg-0 mx-auto">
    <li class="nav-item">
        <a style="color: darkgreen; font-family:Verdana; font-weight: bolder;" >LAVINGTON SECURITY MANAGEMENT SYSTEM</a>
      </li>
</ul>
 <ul class="navbar-nav  mt-lg-0 ml-auto">
 	<li class="nav-item">
        <a style="color: blue; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" data-toggle="modal" data-target="#exampleModalCenter">Reset Password</a>
      </li>
 	<li class="nav-item">
   <?php 
echo '<a class="nav-link ml-auto" style="color: blue; font-weight:bolder; font-family:Verdana"  href="logout.php?logout">Sign Out <i class="fa fa-sign-out" aria-hidden="true"></i></a>';
  ?>
   </li>
 </ul>
 </div> 
  </div>
</nav>
</div>
<div class="container pt-sm-4">
  <div class="jumbotron bg-light">
    <div class="container">
    <table class="mx-auto table-bordered" >
      <tr>
        <td data-toggle="modal" data-target="#station"  style="cursor: pointer;">New Station</td>
        <td><a href="stations.php" style="text-decoration: none;color: black">All Stations</a> </td>
      </tr>
       <tr>
        <td data-toggle="modal" data-target="#officer"  style="cursor: pointer;">New Officer</td>
        <td><a href="officers.php" style="text-decoration: none;color: black">All Officers</a></td>
      </tr>
    </table>
    <style>
      td{
        color: black;
        font-weight: bolder;
      }
    </style>
  </div>
</div>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">RESET PASSWORD</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <form class="form" method="post" action="">
                                <div class="form-group">

                             <label style="font-weight: bold;">New Password</label>
                                    <input type="text" required="" class="form-control" name="pp" >
                                </div>
                           
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right" name="upp">Reset</button>
                                </div>
                            </form>
      </div>
    </div>
  </div>
</div>



<?php 

if (isset($_SESSION['admin'])) {
	if (isset($_POST['upp'])){
$con=mysqli_connect("127.0.0.1","root","","lavington");
//$ps=$_POST['num'];
$qr ="UPDATE `login` SET `pass`='".$_POST['pp']."' WHERE email = '".$_SESSION['admin']."'";
if ($con->query($qr) === TRUE) {
  //header("Location: main.php");
}
}
}
 ?>
<div class="modal fade" id="station" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="form" method="post" action="">
      <div class="modal-body">
        <div class="card card-outline-secondary">
     <div class="card-header bg-dark">
       <center><h3 style="color: white">NEW STATION</h3></center> 
     </div>
                                <div class="form-group">

                             <label style="font-weight: bold;">Station Name</label>
                                    <input type="text" required="" class="form-control" name="name" >
                                </div>
                            <div class="form-group">

                             <label style="font-weight: bold;">Location</label>
                                    <input type="text" required="" class="form-control" name="loc" >
                                </div>
                                
      
     
        <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg float-right" name="add">Add</button>
                                </div>
        
                      
      </div>
          </div>                     
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
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
                         <center>  <h3 class="bg-dark mx-auto" style="color: white">NEW OFFICER</h3></center> 
                        </div>
                        <div class="card-body">
                            <form class="form" method="post" action="">
                                <div class="form-group">

                                   

<label style="font-weight: bold;">Officer ID</label>
                                    <input type="text" class="form-control" name="num" required="">
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Officer Name</label>
                                    <input type="text" class="form-control"  name="name" required="" >
                                </div>
                                <div class="form-group">
                                    <label style="font-weight: bold;">Officer Contacts</label>
                                    <input type="text" maxlength="10" class="form-control" name="cont" required="">

                                </div>
                                <div class="form-group">
                             
                                    <label style="font-weight: bold;">Station</label>
                                    <select class="form-control" name="st">
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
                                 <div class="form-group">
                                    <label style="font-weight: bold;">Employment Date</label>
                                    <input type="date" class="form-control" name="sdate" required="">
                                </div>
                                 <div class="form-group">
                                    <label style="font-weight: bold;">Status</label>
                                    <input type="text" class="form-control" name="status" required="" value="inactive" readonly="readonly">
                                </div>
<div class="modal-footer">
   <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg float-right" name="submit">Submit</button>
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
</html>
<?php
if (isset($_POST['add'])) {
$con=mysqli_connect("127.0.0.1","root","","lavington");
$query ="SELECT * FROM `station` WHERE name='".$_POST['name']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('STATION ALREADY REGISTERED!!');</script>";
}
else{
$sql="INSERT INTO `station`(`name`, `location`)VALUES('".$_POST['name']."','".$_POST['loc']."')";
if(mysqli_query($con, $sql)){
//header("Location: main.php");
}
}
}
 ?>

 <?php
 //session_start();
if (isset($_POST['submit'])) {
$con=mysqli_connect("127.0.0.1","root","","lavington");
$query ="SELECT * FROM `officer` WHERE id='".$_POST['num']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('OFFICER ALREADY REGISTERED!!');</script>";
}
else{
$sql="INSERT INTO `officer`(`id`, `name`, `contacts`, `station`, `date`, `status`) VALUES('".$_POST['num']."','".$_POST['name']."','".$_POST['cont']."','".$_POST['st']."','".$_POST['sdate']."','".$_POST['status']."')";
if(mysqli_query($con, $sql)){

}
}
}
 ?>