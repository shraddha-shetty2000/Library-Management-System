<?php
   include "navbar.php";
   include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>

	<title>Admin_Registration</title>
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
		<div class="reg_img">
		  <br>
        	<div class="box2">
        		<h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">
        	  Library Management System</h1>
        		<h1 style="text-align: center; font-size: 25px;">User Registration Form</h1>
        		<form name="Registration" action="" method="post">
        			<div class="login"> 
        			<input class="form-control" type="text" name="firstname" placeholder="First Name" required=""><br>
        			<input class="form-control" type="text" name="lastname" placeholder="Last Name" required=""><br>
        			<input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
        			<input class="form-control" type="password" name="password" placeholder="Password" required=""><br>
        			<input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
        			<input class="form-control" type="text" name="contact" placeholder="contact" required=""><br>
        			
        			<input class="btn btn-primary"  type="submit" name="submit" value="Sign_Up" style=" 
        			width: 70px; height: 30px; "></div>
        			
        		</form>
        		
        		
        	</div>
			
		</div>
		
	</section>
	    <?php
	      if (isset($_POST['submit'])) 
	      		      {
	      	$count=0;
	      	$sql="SELECT username from `admin`";
	      	$res=mysqli_query($db,$sql);

	      	while ($row=mysqli_fetch_assoc($res))
	      	{
	      		if($row['username']==$_POST['username'])
	      		{
	      			$count=$count+1;
	      		}
	      	}
	      if ($count==0) 	

	      	{
	      		mysqli_query($db,"INSERT INTO `admin` VALUES('','$_POST[firstname]','$_POST[lastname]','$_POST[username]'
	      		,'$_POST[password]','$_POST[email]','$_POST[contact]','profile.png');");
	    ?>
	      <script type="text/javascript">
	      	alert("Registration successful")
	      </script>
	    <?php
	   }

	      else 
	      {
	      	?>
	      <script type="text/javascript">
	      	alert("The username is already exist.");
	      </script>
	    <?php
	       	
	       } 

	      }

	    ?>

</body>
</html>