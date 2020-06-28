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
    
<ul class="navbar-nav  mt-lg-0 mx-1">
    <li class="nav-item">
        <a style="color: darkgreen; font-family:Verdana; font-weight: bolder;" >LAVINGTON SECURITY MANAGEMENT SYSTEM</a>
      </li>
</ul>
 <ul class="navbar-nav  mt-lg-0 mx-auto">
  <li class="nav-item">
        <a style="color: blue; font-family:Verdana; cursor: pointer; font-weight: bolder;" class="nav-link" href="officers.php"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
      </li>
 </ul>
 </div> 
  </div>
</nav>
</div>
<div class="container pt-xl-5">
<div class="container ">
	<div class="container">
    <center>
<form action="" method="post">
  <legend>Verify Officer ID</legend>
  <div class="form-group row">
<?php
$num=$_GET['off'];
$con=mysqli_connect("127.0.0.1","root","","lavington");
$query ="SELECT * FROM `officer` where id='".$_GET['off']."'";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($result)) { ?> 
  <div class="mx-auto">
<input type="text" class="" readonly="readonly" name="name" value="<?php echo $row["id"]; ?>">
<?php } ?>
<input type="submit" name="add" class="btn btn-sm btn-warning float-right" value="Proceed">
    </div>                            
                                </div>
</form>
</center>
</div>
</div>
</div>
<style>
  .group{
    border: none;
    padding: 15px 20px;
    border-radius: 25px;
    background: rgba(255, 255, 255, .1)
  }
</style>
<?php 
session_start();

if (isset($_POST['add'])) {
$con=mysqli_connect("127.0.0.1","root","","lavington");
$query ="SELECT * FROM `officer` WHERE id='".$_POST['name']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
 $_SESSION['user']=$_POST['name'];
  header("Location:actions.php"); 
}
else{
?>
<html>
  <header>
    <title>LAVINGTON SECURITY</title>
    <link rel="stylesheet" href="bootstrap.css">
     <link rel = "icon" href = "img/logo.png" type = "image/x-icon"> 
  </header>
  <body>
    <div class="container">
      <div class="jumbotron">
       <b style="color: red"> Officer Does Not Exist!!</b> <br>Make sure you write the correct Officer ID!!
      </div>
    </div>
  </body>
</html>

<?php }
}
 ?>

</body>
</html>