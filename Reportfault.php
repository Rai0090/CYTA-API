<?php

require "index.php";
include"includes/submitvaluesReportfault.php"
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Report fault</title>

</head>
<body>

<header>
    <nav>
        <div class="left">
            <form id="myForm1" action="includes/submitvaluesReportfault.php" method="post">
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
                        <td align="right">fault_type</td>
                        <td align="left"> <select name="fault_type" id="fault_type" class="select1">

                                <option value="1">1 - ΑΔΕΣΜΟΠΟΙΗΤΗ ΠΡΟΣΒΑΣΗ ΣΤΟΝ ΤΟΠΙΚΟ ΒΡΟΧΟ</option>
                                <option	value="5">5 - ΧΟΝΔΡΙΚΗ ΕΥΡΥΖΩΝΙΚΗ ΠΡΟΣΒΑΣΗΣ</option>
                                <option	value="6">6 - ΧΟΝΔΡΙΚΗ ΕΝΟΙΚΙΑΣΗ ΓΡΑΜΜΩΝ</option>

                    </tr>
                    <tr>
                        <td align="right">Representative_Name</td>
                        <td align="left"><input type="text" name="Representative_Name" id="Representative_Name" required /></td>
                    </tr>
                    <tr>
                        <td align="right">exchange_name</td>
                        <td align="left"><input type="text" name="exchange_name" id="exchange_name" /></td>
                    </tr>

                    <tr>
                        <td align="right">service_number</td>
                        <td align="left"><input type="text" name="service_number" id="service_number" required /></td>
                    </tr>
                    <tr>
                        <td align="right">street</td>
                        <td align="left"><input type="text" name="street" id="street" /></td>
                    </tr>
                    <tr>
                        <td align="right">street_number</td>
                        <td align="left"><input type="text" name="street_number" id="street_number" /></td>
                    </tr>
                    <tr>
                        <td align="right">flat_number</td>
                        <td align="left"><input type="text" name="flat_number" id="flat_number" /></td>
                    </tr>
                    <tr>
                        <td align="right">building_name</td>
                        <td align="left"><input type="text" name="building_name" id="building_name" /></td>
                    </tr>
                    <tr>
                        <td align="right">post_code</td>
                        <td align="left"><input type="text" name="post_code" id="post_code" /></td>
                    </tr>
                    <tr>
                        <td align="right">community</td>
                        <td align="left"><input type="text" name="community" id="community" /></td>
                    </tr>
                    <tr>
                        <td align="right">district</td>
                        <td align="left"> <select name="product_serial" id="product_serial" class="select1">

                                <option value="1">Λευκωσία</option>
                                <option	value="2">Λεμεσός</option>
                                <option	value="3">Λάρνακα</option>
                                <option	value="4">Πάφος</option>

                    </tr>
                    <tr>
                        <td align="right">description</td>
                        <td align="left"><input type="text" name="description" id="description" required /></td>
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