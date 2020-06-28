<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LAVINGTON SECURITY</title>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="bootstrap.css">
 <link rel="stylesheet" href="bootstrap.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.min.css">
 <link rel="stylesheet" href="bootstrap-reboot.css">

  <link rel = "icon" href = "img/logo.png" type = "image/x-icon"> 
</head>
<body>
<div class="container register">
<div class="row">
<div class="col-md-3 register-left">
<img src="img/logo.png" alt="" />
<h3>LAVINGTON SECURITY LIMITED</h3>
</div>
<div class="col-md-9 register-right">
<ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
</li>
<li class="nav-item">
<a class="nav-link" id="newuser-tab" data-toggle="tab" href="#newuser" role="tab" aria-controls="newuser" aria-selected="false">New User</a>
</li>
</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
<h3 class="register-heading">User Login</h3>
<div class="row register-form">
<div class="col-md-12 profile_card">
    <form class="form-inline" method="post" action="process.php">
    <div class="form-group">
        <input type="email" class="form-control" name="user" required="" placeholder="Email" value="" />
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="pass" required="" placeholder="Password *" value="" />
    </div>
    <div class="float-right">
      <input type="submit" class="btn btn-primary" name="login" value="Login" />
      </div>
      </form>
</div>
</div>
</div>
<div class="tab-pane fade show" id="newuser" role="tabpanel" aria-labelledby="newuser-tab">
<h3 class="register-heading">User Registration</h3>
<div class="row register-form">
    <center>
    <form action="" method="post" class="form">
<div class="">
    <div class="form-group">
        <input type="text" class="form-control" name="name" placeholder="Full Names" required="" value="" />
    </div>
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Email Address" required="" value="" />
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="pass" placeholder="Password*" required="" value="" />
    </div>
<div>
    <input type="submit" name="add" class="btn btn-primary" value="Register" />
    </div>
</div>
</form>
</center>
</div>
</div>
</div>
</div>
</div>
</div>
<style>
    

/* register */


.tab-content>.tab-pane {
    display: block;
}

#myTabContent 
{
position: relative;
width: 100%;
height: 370px;
z-index: 5;
    overflow: hidden;
}

    #myTabContent .tab-pane
    {
    position: absolute;
    top: 0;
    padding: 10px 40px;
    z-index: 1;
    opacity: 0;
    -webkit-transition: all linear 0.3s;
    -moz-transition: all linear 0.3s;
    -o-transition: all linear 0.3s;
    -ms-transition: all linear 0.3s;
    transition: all linear 0.3s;
}

#login,
.content-3 {
    -webkit-transform: translateX(-250px);
    -moz-transform: translateX(-250px);
    -o-transform: translateX(-250px);
    -ms-transform: translateX(-250px);
    transform: translateX(-250px);
}

#newuser,
.content-4 {
    -webkit-transform: translateX(250px);
    -moz-transform: translateX(250px);
    -o-transform: translateX(250px);
    -ms-transform: translateX(250px);
    transform: translateX(250px);
}

.register .register-right ul .nav-item:a.active~#myTabContent #login,
.register .register-right ul .nav-item:a.active~#myTabContent .content-2,
.register .register-right ul .nav-item:a.active~#myTabContent #newuser,
{
    -webkit-transform: translateX(0px);
    -moz-transform: translateX(0px);
    -o-transform: translateX(0px);
    -ms-transform: translateX(0px);
    transform: translateX(0px);
    z-index: 100;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
    opacity: 1;
    -webkit-transition: all ease-out 0.2s 0.1s;
    -moz-transition: all ease-out 0.2s 0.1s;
    -o-transition: all ease-out 0.2s 0.1s;
    -ms-transition: all ease-out 0.2s 0.1s;
    transition: all ease-out 0.2s 0.1s;
}


@keyframes page {
    0% {
        left: 0;
    }
    50% {
        left: 10px;
    }
    100% {
        left: 0;
    }
}

@-moz-keyframes page {
    0% {
        left: 0;
    }
    50% {
        left: 10px;
    }
    100% {
        left: 0;
    }
}

@-webkit-keyframes page {
    0% {
        left: 0;
    }
    50% {
        left: 10px;
    }
    100% {
        left: 0;
    }
}

@-ms-keyframes page {
    0% {
        left: 0;
    }
    50% {
        left: 10px;
    }
    100% {
        left: 0;
    }
}

@-o-keyframes page {
    0% {
        left: 0;
    }
    50% {
        left: 10px;
    }
    100% {
        left: 0;
    }
}


.register {
    background: -webkit-linear-gradient(left,  #1143a6, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}

.register-left {
    text-align: center;
    color: #fff;
    margin-top: 4%;
}

.register-left input {
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}

.register-right {
    background: #f8f9fa;
    border-top-left-radius: 15% 50%;
    border-bottom-left-radius: 15% 50%;
}

.register-left img {
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite alternate;
    animation: mover 1s infinite alternate;
}

@-webkit-keyframes mover {
    0% {
        transform: translateY(0);
    }
    100% {
        transform: translateY(-20px);
    }
}

@keyframes mover {
    0% {
        transform: translateY(0);
    }
    100% {
        transform: translateY(-20px);
    }
}

.register-left p {
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}

.register .register-form {

}



.register .nav-tabs {
    margin-top: 1%;
    border: none;
    background: #0062cc;
    border-radius: 20px;
    width: 35%;
    float: right;
}
#myTab  .nav-item {
    padding: 5px 3px;
        text-align: center;
    display: block;
        margin: 0px 6px;
}
.register .nav-tabs .nav-link {
      padding: 10px 8px;
    height: 25px;
    color: #fff;
    font-size: 13px;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}

.register .nav-tabs .nav-link:hover {
    border: none;
}

.register .nav-tabs .nav-link.active {
    color:  #1143a6;
    border: 1px solid  #1143a6;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}

.register-heading {
    text-align: center;
    color:  #1143a6;
}

#login.active 
{
    
    -webkit-transform: translateX(0px);
    transform: translateX(0px);
    z-index: 100;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
    opacity: 1;
    -webkit-transition: all ease-out 0.2s 0.1s;
    transition: all ease-out 0.2s 0.1s;

}
#newuser.active 
{
    
    -webkit-transform: translateX(0px);
    transform: translateX(0px);
    z-index: 100;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
    opacity: 1;
    -webkit-transition: all ease-out 0.2s 0.1s;
    transition: all ease-out 0.2s 0.1s;

}
</style>

<?php
if (isset($_POST['add'])) {
$con=mysqli_connect("127.0.0.1","root","","lavington");
$query ="SELECT * FROM `login`  WHERE email='".$_POST['email']."'";
$result=mysqli_query($con,$query);
if (mysqli_fetch_assoc($result)) {
  echo "<script type='text/javascript'>alert('ALREADY REGISTERED!!');</script>";
}
else{
$sql="INSERT INTO `login`(`name`, `email`, `pass`) VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['pass']."')";
if(mysqli_query($con, $sql)){
}
}
}
?>























</body>
</html>