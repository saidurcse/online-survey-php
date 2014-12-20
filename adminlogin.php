<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<!-- disable iPhone inital scale -->
<meta name="viewport" content="width=device-width; initial-scale=1.0">

<title>ABCD Test Survey Website</title>

<!-- main css -->
<link href="css/style.css" rel="stylesheet" type="text/css">


<!-- html5.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->



</head>

<body>

<div id="pagewrap">

	<header id="header">

		<hgroup>
			<h1 id="site-logo"><a href="#">ABCD Test Survey Website</a></h1>
			<h2 id="site-description"></h2>
		</hgroup>
		<nav>
			<ul id="main-nav" class="clearfix">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="surveyIdInsert.php">Survey</a></li>			    
                            <li><a href="adminlogin.php">Admin</a></li>
                            <li><a href="about.php">About</a></li>
			</ul>			
		</nav>
		
	</header>

	
	<div id="content">

		<article class="post clearfix">

			<header>
				<h1 class="post-title"><a href="#">Welcome to Admin login page</a></h1>				
			</header>			
			
			<p class="post1"></p>
			<p class="post1"></p>
			<p class="post1"></p>
			<p class="post1"></p>
			
			
			<form action="checklog.php" method="post">
			  <div id="form1">
			  					  
					  <p>Username
						<input type="text" name="id" id="id" tabindex="10" />
					  </p>
					  <p>Password					  
						   <input type="password" name="pass" id="pass" tabindex="10" />
					  </p>
					  <p>					
						 <input type="submit" name="signin" id="signin" value="SignIn" />
					  </p>
                                          
                                          <!--<p><a href="index.php">HOME</a></p>-->                                        
                                          
                                         
			  </div>  
			</form>

                     

		</article>

	</div>
	
	<footer id="footer">	
		<p>@SRBD CSC TG</p>
	</footer>
	
</div>

</body>
</html>