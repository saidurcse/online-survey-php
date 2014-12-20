<?php

session_start();
if(isset($_SESSION['admin_id']))
    echo "";
else
    header("location:adminlogin.php");
?>


<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    
    <meta charset="utf-8">
    <!-- disable iPhone inital scale -->
    <meta name="viewport" content="width=device-width; initial-scale=1.0">

    <title>SRBD Test Survey Website</title>
    
    
    
    

    <!-- main css -->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
    <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">-->
    
    <script type="text/javascript" src="js/ques.js"></script>
    <style type="text/css" class="init"></style>
    <script type="text/javascript" language="javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
    <!--<script type="text/javascript" language="javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/bootstrap.min.js"></script>-->    


    <script type="text/javascript" language="javascript" class="init">

        $(document).ready(function() {
            $('#example').dataTable( {
                "pagingType": "full_numbers"
            } );
        } );

    </script>
    
    <!-- html5.js for IE less than 9 -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
</head>
