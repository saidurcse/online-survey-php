function change_type()
{
    var type = $('#mySelect').val();
    $.post('change_type.php',{type: type},function(data)
    {
        $('#quesType').html(data);
    })
}
var counter = 1;
var limit = 3;
function addInput(divName, ques_count){
   var new_value = ques_count+1;
    if (new_value > limit || counter== limit)  {
        alert("You have reached the limit of adding " + counter + " inputs");
    }
    else {
        if(counter>=new_value) new_value=counter+1;
        var newdiv = document.createElement('div');
        newdiv.innerHTML = "Entry " + (new_value) + " <br><input type='radio' value='"+new_value+"' name='myInputs_"+new_value+"'>" + "<br><input type='text' name='myInputsText_"+new_value+"'>";
        document.getElementById(divName).appendChild(newdiv);
        counter=new_value;
    }
}

var counter1 = 1;
var limit1 = 3;
function addInput1(divName, ques_count){
    var new_value = ques_count+1;
    if (new_value > limit1 || counter1== limit1)  {
        alert("You have reached the limit of adding " + counter1 + " inputs");
    }
    else {
        if(counter1>=new_value) new_value=counter1+1;
        var newdiv = document.createElement('div');
        newdiv.innerHTML = "Entry " + (new_value) + " <br><input type='checkbox' value='"+new_value+"' name='myInputs_"+new_value+"'>" + "<br><input type='text' name='myInputsText_"+new_value+"'>";
        document.getElementById(divName).appendChild(newdiv);
        counter1=new_value;
    }
}
/*
var counter = 1;
var limit = 3;
function addInput3(divName){
    if (counter == limit)  {
        alert("You have reached the limit of adding " + counter + " inputs");
    }
    else {
        var newdiv = document.createElement('div');
        newdiv.innerHTML = "Entry " + (counter + 1) + " <br><input type='text' name='myInputs3[]'>";
        document.getElementById(divName).appendChild(newdiv);
        counter++;
    }
}
*/