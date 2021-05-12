<?php

require "index.php";
require "includes/submitvaluesCancelorder.php"
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
            <form id="myForm1" action="includes/submitvaluesCancelorder.php" method="post">
                <table style="float: left;">
                    <tr>
                        <td align="right">username</td>
                        <td align="left"><input type="text" name="username" id="username" value="Logosnet"  /></td>
                    </tr>
                    <tr>
                        <td align="right">password</td>
                        <td align="left"><input type="text" name="password" id="password" value="UP132HL6N4"  /></td>
                    </tr>
                    <tr>
                        <td align="right">product_category</td>
                        <td align="left"> <select name="product_category" id="product_category" class="select1">

                                <option value="BIT">BIT</option>
                                <option	value="CN">CN</option>


                            </select></td>
                    </tr>
                    <tr hidden>
                        <td align="right">product_serial</td>
                        <td align="left"> <select name="product_serial" id="product_serial" class="select1">

                                <option value="1">1 - ΠΡΟΣΩΡΙΝΗ ΑΠΟΣΥΝΔΕΣΗ ΥΠΗΡΕΣΙΑΣ BITSTREAM</option>
                                <option	value="2">2 - ΕΠΑΝΑΣΥΝΔΕΣΗ ΥΠΗΡΕΣΙΑΣ</option>
                                <option	value="14">14 - ΤΕΡΜΑΤΙΣΜΟΣ ΥΠΗΡΕΣΙΑΣ ADSL3</option>
                                <option	value="24">24 -ΠΑΡΟΧΗ ΕΝΙΣΧΥΜΕΝΗΣ ΤΑΧΥΤΗΤΑΣ ΑΠΟΣΤΟΛΗΣ 4M ΣΕ VDSL (ΟΠΟΥ ΕΙΝΑΙ ΤΕΧΝΙΚΑ ΕΦΙΚΤΟ)</option>
                                <option	value="34">34 - ΠΑΡΟΧΗ ΕΝΙΣΧΥΜΕΝΗΣ ΤΑΧΥΤΗΤΑΣ ΑΠΟΣΤΟΛΗΣ 4M ΔΙΑΤΗΡΩΝΤΑΣ ΤΗΝ ΥΦΙΣΤΑΜΕΝΗ ΤΕΧΝΟΛΟΓΙΑ ΜΕΤΑΔΟΣΗΣ</option>
                                <option	value="35">35 - ΤΕΡΜΑΤΙΣΜΟΣ ΠΡΟΙΟΝΤΟΣ xDSL 3 ΕΝΙΣΧΥΜΕΝΗΣ ΤΑΧΥΤΗΤΑΣ ΑΠΟΣΤΟΛΗΣ</option>
                                <option	value="37">37 - ΠΑΡΟΧΗ ΕΝΙΣΧΥΜΕΝΗΣ ΤΑΧΥΤΗΤΑΣ ΑΠΟΣΤΟΛΗΣ 8M  (ΟΠΟΥ ΕΙΝΑΙ ΤΕΧΝΙΚΑ ΕΦΙΚΤΟ)</option>
                                <option	value="38">38 - ΠΑΡΟΧΗ ΔΕΥΤΕΡΗΣ ΓΡΑΜΜΗΣ ΜΕ ΤΕΧΝΟΛΟΓΙΑ BONDING (ΟΠΟΥ ΕΙΝΑΙ ΤΕΧΝΙΚΑ ΕΦΙΚΤΟ)</option>
                                <option	value="39">39 - ΤΕΡΜΑΤΙΣΜΟΣ ΔΕΥΤΕΡΗΣ ΓΡΑΜΜΗΣ ΤΕΧΝΟΛΟΓΙΑΣ BONDING</option>
                                <option	value="75">75 - ΤΕΡΜΑΤΙΣΜΟΣ ΥΠΗΡΕΣΙΑΣ NAKED ADSL3</option>
                                <option	value="129">129 - ΠΡΟΣΩΡΙΝΗ ΑΠΟΣΥΝΔΕΣΗ ΥΠΗΡΕΣΙΑΣ NAKED DSL</option>
                                <option	value="130">130 - ΕΠΑΝΑΣΥΝΔΕΣΗ ΥΠΗΡΕΣΙΑΣ NAKED DSL</option>

                                <option	value="500">500 - ΠΑΡΟΧΗ NAKED xDSL 3 Home 5000/800 ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="501">501 - ΠΑΡΟΧΗ NAKED xDSL 3 Home 10000/800 ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="544">544 - ΠΑΡΟΧΗ NAKED xDSL 3 Home 16000/800 ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="502">502 - ΠΑΡΟΧΗ NAKED xDSL 3 Home 20000/800 ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="503">503 - ΠΑΡΟΧΗ NAKED VDSL 3 Home 30000/1024 ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="545">545 - ΠΑΡΟΧΗ NAKED VDSL 3 Home 40000/1024 ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="504">504 - ΠΑΡΟΧΗ NAKED VDSL 3 Home 50000/4096 ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="505">505 - ΠΑΡΟΧΗ NAKED VDSL 3 Home 80000/4096 ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="560">560 - ΠΑΡΟΧΗ NAKED VDSL 3 Home 100000/4096 ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="506">506 - ΠΑΡΟΧΗ NAKED xDSL 3 Office 10000/1024 ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="546">546 - ΠΑΡΟΧΗ NAKED xDSL 3 Office 16000/1024 ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="507">507 - ΠΑΡΟΧΗ NAKED xDSL 3 Office 20000/1024 ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="508">508 - ΠΑΡΟΧΗ NAKED VDSL 3 Office 30000/2048 ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="547">547 - ΠΑΡΟΧΗ NAKED VDSL 3 Office 40000/2048 ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="509">509 - ΠΑΡΟΧΗ NAKED VDSL 3 Office 50000/8000 ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="510">510 - ΠΑΡΟΧΗ NAKED VDSL 3 Office 100000/8000 ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>

                                <option	value="511">511 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ xDSL 3 Home 5000/800</option>
                                <option	value="512">512 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ xDSL 3 Home 10000/800</option>
                                <option	value="548">548 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ xDSL 3 Home 16000/800</option>
                                <option	value="513">513 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ xDSL 3 Home 20000/800</option>
                                <option	value="514">514 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ VDSL 3 Home 30000/1024</option>
                                <option	value="549">549 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ VDSL 3 Home 40000/1024</option>
                                <option	value="515">515 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ VDSL 3 Home 50000/4096</option>
                                <option	value="516">516 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ VDSL 3 Home 80000/4096</option>
                                <option	value="561">561 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ VDSL 3 Home 100000/4096</option>
                                <option	value="517">517 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ xDSL 3 Office 10000/1024</option>
                                <option	value="550">550 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ xDSL 3 Office 16000/1024</option>
                                <option	value="518">518 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ xDSL 3 Office 20000/1024</option>
                                <option	value="519">519 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ VDSL 3 Office 30000/2048</option>
                                <option	value="551">551 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ VDSL 3 Office 40000/2048</option>
                                <option	value="520">520 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ VDSL 3 Office 50000/8000</option>
                                <option	value="521">521 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ VDSL 3 Office 100000/8000</option>

                                <option	value="522">522 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED xDSL 3 Home 5000/800(ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="523">523 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  xDSL 3 Home 10000/800(ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="552">552 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  xDSL 3 Home 16000/800(ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="524">524 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  xDSL 3 Home 20000/800(ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="525">525 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  VDSL 3 Home 30000/1024 (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="553">553 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  VDSL 3 Home 40000/1024 (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="526">526 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  VDSL 3 Home 50000/4096 (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="527">527 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  VDSL 3 Home 80000/4096(ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="562">562 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  VDSL 3 Home 100000/4096(ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="528">528 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  xDSL 3 Office 10000/1024(ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="554">554 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  xDSL 3 Office 16000/1024(ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="529">529 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  xDSL 3 Office 20000/1024(ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="530">530 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  VDSL 3 Office 30000/2048 (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="555">555 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  VDSL 3 Office 40000/2048 (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="531">531 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  VDSL 3 Office 50000/8000 (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="532">532 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  VDSL 3 Office 100000/8000(ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>

                                <option	value="533">533 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED xDSL 3 Home 5000/800(ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="533">533 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED xDSL 3 Home 5000/800(ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="534">534 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED xDSL 3 Home 10000/800(ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="556">556 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED xDSL 3 Home 16000/800(ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="535">535 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED xDSL 3 Home 20000/800(ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="536">536 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED VDSL 3 Home 30000/1024 (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="557">557 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED VDSL 3 Home 40000/1024 (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="537">537 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED VDSL 3 Home 50000/4096 (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="538">538 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED VDSL 3 Home 80000/4096(ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="563">563 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED VDSL 3 Home 100000/4096(ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="539">539 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED xDSL 3 Office 10000/1024(ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="558">558 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED xDSL 3 Office 16000/1024(ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="540">540 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED xDSL 3 Office 20000/1024(ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="541">541 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED VDSL 3 Office 30000/2048 (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="559">559 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED VDSL 3 Office 40000/2048 (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="542">542 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED VDSL 3 Office 50000/8000 (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="543">543 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED VDSL 3 Office 100000/8000(ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>

                            </select></td>
                    </tr>
                    <tr>
                        <td align="right">Ref_num_to_be_cancelled</td>
                        <td align="left"><input type="text" name="Ref_num_to_be_cancelled" id="Ref_num_to_be_cancelled" /></td>
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