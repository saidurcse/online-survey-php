<?php include("session.php"); ?>
	<?php include("header.php"); ?>	
            <div id="content">
                <article class="post clearfix">                    
                    <?php include("sidebar.php"); ?>                    
                        <div id="mainContent">
                         
                        <?php
                        include 'config.php';
                        
                        $sql1 = "SELECT * FROM createsurvey";
                        $result = mysqli_query($con,$sql1);

                        echo "<h4>List of all SurveyName and Id</h4>";
                        echo "<table border='1' width='550'' height='10' cellspacing='0'' cellpadding='0'>
                           <tbody>
                                <tr>
                                <th>SurveyID</th>
                                <th>SurveyName</th>
                                </tr>
                            </tbody>
                            ";
                        while($row = mysqli_fetch_array($result,MYSQL_ASSOC))
                        {
                            echo "<tr>";
                            echo "<td>" . $row['surveytitleid'] . "</td>";
                            echo "<td>" . $row['surveytitle'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                      
                        mysqli_close($con);                        

                            
                       ?>

                    </div>
                </article>
            </div>	
<?php include("footer.php"); ?>