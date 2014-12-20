<?php include("session.php"); ?>
	<?php include("header.php"); ?>	
            <div id="content">
                <article class="post clearfix">                    
                    <?php include("sidebar.php"); ?>                    
                        <div id="mainContent">

                                         
            <?php

            include 'config.php';


            $result = mysqli_query($con,"select * from questionupload");

            echo "<h4>View Question</h4>";
            echo "<table border='1' width='550' height='10' cellspacing='0' cellpadding='0'>
                   <tbody>
                        <tr>
                        <th>QuestionID</th>
                        <th>SurveyTitleId</th>
                        <th>QuestionName</th>
                        <th>Type of Question</th>
                        </tr>
                    </tbody>
                    ";

            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
              {
                    echo "<tr>";                    
                    echo "<td>" . $row['quesid'] . "</td>";
                    echo "<td>" . $row['surveytitleid'] . "</td>";
                    echo "<td>" . $row['questitle'] . "</td>";
                    echo "<td>" . $row['type'] . "</td>";                     
                    echo "</tr>";

              }
            echo "</table>";

            ?>

                </div>
            </article>
        </div>	
<?php include("footer.php"); ?> 