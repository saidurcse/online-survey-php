<?php session_start();?>

<?php
 $type= $_POST['type'];
if($type==1)
{?>
    <!-- <input type="radio" name="question1" id="question1" value="1" />Yes
    <input type="radio" name="question1" id="question1" value="2" />No-->

    <form method="POST">
        <div id="dynamicInput">
            Entry 1<br><input type="radio" name="myInputs_1" value="1">
            <br><input type='text' name='myInputsText_1'>
        </div>
        <input type="button" value="Add another radio entry" onClick="addInput('dynamicInput', 1);">
    </form>

<?php }
if($type==2)
{?>
    <!--<input type="checkbox" name="question3" id="question3" value="2" />Hello1-->
    <form method="POST">
        <div id="dynamicInput1">
            Entry 1<br><input type="checkbox" name="myInputs_1" value="1">
            <br><input type='text' name='myInputsText_1'>
        </div>
        <input type="button" value="Add another checkbox entry" onClick="addInput1('dynamicInput1', 1);">
    </form>

<?php }

if($type==3)
{?>

    <form method="POST">
        <div id="dynamicInput3">
            <!--Entry 1<br><input type="text" name="myInputs3">-->
        </div>
        <!--<input type="button" value="Add another text input" onClick="addInput3('dynamicInput3');">-->
    </form>

<?php }
?>