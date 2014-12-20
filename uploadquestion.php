<?php include("session.php"); ?>
	<?php include("header.php"); ?>	
            <div id="content">
                <article class="post clearfix">                    
                    <?php include("sidebar.php"); ?>                    
                        <div id="mainContent">
                    
		    
                        <form name="input" action="uploadquestion1.php" method="post">
                             <table border="1" width="550" height="400"cellspacing="0" cellpadding="0">
                                                               
                                   <tbody>
                                     <td>
                                         
                                      <p>
                                          <label>Survey Name&nbsp;
                                            <select name="surveyid">
                                                <option value="">Please Select</option>
                                                <?php
                                                include("config.php");
                                                $sql = "select surveytitleid,surveytitle from createsurvey";
                                                $result = mysqli_query($con,$sql);

                                                while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
                                                {
                                                    echo "<option value=" . $row['surveytitleid'] .">".$row['surveytitle']. "</option>";                                                    
                                                }
                                                ?>
                                            </select>
                                        </label>
                                      </p>
                                      <br/>                                      
                                      <p>
                                          <label name="Questionid">QuestionTitle&nbsp       
                                          <input type="text" name="question" id="question" />
                                        </label>
                                      </p>
                                      <br/>
                                      <p>
                                          <label>QuestionType
                                           <select name="mySelectid" id="mySelect" onchange="change_type()">
                                                <option value="">Please Select</option>
                                                <option value="1" >Radio</option>
                                                <option value="2" >Checkbox</option>
                                                <option value="3" >Text</option>
                                           </select>
                                           <p id="quesType">
                                               <!--<input type="radio" name="question1" id="question1" value="1" />Yes
                                               <input type="radio" name="question1" id="question1" value="2" />No-->
                                           </p>                                           
                                        </label>
                                      </p>
                                      <br/>
                                      <p>
                                       <label>
                                        <input type="submit" name="button" id="button" value="Submit" /> 
                                        <input type="reset" name="reset" id="reset" value="Reset" />
                                       </label>
                                      </p>
                                      <br/>
                                     </td>
                                   </tbody>                                
                                 
                             </table>
                        </form>
		    </div>
            </article>
        </div>	
<?php include("footer.php"); ?>  