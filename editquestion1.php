<?php include("session.php"); ?>
	<?php include("header.php"); ?>	
            <div id="content">
                <article class="post clearfix">                    
                    <?php include("sidebar.php"); ?>                    
                        <div id="mainContent">

                            
                            <?php
	
                            include("config.php");
                             
                            //Retrieving data from dtabases
                            $qid=$_GET['quesid'];
                            $result = mysqli_query($con,"select * from questionupload where quesid=".$qid);

                            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                              {
                              ?>
                            <form name="input" action="editquestion2.php" method="post">
                                    <table border="1" width="550" height="300"cellspacing="0" cellpadding="0">

                                          <tbody>
                                            <td>
                                             <p>
                                               <label>Survey Name
                                                   <select name="surveyid">
                                                       <option value="">Please Select</option>
                                                       <?php
                                                       include("config.php");
                                                       $sql1 = "select surveytitleid,surveytitle from createsurvey";
                                                       $result1 = mysqli_query($con,$sql1);

                                                       while($row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC))
                                                       {
                                                       ?>
                                                          <option value="<?php echo $row1['surveytitleid'];?>"
                                                              <?php if($row['surveytitleid'] == $row1['surveytitleid'])
                                                                  echo "selected";?>>
                                                              <?php echo $row1['surveytitle'];?>
                                                          </option>
                                                        <?php
                                                        }
                                                       ?>
                                                   </select>
                                               </label>
                                             </p>
                                             <br/> 
                                             
                                             <p>
                                               <label name="Questionid">QuestionTitle        
                                                 <input type="text" name="question" id="question" value="<?php if (!empty($row['questitle'])) 
                                                                                                            {echo $row['questitle'];} ?>"/>
                                                    <input type="hidden" name="quesid" value=<?php echo $qid;?>>                                        
                                               </label>
                                             </p>
                                             <br/>
                                             
                                             <p>
                                               <label>QuestionType
                                                  <select name="mySelectid" id="mySelect" onchange="change_type()">
                                                       <option value="">Please Select</option>
                                                       <option value="1" <?php if($row['type'] == 1) echo "selected";?>>Radio</option>
                                                       <option value="2" <?php if($row['type'] == 2) echo "selected";?>>Checkbox</option>
                                                       <option value="3" <?php if($row['type'] == 3) echo "selected";?>>Text</option>
                                                  </select>
                                                  <p id="quesType">
                                                      <?php if($row['type'] == 1)
                                                        {
                                                      ?>
                                                            <form method="POST">
                                                              <div id="dynamicInput">
                                                                <?php
                                                                for ($i = 1;$i <= $row['count'];$i++)
                                                                //$i=1;
                                                                {?>
                                                                  
                                                                <br>Entry <?php echo $i ?><br><input type="radio" name="myInputs_<?php echo $i; ?>" value="<?php echo $i; ?>">
                                                                <br><input type="text" name="myInputsText_<?php echo $i; ?>" value="<?php echo $row['option' . $i]; ?>">
                                                                
                                                                <?php
                                                                }
                                                                ?>
                                                               </div>
                                                               <input type="button" value="Add another radio entry" onClick="addInput('dynamicInput', <?php echo $row['count']; ?>);">
                                                            </form>
                                                           
                                                        <?php
                                                        }
                                                        ?>
                                                  
                                                  
                                                        <?php if($row['type'] == 2)
                                                        {
                                                      ?>
                                                            <form method="POST">
                                                              <div id="dynamicInput1">
                                                                <?php
                                                                for ($i = 1;$i <= $row['count'];$i++)
                                                                //$i=1;
                                                                {?>
                                                                  
                                                                <br>Entry <?php echo $i ?><br><input type="checkbox" name="myInputs_<?php echo $i; ?>" value="<?php echo $i; ?>">
                                                                <br><input type="text" name="myInputsText_<?php echo $i; ?>" value="<?php echo $row['option' . $i]; ?>">
                                                                
                                                                <?php
                                                                }
                                                                ?>
                                                               </div>
                                                               <input type="button" value="Add another checkbox entry" onClick="addInput('dynamicInput1', <?php echo $row['count']; ?>);">
                                                            </form>
                                                           
                                                        <?php
                                                        }
                                                        ?>
                                                  </p>                                           
                                               </label>
                                             </p>
                                             <br/>
                                             
                                             <p>
                                              <label>
                                               <input type="submit" name="button" id="button" value="Update" />                                                
                                              </label>
                                             </p>
                                             <br/>
                                             
                                            </td>
                                          </tbody>                                

                                    </table>
                                </form>
                               
                              <?php 
                              }
                              ?>                       
                </div>
            </article>
	</div>	
<?php include("footer.php"); ?> 