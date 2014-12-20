<?php include("session.php"); ?>
	<?php include("header.php"); ?>	
            <div id="content">
                <article class="post clearfix">                    
                    <?php include("sidebar.php"); ?>                    
                        <div id="mainContent">
                         
                         <?php
                            
                            include("config.php");
                        
                            // escape variables for security
                            $title = mysqli_real_escape_string($con, $_POST['surveytitle']);

                            if($title!="")
                            {

                                $sql = "INSERT INTO createsurvey (surveytitle) VALUES ('$title')";
                                $result1 = mysqli_query($con,$sql);
                               
                               echo "<table border='1' width='550'' height='10' cellspacing='0'' cellpadding='0'>
                                  <tbody>
                                       <tr>
                                       <th>Survrey name updated successfully.</th>                                
                                       </tr>
                                   </tbody>
                                   ";
                               echo "</table>";
                            }
                            else {
                                echo "<table border='1' width='550'' height='10' cellspacing='0'' cellpadding='0'>
                                  <tbody>
                                       <tr>
                                       <th>There is a problem in data insert.Please check properly and try again.</th>                                
                                       </tr>
                                   </tbody>
                                   ";
                                echo "</table>";                                
                            }                         

                         mysqli_close($con);
                         echo "<br/>";
                         
                         ?>



                    </div>
            </article>
	</div>	
<?php include("footer.php"); ?>  