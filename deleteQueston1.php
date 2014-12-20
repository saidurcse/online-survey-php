<?php include("session.php"); ?>
	<?php include("header.php"); ?>	
            <div id="content">
                <article class="post clearfix">                    
                    <?php include("sidebar.php"); ?>                    
                        <div id="mainContent">
                            
                            
                            
                            
                            <?php
                            include("config.php");
                            
                            $count = 0;
                            
                            $qid=$_GET['quesid'];
                            $result = mysqli_query($con,"select * from questionupload where quesid=".$qid);
                            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                            {
                        
                            $sql = "DELETE from questionupload WHERE quesid=$qid ";                              
                            mysqli_query($con,$sql);
                            
                            
                            echo "<table border='1' width='550'' height='10' cellspacing='0'' cellpadding='0'>
                                      <tbody>
                                           <tr>
                                           <th>Question deleted successfully.</th>                                
                                           </tr>
                                       </tbody>
                                       ";
                                   echo "</table>";

                            mysqli_close($con);
                             
                            }                      
                            ?>
                    
         
                </div>
            </article>
	</div>	
<?php include("footer.php"); ?>