
<?php

require "index.php";
require "includes/submitvaluesGetorderinfo.php"
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Cancel Order</title>

</head>

<body>
<header>
    <nav>
        <div class="left">
            <form id="myForm1" action="includes/submitvaluesGetorderinfo.php" method="post">
                <table style="float: left;">
                    <tr>
                        <td align="right">username</td>
                        <td align="left"><input type="text" name="username" id="username" value="Logosnet" /></td>
                    </tr>
                    <tr>
                        <td align="right">password</td>
                        <td align="left"><input type="text" name="password" id="password" value="UP132HL6N4" /></td>
                    </tr>
                    <tr>
                        <td align="right">order_reference_number</td>
                        <td align="left"><input type="text" name="order_reference_number" id="order_reference_number" /></td>

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