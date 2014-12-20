<?php include("session.php"); ?>
	<?php include("header.php"); ?>	
            <div id="content">
                <article class="post clearfix">                    
                    <?php include("sidebar.php"); ?>                    
                        <div id="mainContent">

                                         
                        <?php

                        include 'config.php';

                        $result = mysqli_query($con,"select quesid,questitle from questionupload");

                        echo "<h4>Edit Question</h4>";
                        echo "<table border='1' width='550' height='10' cellspacing='0' cellpadding='0'>
                               <tbody>
                                    <tr>
                                    <th></th>
                                    <th>QuestionID</th>
                                    <th>Question</th>
                                    </tr>
                                </tbody>
                                ";

                        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                          {
                              echo "<tr>";
                              echo "<td>";
                              echo "<a href='deleteQueston1.php?quesid=".$row['quesid']."'>" . " <input type='button' value='Delete Question'>  </a>";
                              echo "</td>";
                              echo "<td>" . $row['quesid'] . "</td>";
                              echo "<td>" . $row['questitle'] . "</td>";
                              echo "</tr>";

                          }
                        echo "</table>";

                        ?>

                </div>
            </article>
	</div>	
<?php include("footer.php"); ?> 