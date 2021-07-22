<?php
	include "connection.php";
	include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Information</title>
	<style type="text/css">
		.srch
		{
			padding-left: 1000px;
		}
	</style>
</head>
<body>
	<!--__________________________________search bar_____________________________________-->
	<div class="srch">
		<form class="navbar-form" method="post" name="form1">
			
				<input class ="form-control" type="text" name="search" placeholder="Student username..." required="">
				<button style="background-color:#2e964ce6;" type="submit" name="submit" class="btn btn-default" >
					<span class="glyphicon glyphicon-search"></span>
					
				</button>
			
			</form>
	</div>
	<h2>List Of students</h2>
	<?php

		if(isset($_POST['submit']))
		{
			$q=mysqli_query($db,"SELECT firstname,lastname,username,usn,email,contact FROM `student` where username like '%$_POST[search]%' ");
			if(mysqli_num_rows($q)==0)
			{
				echo "Sorry! No student found with the username. try searching again.";
			}
			else
			{
	    echo "<table class='table table-bordered table-hover'>";
	        echo "<tr style='background-color:#2e964ce6;'>";
	    	   //table header
	    		echo "<th>"; echo "First Name"; echo"</th>";
	    		echo "<th>"; echo "Last Name"; echo"</th>";
	    		echo "<th>"; echo "Username"; echo"</th>";
	    		echo "<th>"; echo "USN"; echo"</th>";
	    		echo "<th>"; echo "Email"; echo"</th>";
	    		echo "<th>"; echo "Contact"; echo"</th>";
	    		
	        echo"</tr>";
	    
	    	while ($row=mysqli_fetch_assoc($q)) 
	    	{
	    	echo "<tr>";
	    	echo "<td>"; echo $row['firstname'];  echo "</td>";
	    	echo "<td>"; echo $row['lastname']; echo "</td>";
	    	echo "<td>"; echo $row['username']; echo "</td>";
	    	echo "<td>"; echo $row['usn']; echo "</td>";
	    	echo "<td>"; echo $row['email']; echo "</td>";
	    	echo "<td>"; echo $row['contact']; echo "</td>";

	    	echo "</tr>";
	    	}	
	    echo "<table>";				
			}
		}
			/*if button is not pressed.*/
		else
		{
		$res=mysqli_query($db,"SELECT firstname,lastname,username,usn,email,contact FROM `student`;");

	    echo "<table class='table table-bordered table-hover'>";
	    echo "<tr style='background-color:#2e964ce6;'>";
	    	//table header
	    		echo "<th>"; echo "First Name"; echo"</th>";
	    		echo "<th>"; echo "Last Name"; echo"</th>";
	    		echo "<th>"; echo "Username"; echo"</th>";
	    		echo "<th>"; echo "USN"; echo"</th>";
	    		echo "<th>"; echo "Email"; echo"</th>";
	    		echo "<th>"; echo "Contact"; echo"</th>";
	    echo"</tr>";
	    
	    while ($row=mysqli_fetch_assoc($res)) 
	    {
	    	echo "<tr>";
	    	echo "<td>"; echo $row['firstname'];  echo "</td>";
	    	echo "<td>"; echo $row['lastname']; echo "</td>";
	    	echo "<td>"; echo $row['username']; echo "</td>";
	    	echo "<td>"; echo $row['usn']; echo "</td>";
	    	echo "<td>"; echo $row['email']; echo "</td>";
	    	echo "<td>"; echo $row['contact']; echo "</td>";
	    	

	    	echo "</tr>";
	    }	
	    echo "<table>";			

		}
	?>

</body>
</html>

