<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<!-- disable iPhone inital scale -->


<title>ABCD Test Survey Website</title>

<!-- main css -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<!-- main javascript -->
<!--<script type="text/javascript" src="/limesurvey/third_party/jquery/jquery-1.11.1.min.js"></script>  -->
<script type="text/javascript" src="js/ques.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<!-- html5.js for IE less than 9 -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<script type="text/javascript">

    function show()
    {
        
        var count = $('#count_number').html();

        var number_question = $('#question_count_number').html();

        if(count == number_question-1)
        {
            $('#next_question').hide();
            $('#submit_question').show();

        }

        var gest_id = <?php echo $_GET['id']?>;
        var survey_id = $('#survey_id').html();
        var ques_id = $('#ques_id').html();


        if ($("#myInputs_Radio_"+count).hasClass("radio_"+count)) {

           var text =  $('input[name=myInputs_Radio_'+count+']:checked').val();

            $.post('insert_question.php',{var_survey_value:text,gest_id:gest_id,number_question:count,survey_title_id:survey_id,ques_id:ques_id},function(data)
             {
              //console.log(data);
             }
           )
        }
       else if($("#text_"+count).hasClass("text"))
        {
            var text =  $("#text_"+count).val();
            $.post('insert_question.php',{var_survey_value:text,gest_id:gest_id,number_question:count,survey_title_id:survey_id,ques_id:ques_id},function(data)
             {
                // console.log(data);
             }
           )
        }
        else
        {
            var areaofinterest = [];
            $('.checkbox_'+count+':checked').each(function(i,e) {
                areaofinterest.push(e.value);
            });

            text = areaofinterest.join('~~');


            $.post('insert_question.php',{var_survey_value:text,gest_id:gest_id,number_question:count,survey_title_id:survey_id,ques_id:ques_id},function(data)
                {
                   // console.log(data);
                }
            )
        }

        for(i=1;i<number_question;i++)
        {
            $('#question_number_'+i).hide();
            $('#ans_number_'+i).hide();
        }
        var new_count = parseInt(count, 10)+1;

        $('#count_number').html(new_count);

        $('#question_number_'+new_count).show();
        $('#ans_number_'+new_count).show();

        if(count == number_question)
        {
            alert("Thank you for attending the survey.");
            window.location.href="index.php";

        }
    }
    
</script>


</head>


<body>   
    

<div id="pagewrap">


    <div id="survey">

    <header class="headerSurvey">
        <h1><center> Welcome to ABCD Survey</center></h1>
    </header>

    <div id="count_number" style="display: none">1</div>


    <div class="tableSurvey">
        <table width="600" height="280" border="1" cellpadding="2">
            <!-- Code for retrieving  data from database and handling for showing data in survey page-->
            <?php
            include("config.php");
            
            
            
            $guestid = $_GET['id'];
            $surve_id_value = $_GET['survey_id_value'];
            $guest_insert = mysqli_query($con,"INSERT INTO surveyresult (`guestId`) VALUES ('$guestid')");

            //Check existence of survey id and insert only for first time
            $ex = "SELECT * FROM result_store WHERE surveytitleid=".$surve_id_value;
            echo $ex;
            $st=mysqli_query($con,$ex);
            $cn = mysqli_num_rows($st);
            if($cn==0)
            {
                mysqli_query($con,"INSERT INTO result_store (`surveytitleid`) VALUES('$surve_id_value')");
            }

            $sql = "SELECT * FROM questionupload WHERE surveytitleid=".$surve_id_value;
            $result = mysqli_query($con,$sql);
            
            $count_number = 0;
            $total_number_question = mysqli_num_rows($result);
             

            //Retrieving data from dtabases
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                
            $survey_id_save = $row['surveytitleid'];
                
            $count_number++;
            if($count_number==1)
            {
                $display = "block";
                $display1 = "block";
            } else
            {
                $display = "none";
                $display1 = "none";
            }
           ?>
            <tr id="question_number_<?php echo $count_number;?>" style="display: <?php echo $display;?>">
                <?php
                echo "<td width='600' height='80'> <h4> Question:   {$count_number} </h4> ";
                echo $row['questitle'];
                echo "</td>";
                ?>
            </tr>
            <tr id="ans_number_<?php echo $count_number;?>" style="display: <?php echo $display1;?>">
              <td width="600" height="200" id="number_<?php echo $count_number;?>">


                      <?php if($row['type'] == 1)
                      {
                      ?>
                        <?php
                          for ($i = 1;$i <= $row['count'];$i++)
                          {
                         ?>
                              <input type="radio" class="radio_<?php echo $count_number;?>" name="myInputs_Radio_<?php echo $count_number;?>" id="myInputs_Radio_<?php echo $count_number;?>" value="<?php echo $row['option' . $i];?>">
                              <?php echo $row['option' . $i]; ?>
                              <br>
                              <br>
                        <?php
                          }
                       }
                      ?>


                  <?php if($row['type'] == 2)
                  {
                      ?>
                      <?php
                      for ($i = 1;$i <= $row['count'];$i++)
                      {?>
                          <br><input type="checkbox" class="checkbox_<?php echo $count_number;?>" name="myInputs_Checkbox<?php echo $i; ?>" value="<?php echo $row['option' . $i];?>">
                          <?php echo $row['option' . $i]; ?>
                          <br>
                          <br>
                      <?php
                      }
                  }
                  ?>
                  <?php if($row['type'] == 3)
                  {
                  ?>
                      <input type="text" class="text" name="myInputs_3" id="text_<?php echo $count_number;?>" value="">
                      <br>
                  <?php
                  }
                  ?>
                  <div id="ques_id" style="display: none"><?php echo $row['quesid'];?></div>
              </td>              
              <?php  
              }
              ?>
            </tr>

        </table>
        <!--end of table-->
    </div>
	<!-- end of div id tableSurvey -->
        <div id="question_count_number" style="display: none"><?php echo $total_number_question;?></div>
        <div id="survey_id" style="display: none"><?php echo $survey_id_save;?></div>


    <div class="nextQuestion">
        <?php
/*        if($row['type'] == 1)
        {
        */?><!--
            <input type="radio" name="myInputs_Radio" value="<?php /*echo $i; */?>" checked="checked">
        --><?php
/*            if(isset($_POST['myInputs_Radio']) && !empty($_POST['myInputs_Radio'])){
                $radioContent= $_POST['myInputs_Radio'];
            }
            $sql3 = "INSERT INTO surveyresult (`ans1`)VALUES('$radioContent')";
            $result3 = mysqli_query($sql3,$con);
        }
        */?>
        <!-- For "Next Button" code -->
        <div id="next_question">
            <input type="submit" name="next" id="next" value="NextQuestion" onclick="show()" />
        </div>
        <div id="submit_question" style="display: none">
                <input type="submit" name="next" id="next" value="End Survey" onclick="show()" />
        </div>

    </div>
	<!--end of div id nextQuestion-->

    </div>
	<!--end of div id survey-->


    <footer id="footer">	
      <p>@SRBD CSC TG</p>
    </footer>
	
</div>

</body>
</html>