<?php session_start();?>
<?php
include("config.php");

if(isset($_POST['signin']))
{

$guestid = $_POST['id'];
$surv_id = $_POST['survey_id_value'];

$sql10 = "SELECT * FROM surveyresult where guestId = '$guestid'";
$result10 = mysqli_query($con,$sql10);
$guestid_exist = mysqli_num_rows($result10);


if(!$guestid_exist)
{
    $sql1 = "INSERT INTO surveyresult (`guestId`) VALUES ('$guestid')";
    $result1 = mysqli_query($con,$sql1);
    echo "<script>
        window.location.href='survey.php?id=$guestid & survey_id_value=$surv_id';
    </script>";

}
else
{
    ?>
    <script>
        alert('You have already completed the survey.');
    </script>";

<?php }
}
?>

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

    <script>

        function check()
        {
            x = document.getElementById('tid').value;
            
            if(document.getElementById('tid').value=="")
            {
                alert ("Please Enter GenId and Proceed...");
                return false;
            }
            else if(isNaN(x))
            {
                alert("Please enter proper GenId and Proceed...");
                return false;
            }   
            
            return true;
        }

    </script>



    <!-- html5.js for IE less than 9 -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->



</head>


<body>


<div id="pagewrap">


    <div id="survey">

        <header class="headerSurvey">
            <h1><center> Welcome to ABCD Survey</center></h1>
        </header>
        <?php

        $survey_id_check_query= "select * from  createsurvey WHERE activeDeactive = 1 ";
        $survey_id_check = mysqli_query($con,$survey_id_check_query);

        while($row1 = mysqli_fetch_array($survey_id_check,MYSQL_ASSOC))
        {
            $survey_id_value_save = $row1['surveytitleid'];
        }

        ?>

        <div id="form2">
            <form action="" method="post">
                <p>GenId
                    <input type="text" name="id" id="tid" tabindex="10""/>
                </p>
                <p>
                    <input type="hidden" name="survey_id_value" value="<?php echo $survey_id_value_save ?>"/>
                    <input type="submit" name="signin" id="signin" value="SignIn" onclick="return check();"/>
                </p>
            </form>
        </div>

    </div>
    <!--end of div id survey-->


    <footer id="footer">
        <p>@SRBD CSC TG</p>
    </footer>

</div>

</body>
</html>