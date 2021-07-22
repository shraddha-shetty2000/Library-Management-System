<?php
  include "navbar.php";
  include"connection.php";
  
  
?>
<!DOCTYPE html>
<html>
<head>

	<title>Student_Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
  section 
  {
   margin-top: -20px;
  }
</style>     
</head>
<body>

  <!--<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand active">ONLINE LIBRARY MANAGEMENT SYSTEM</a>
      </div>
      <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="books.php">BOOKS</a></li>
            <li><a href="feedback.php">FEEDBACK</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="student_login.php"><span class="glyphicon 
          glyphicon-log-in"> LOGIN</span></a></li>
          <li><a href="student_login.php"><span class="glyphicon 
          glyphicon-log-out"> LOGOUT</span></a></li>
          <li><a href="registration.php"><span class="glyphicon 
          glyphicon-user"> SIGNUP</span></a></li>
      </ul>
    </div>
  </nav> -->
    
    
   
	<!--<header style="height: 100px;">
		<div class="logo">
	        <img src="images lms/logo4.jpg" height=80 width=80 >
	        <h1 style="color: white">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
	    </div>
	    
	     	<nav>
	     		<ul>
	     			<li><a href="index.php">HOME</a></li>
	     			<li><a href="books.php">BOOKS</a></li>
	     			<li><a href="student_login.php">STUDENT_LOGIN</a></li>
	     			<li><a href="feedback.php">FEEDBACK</a></li>
	     		</ul>
	     	</nav> 
		
		
	</header> -->
		
	<section>
		<div class="log_img">
			<br>
        <div class="box1">
        		<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">
        	  Library Management System</h1>
        		<h1 style="text-align: center; font-size: 25px;">User Login Form</h1><br>
        		<form name="login" action="" method="post">
        			<div class="login"> 
        			<input  class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
        			<input  class="form-control" type="password" name="password" placeholder="Password" required=""><br>
        			<input class="btn btn-primary"  type="submit" name="submit" value="Login" style=" 
        			width: 70px; height: 30px; "></div>
        			
        		<p style="color: white; padding-left: 15px;">
        			<br><br>
            <a style="color:white;" href="update_password.php">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp 
            <a style="color:white">new to this website?</a><a  style="color:white"; href="registration.php">Sign up</a>
        		</p>
        		</form>
        		
        </div>
			
	 </div>
		
	</section>
     <?php

       if (isset($_POST['submit'])) 
       {
        $count=0;
        $res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]'
         && password='$_POST[password]';");

         $row= mysqli_fetch_assoc($res);

         $count=mysqli_num_rows($res);

        if ($count==0) 
        {
          ?>
       <!--    <script type="text/javascript">
            alert("The Username and password doesn't match.");
           </script> -->
           <div class="alert alert-danger" style="width: 700px; margin-left: 360px;background-color: red;color: white;">
             <strong>The Username and password doesn't match.</strong>
           </div>
          <?php
        }
        else
        {
          /*------------------if username & password matches---------*/
          $_SESSION['login_user'] = $_POST['username'];
          $_SESSION['pic'] = $row['pic'];
          
          ?>
          <script type="text/javascript">
            window.location="index.php"
          </script>
          <?php

        }
       }

   ?>


</body>
</html>

