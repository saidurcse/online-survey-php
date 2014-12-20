<?php include("session.php"); ?>
	<?php include("header.php"); ?>	
            <div id="content">
                <article class="post clearfix">                    
                    <?php include("sidebar.php"); ?>                    
                        <div id="mainContent">
                            
            <div id="survey_result">
            <?php
            
            include 'config.php';
            
            $surveyid=$_POST['surveyid'];        
            $result2 = mysqli_query($con,"select * from surveyresult");
            $total_number_rows2 = mysqli_num_rows($result2);
            
            echo "<table border='1' width='550'' height='10' cellspacing='0'' cellpadding='0'>
               <tbody>
                    <tr>
                    <th>Survey Result of  " .$surveyid. "  (Total participants " .$total_number_rows2. ")</th><br>                     
                    </tr>
                </tbody>
                ";    
            echo "</table>";
            echo "<br>";
            

            //$result1 = mysqli_query($con,"select * from questionupload");
            //$total_number_rows1 = mysqli_num_rows($result1);
            $sql = 'SELECT distinct (questionupload.quesid),  questionupload.questitle , surveyresult.*
                       FROM questionupload
                       LEFT JOIN surveyresult
                       ON questionupload.surveytitleid=surveyresult.surveytitleid
                       ORDER BY surveyresult.guestId';
            $retval = mysqli_query($con,$sql);
            
            echo "<table border='1' width='550' height='10' cellspacing='0' cellpadding='0'>
                   <tbody>
                        <tr>
                        <th>QuestionID</th>
                        <th>SurveyID</th>
                        <th>SurveyTitle</th>
                        <th>Option 1</th>
                        <th>Option 2</th>
                        <th>Option 3</th>
                        </tr>
                    </tbody>
                    ";

            while($row = mysqli_fetch_array($retval, MYSQL_ASSOC))
              {
                    echo "<tr>";                    
                    echo "<td>" . $row['quesid'] . "</td>";
                    echo "<td>" . $row['surveytitleid'] . "</td>";
                    echo "<td>" . $row['questitle'] . "</td>";
                    echo "<td>" . $row['ans1'] . "</td>";
                    echo "<td>" . $row['ans2'] . "</td>";
                    echo "<td>" . $row['ans3'] . "</td>";
                    echo "</tr>";
              
              }
            echo "</table>";
            
            mysqli_close($con);
            ?>           
            </div>     
          
                </div>
            </article>
	</div>	
<?php include("footer.php"); ?>