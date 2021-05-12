<?php

require "index.php";
require "includes/submitvaluesPepTestPS.php"
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Pep Test</title>

</head>

<body>
<header>
    <nav>
        <div class="left">
            <form id="myForm1" action="includes/submitvaluesPepTestPS.php" method="post">
                <table style="float: left;">
                    <tr>
                        <td align="right">TestCct</td>
                        <td align="left"><input type="text" name="TestCct" id="TestCct"required /></td>
                    </tr>



                    <tr>
                        <td </td>
                        <td align="left"><button  id="buttontest1"  value="Submit"  class="button1" />Submit</td>
                    </tr>
                    <tr>
                        <td </td>
                        <td align="left"><span id="result"></span></td>
                    </tr>


                </table>


            </form>



        </div>


    </nav>
</header>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $("#buttontest1").click(function(){
        $.post ($("#myForm1").attr("action"),  $("#myForm1").serializeArray(), function(info) {$("#result").html(info);});
        //document.getElementById('fright1').style.display="block"



    });
    $("#myForm1").submit( function() {

        return false;
    });

</script>
