
<?php 

if (isset($_POST['search'])) {

$valuetosearch=$_POST['value_to_search'];
$sql="SELECT * FROM `rest` WHERE CONCAT(`id`, `name`, `cont`) LIKE '%".$valuetosearch."%'"; 
$search_result= filtertable($sql);
}
else{
$sql="SELECT * FROM `rest`";
$search_result=filtertable($sql);

}

function filtertable($sql)
{
  $con=mysqli_connect("127.0.0.1","root","","lavington");
  $filter_result=mysqli_query($con,$sql);
  return $filter_result;
}
 ?>







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
    
     <form action="leave.php" method="post">
    
    <input type="text" name="value_to_search" class="form-group" placeholder="Search Officer here">
    <button class="form-group" name="search"><i class="fa fa-search" aria-hidden="true"></i></button>
    
   </form>
  </li>



</ul >
<ul class="navbar-nav  mt-lg-0 mx-auto">
    <li class="nav-item">
        <a style="color: darkgreen; font-family:Verdana; font-weight: bolder;" >OFFICERS ON LEAVE</a>
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
<div class="container pt-sm-4">
  <div class="">
    <div class="">
       
       <table class="table  table-bordered table-responsive-sm table-sm">
    <thead class="thead-light">
<tr>
 

<th scope="col"><strong>OFFICER ID</strong></th>
<th scope="col"><strong>OFFICER NAME</strong></th>
<th scope="col"><strong>CONTACTS</strong></th>
<th scope="col"><strong>START DATE</strong></th>
<th scope="col"><strong>END DATE</strong></th>




</tr>
</thead>
<tbody>
<?php

//$query ="SELECT * FROM `officer`";
//$result = mysqli_query($con,$query);
while($row = mysqli_fetch_array($search_result)) { 

  ?>
  <td><?php echo $row["id"]; ?></td>
<td ><?php echo $row["name"]; ?></td>
<td ><?php echo $row["cont"]; ?></td>
<td ><?php echo $row["sdate"]; ?></td>
<td ><?php echo $row["edate"]; ?></td>

</tr>
<?php 
$_SESSION['officer']=$row["id"]; 
} ?>

</tbody>
</table>
  </div>
</div>





</body>
</html>
