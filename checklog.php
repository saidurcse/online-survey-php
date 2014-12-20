<?php session_start(); ?>

<?php
   $host="localhost"; // Host name 
   $username="root"; // Mysql username
   $password=""; // Mysql password  
   $db_name="survey"; // Database name
   $tbl_name="admin"; // Table name 
   

    $con=mysqli_connect($host, $username, $password,$db_name)or die("cannot   connect");

	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
  // username and password sent from here 
  $myusername=$_POST['id']; 
  $mypassword=$_POST['pass']; 
  
  $sql="select * from $tbl_name where name='$myusername' and password='$mypassword'";
  $result=mysqli_query($con,$sql);
  $count=mysqli_num_rows($result);
  
  
  // If result matched $myusername and $mypassword, table row must be 1 row
  if($count==1)
  {
	  // store session data
	  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $_SESSION['admin_id']= $row['admin_id'] ;
	  header("location:uploadquestion.php");
  }
  else 
  {
	header("location:adminlogin.php");
  }
  
?>
