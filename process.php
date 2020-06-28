<?php 
session_start();
$con=mysqli_connect("127.0.0.1","root","","lavington");
$query ="SELECT * FROM `login` WHERE  email='".$_POST['user']."' AND pass='".$_POST['pass']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
 $_SESSION['admin']=$_POST['user'];
  header("Location:main.php"); 
}
else{
?>
<html>
	<head>
		<title>PIONEER INTERNATIONAL UNIVERSITY</title>
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="bootstrap.css">

		 <link rel = "icon" href = "img/logo.png" type = "image/x-icon"> 
	</head>
	<body>
		<div class="container">
			<div class="jumbotron" style="background-color: white;color: red; font-weight: bolder;">
				Wrong Username and Password!!! <br> <a href="index.php"><i class="fa fa-hand-o-left" aria-hidden="true"></i></a>
			</div>
		</div>
	</body>
</html>

<?php }
 ?>
