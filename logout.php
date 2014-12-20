<?php 

// Four steps to closing a session
	// (i.e. logging out)

        // 1. Find the session
        session_start();
		
	// 2. Unset all the session variables        
        session_unset();

	//3.Destroy the session
        session_destroy();
		
        // Logged out, return home.
        /*if(!session_is_registered($_SESSION['admin_id']))
        {
            header("location:adminlogin.php");
        }*/
        header("location:adminlogin.php");
        		
?>