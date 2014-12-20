<?php include("session.php"); ?>
	<?php include("header.php"); ?>	
            <div id="content">
                <article class="post clearfix">                    
                    <?php include("sidebar.php"); ?>                    
                        <div id="mainContent">
                            
                            
                            
                            
                            <?php
                            include("config.php");
                            
                            $count = 0;
                            
                            $fqid = $_POST['quesid'];               
                            $surveyid=$_POST['surveyid'];
                            $question = $_POST['question'];
                            $type = $_POST['mySelectid'];
                                                     
                            
                            if ($fqid == '')
                             {
                               echo "Question id  is not exist in the server";	 
                             }
                             else
                             {
                             if($question !="")
                               {                               
                           
                                    if(!empty($_POST['myInputsText_1']))
                                    {
                                       $input1 = $_POST['myInputsText_1'];
                                       $lavel1 = 1;
                                       $count++;
                                    } else
                                    {
                                        $input1= '';
                                        $lavel1 = '';
                                    }
                                    if(!empty($_POST['myInputsText_2']))
                                    {

                                        $input2 = $_POST['myInputsText_2'];
                                        $lavel2 = 2;
                                        $count++;
                                    } else
                                    {

                                        $input2 = '';
                                        $lavel2 = '';
                                    }
                                    if(!empty($_POST['myInputsText_3']))
                                    {
                                        $input3 = $_POST['myInputsText_3'];
                                        $lavel3 = 3;
                                        $count++;
                                    } else
                                    {
                                        $input3= '';
                                        $lavel3 = '';
                                    }



                                    $sql = "UPDATE questionupload SET `surveytitleid`='$surveyid',`questitle`='$question',`type`='$type',`option1`='$input1',`label1`='$lavel1',"
                                            . "`option2`='$input2',`label2`='$lavel2',`option3`='$input3',`label3`='$lavel3',`count`='$count' WHERE `quesid`='$fqid' ";
                                    
                                    mysqli_query($con,$sql);

                                    echo "<table border='1' width='550'' height='10' cellspacing='0'' cellpadding='0'>
                                              <tbody>
                                                   <tr>
                                                   <th>Question updated successfully.</th>                                
                                                   </tr>
                                               </tbody>
                                               ";
                                           echo "</table>";

                                    mysqli_close($con);
                               }
                            }                      
                            ?>
                    
         
                </div>
            </article>
	</div>	
<?php include("footer.php"); ?>