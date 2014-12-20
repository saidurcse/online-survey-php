<?php session_start();?>
<?php

            include("config.php");

            $var_survey_value = $_POST['var_survey_value'];
            $gust_id = $_POST['gest_id'];
            $number_question = $_POST['number_question'];
            $survey_title_id = $_POST['survey_title_id'];
            $ques_id = $_POST['ques_id'];
            
            $cname = "ans" . $number_question;
            //Function Adding Section
            function AddColumn($cname,$con) {
                //Column check whether column exists or not
                $result2 = mysqli_query($con,"SHOW COLUMNS FROM `surveyresult` LIKE '%{$cname}'");
                $exists = (mysqli_num_rows($result2))?1:0;

                if($exists == 0)
                {
                    mysqli_query($con,"ALTER TABLE `surveyresult` ADD ".$cname." varchar(250)");
                }

            }
            function AddColumn_store($cname,$ques_id,$survey_title_id,$con) {
                //Column check whether column exists or not
                $result2 = mysqli_query($con,"SHOW COLUMNS FROM `result_store` LIKE '%{$cname}'");
                $exists = (mysqli_num_rows($result2))?1:0;

                if($exists == 0)
                {
                    mysqli_query($con,"ALTER TABLE `result_store` ADD ".$cname." varchar(250)");

                    $data1 = ("select * from questionupload where quesid=".$ques_id);
                    echo $data1;
                    $retval1 = mysqli_query($con,$data1);
                    var_dump($retval1) ;
                    //die();
                    while($row1 = mysqli_fetch_array($retval1,MYSQL_ASSOC))
                    {
                        $str="";
                        for($i=1;$i<=$row1['count'];$i++)
                        {
                            $str .= $row1['option'. $i] ."~0";
                            if($i!=$row1['count'])
                                $str .= "#";

                        }
                        print_r($str);
                        mysqli_query($con,"UPDATE result_store SET $cname = '".$str."' WHERE surveytitleid = $survey_title_id");
                    }
                }

            }
            //Need to send one column name every time when I press next button
            AddColumn("$cname",$con);
            AddColumn_store($cname,$ques_id,$survey_title_id,$con);



            $sql = "UPDATE surveyresult SET $cname = '".$var_survey_value."',`surveytitleid`='$survey_title_id' WHERE guestId = $gust_id";
            $result = mysqli_query($con,$sql) or die(mysql_error());

?>
                           
