<?php

require "index.php";
require "includes/submitvaluesMAC_AddressesPS.php"
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>MAC_AddressesPS</title>

</head>

<body>
<header>
    <nav>
        <div class="left">
            <form id="myForm1" action="includes/submitvaluesMAC_AddressesPS.php" method="post">
                <table style="float: left;">
                    <tr>
                        <td align="right">InCircuitNumber</td>
                        <td align="left"><input type="text" name="InCircuitNumber" id="InCircuitNumber"required /></td>
                    </tr>



                    <tr>
                        <td> </td>
                        <td align="left"><button  id="buttontest1"  value="Submit"  class="button1" />Submit</td>
                    </tr>
                    <tr>
                        <td> </td>
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
<script>
  document.getElementsByClassName('OSB-382520')[0].style.display = "none";  
</script>