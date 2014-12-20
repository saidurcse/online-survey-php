<?php include("session.php"); ?>
	<?php include("header.php"); ?>	
            <div id="content">
                <article class="post clearfix">                    
                    <?php include("sidebar.php"); ?>                    
                        <div id="mainContent">
                            
                            
                            <form name="input" action="viewSurveyResult1.php" method="post">
                             <table border="1" width="550" height="400"cellspacing="0" cellpadding="0">
                                                               
                                   <tbody>
                                     <td>
                                         
                                      <p>
                                        <label>Select Survey Name&nbsp;
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
                                            <input type="submit" name="button" id="button" value="Show Survey Result" />
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