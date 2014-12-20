<?php include("session.php"); ?>
<?php include("header.php"); ?>
    <div id="content">
        <article class="post clearfix">
            <?php include("sidebar.php"); ?>
            <div id="mainContent">

                <?php
                include 'config.php';

                //Retrieving data from dtabases
                $qid=$_GET['surveytitleid'];
                $result = mysqli_query($con,"select * from createsurvey where surveytitleid=".$qid);

                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                {
                        if($row['activeDeactive']==1)
                        {
                            $sql1 = "UPDATE createsurvey SET activeDeactive = 0 WHERE surveytitleid=$qid ";
                            mysqli_query($con,$sql1);
                        }
                        echo "<table border='1' width='550'' height='10' cellspacing='0'' cellpadding='0'>
                                      <tbody>
                                           <tr>
                                           <th>Survey Deactivated Successfully.</th>                                
                                           </tr>
                                       </tbody>
                                       ";
                        echo "</table>";
                }
                mysqli_close($con);


                ?>

            </div>
        </article>
    </div>
<?php include("footer.php"); ?>