<?php include("session.php"); ?>
	<?php include("header.php"); ?>	
            <div id="content">
                <article class="post clearfix">                    
                    <?php include("sidebar.php"); ?>                    
                        <div id="mainContent">

                        <?php
                        include('config.php');
                        
                        $count = 0;
                        
                        $surveyid=$_POST['surveyid'];
                        $question = $_POST['question'];
                        $type = $_POST['mySelectid'];
                                                
                        if($question !=""){
                           
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



                            $sql = "INSERT INTO questionupload (`surveytitleid`,`questitle`,`type`,`option1`,`label1`,`option2`,`label2`,`option3`,`label3`,`count`) VALUES ('$surveyid','$question','$type','$input1','$lavel1','$input2','$lavel2','$input3','$lavel3','$count')";

                            $result1 = mysqli_query($con,$sql);

                            echo "<table border='1' width='550'' height='10' cellspacing='0'' cellpadding='0'>
                                      <tbody>
                                           <tr>
                                           <th>Question created successfully.</th>                                
                                           </tr>
                                       </tbody>
                                       ";
                            echo "</table>";

                            mysqli_close($con);
                        }
                        else{
                            echo "<table border='1' width='550'' height='10' cellspacing='0'' cellpadding='0'>
                                  <tbody>
                                       <tr>
                                       <th>There is a problem in data insert.Please check properly and try again.</th>                                
                                       </tr>
                                   </tbody>
                                   ";
                            echo "</table>";
                        }
                            
                        ?>

                                
                                
                    </div>
            </article>
	</div>	
<?php include("footer.php"); ?>                        
                        