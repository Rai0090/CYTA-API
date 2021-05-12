<?php

require "index.php";
require "includes/submitvaluesPlaceordernew.php"
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Place Order</title>

</head>
<body>

<header>
    <nav>
        <div class="left">
            <form id="myForm" action="includes/submitvaluesPlaceordernew.php" method="post">
                <br><br><br><br><br><br><br>

                <table style="float: left;">
                    <tr>
                        <td align="right">username</td>
                        <td align="left"><input type="text" name="username" id="username" value ="Logosnet" required /></td>
                    </tr>
                    <tr>
                        <td align="right">password</td>
                        <td align="left"><input type="text" name="password" id="password" value="UP132HL6N4" required /></td>
                    </tr>
                    <tr>
                        <td align="right">product_category</td>
                        <td align="left"> <select name="product_category" id="product_category" class="select1" required>

                                <option value="BIT">BIT</option>
                                <option	value="CN">CN</option>
                                <option value="VCT">VCT</option>
                                <option value="FIB">FIB</option>



                            </select></td>
                    </tr>
                    <tr>
                        <td align="right">product_serial</td>
                        <td align="left"> <select name="product_serial" id="product_serial" class="select1" required>

                                <option value="1">1 - ΠΡΟΣΩΡΙΝΗ ΑΠΟΣΥΝΔΕΣΗ ΥΠΗΡΕΣΙΑΣ BITSTREAM</option>
                                <option	value="2">2 - ΕΠΑΝΑΣΥΝΔΕΣΗ ΥΠΗΡΕΣΙΑΣ BITSTREAM</option>
                                <option	value="14">14 - ΤΕΡΜΑΤΙΣΜΟΣ ΥΠΗΡΕΣΙΑΣ ADSL3</option>                             
                                <option	value="35">35 - ΤΕΡΜΑΤΙΣΜΟΣ ΠΡΟΙΟΝΤΟΣ xDSL 3 ΕΝΙΣΧΥΜΕΝΗΣ ΤΑΧΥΤΗΤΑΣ ΑΠΟΣΤΟΛΗΣ</option>
                                <option	value="37">37 - ΠΑΡΟΧΗ ΕΝΙΣΧΥΜΕΝΗΣ ΤΑΧΥΤΗΤΑΣ ΑΠΟΣΤΟΛΗΣ</option>
                                <option	value="38">38 - ΠΑΡΟΧΗ ΔΕΥΤΕΡΗΣ ΓΡΑΜΜΗΣ ΜΕ ΤΕΧΝΟΛΟΓΙΑ BONDING (ΟΠΟΥ ΕΙΝΑΙ ΤΕΧΝΙΚΑ ΕΦΙΚΤΟ)</option>
                                <option	value="39">39 - ΤΕΡΜΑΤΙΣΜΟΣ ΔΕΥΤΕΡΗΣ ΓΡΑΜΜΗΣ ΤΕΧΝΟΛΟΓΙΑΣ BONDING</option>
                                <option	value="75">75 - ΤΕΡΜΑΤΙΣΜΟΣ ΥΠΗΡΕΣΙΑΣ NAKED ADSL3</option>
                                <option	value="129">129 - ΠΡΟΣΩΡΙΝΗ ΑΠΟΣΥΝΔΕΣΗ ΥΠΗΡΕΣΙΑΣ NAKED DSL</option>
                                <option	value="130">130 - ΕΠΑΝΑΣΥΝΔΕΣΗ ΥΠΗΡΕΣΙΑΣ NAKED DSL</option>
                                <option	value="501">501 - ΠΑΡΟΧΗ NAKED DSL 3 10M/2M ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="502">502 - ΠΑΡΟΧΗ NAKED DSL 3 20M/2M ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="503">503 - ΠΑΡΟΧΗ NAKED DSL 3 30M/4M ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="504">504 - ΠΑΡΟΧΗ NAKED DSL 3 50M/5M ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="505">505 - ΠΑΡΟΧΗ NAKED DSL 3 80M/10M ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="560">560 - ΠΑΡΟΧΗ NAKED DSL 3 100M/10M ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="507">507 - ΠΑΡΟΧΗ NAKED DSL 3 20M/5M ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="509">509 - ΠΑΡΟΧΗ NAKED DSL 3 50M/10M ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="510">510 - ΠΑΡΟΧΗ NAKED DSL 3 100M/20M ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option>
                                <option	value="512">512 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ DSL 3 10M/2M</option>
                                <option	value="513">513 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ DSL 3 20M/2M</option>
                                <option	value="514">514 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ DSL 3 30M/4M</option>
                                <option	value="515">515 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ DSL 3 50M/5M</option>
                                <option	value="516">516 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ DSL 3 80M/10M</option>
                                <option	value="561">561 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ DSL 3 100M/10M</option>
                                <option	value="518">518 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ DSL 3 20M/5M</option>
                                <option	value="520">520 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ DSL 3 50M/10M</option>
                                <option	value="521">521 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ DSL 3 100M/20M</option>
                                <option	value="523">523 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  DSL 3  10M/2M (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="524">524 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  DSL 3  20M/2M (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="525">525 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  DSL 3  30M/4M (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="526">526 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  DSL 3  50M/5M (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="527">527 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  DSL 3  80M/10M(ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="562">562 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  DSL 3 100M/10M (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="529">529 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  DSL 3 20M/5M (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="531">531 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  DSL 3  50M/10M (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="532">532 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  DSL 3 100M/20M (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="534">534 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED DSL 3  10M/2M (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="535">535 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED DSL 3  20M/2M (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="536">536 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED DSL 3  30M/4M (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="537">537 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED DSL 3  50M/5M (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="538">538 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED DSL 3  80M/10M (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="563">563 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED DSL 3  100M/10M (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="540">540 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED DSL 3  20M/5M (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="542">542 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED DSL 3  50M/10M (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>
                                <option	value="543">543 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED DSL 3  100M/20M (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>

<!-- VCT VCT VCT VCT VCT VCT VCT VCT VCT VCT VCT VCT VCT VCT VCT VCT 
 -->



<option value="1">1 - ΠΑΡΟΧΗ ΥΠΗΡΕΣΙΑΣ ΣΕ ΑΝΕΝΕΡΓΟ ΥΠΟΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ) VLAN Χαλκού 10/2</option>
<option value="2">2 - ΠΑΡΟΧΗ ΥΠΗΡΕΣΙΑΣ ΣΕ ΑΝΕΝΕΡΓΟ ΥΠΟΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ) VLAN Χαλκού 20/2</option>
<option value="3">3 - ΠΑΡΟΧΗ ΥΠΗΡΕΣΙΑΣ ΣΕ ΑΝΕΝΕΡΓΟ ΥΠΟΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ) VLAN Χαλκού 30/4</option>
<option value="4">4 - ΠΑΡΟΧΗ ΥΠΗΡΕΣΙΑΣ ΣΕ ΑΝΕΝΕΡΓΟ ΥΠΟΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ) VLAN Χαλκού 50/5</option>
<option value="5">5 - ΠΑΡΟΧΗ ΥΠΗΡΕΣΙΑΣ ΣΕ ΑΝΕΝΕΡΓΟ ΥΠΟΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ) Χαλκού 80/10</option>
<option value="71">71 - ΠΑΡΟΧΗ ΥΠΗΡΕΣΙΑΣ ΣΕ ΑΝΕΝΕΡΓΟ ΥΠΟΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ) VLAN Χαλκού 100/10</option>
<option value="7">7 - ΠΑΡΟΧΗ ΥΠΗΡΕΣΙΑΣ ΣΕ ΑΝΕΝΕΡΓΟ ΥΠΟΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ) VLAN Χαλκού 20/5</option>
<option value="9">9 - ΠΑΡΟΧΗ ΥΠΗΡΕΣΙΑΣ ΣΕ ΑΝΕΝΕΡΓΟ ΥΠΟΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ) VLAN Χαλκού 50/10</option>
<option value="10">10 - ΠΑΡΟΧΗ ΥΠΗΡΕΣΙΑΣ ΣΕ ΑΝΕΝΕΡΓΟ ΥΠΟΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ) VLAN Χαλκού 100/20</option>
<option value="18">18 - Μετατροπή σε Vectoring με φορητότητα-VLAN Χαλκού 10/2</option>
<option value="19">19 - Μετατροπή σε Vectoring με φορητότητα-VLAN Χαλκού 20/2</option>
<option value="20">20 - Μετατροπή σε Vectoring με φορητότητα-VLAN Χαλκού 30/4</option>
<option value="21">21 - Μετατροπή σε Vectoring με φορητότητα-VLAN Χαλκού 50/5</option>
<option value="22">22 - Μετατροπή σε Vectoring με φορητότητα-VLAN Χαλκού 80/10</option>
<option value="73">73 - Μετατροπή σε Vectoring με φορητότητα-VLAN Χαλκού 100/10</option>
<option value="24">24 - Μετατροπή σε Vectoring με φορητότητα-VLAN Χαλκού 20/5</option>
<option value="26">26 - Μετατροπή σε Vectoring με φορητότητα-VLAN Χαλκού 50/10</option>
<option value="27">27 - Μετατροπή σε Vectoring με φορητότητα-VLAN Χαλκού 100/20</option>
<option value="54">54 - Μετατροπή / Μετάβαση σε Vectoring χωρίς φορητότητα VLAN Χαλκού 10/2</option>
<option value="55">55 - Μετατροπή / Μετάβαση σε Vectoring χωρίς φορητότητα VLAN Χαλκού 20/2</option>
<option value="56">56 - Μετατροπή / Μετάβαση σε Vectoring χωρίς φορητότητα VLAN Χαλκού 30/4</option>
<option value="57">57 - Μετατροπή / Μετάβαση σε Vectoring χωρίς φορητότητα VLAN Χαλκού 50/5</option>
<option value="58">58 - Μετατροπή / Μετάβαση σε Vectoring χωρίς φορητότητα VLAN Χαλκού 80/10</option>
<option value="75">75 - Μετατροπή / Μετάβαση σε Vectoring χωρίς φορητότητα VLAN Χαλκού 100/10</option>
<option value="60">60 - Μετατροπή / Μετάβαση σε Vectoring χωρίς φορητότητα VLAN Χαλκού 20/5</option>
<option value="62">62 - Μετατροπή / Μετάβαση σε Vectoring χωρίς φορητότητα VLAN Χαλκού 50/10</option>
<option value="63">63 - Μετατροπή / Μετάβαση σε Vectoring χωρίς φορητότητα VLAN Χαλκού 100/20</option>
<option value="35">35 - Αλλαγές Ταχύτητας σε VLAN Χαλκού 10/2</option>
<option value="36">36 - Αλλαγές Ταχύτητας σε VLAN Χαλκού 20/2</option>
<option value="37">37 - Αλλαγές Ταχύτητας σε VLAN Χαλκού 30/4</option>
<option value="38">38 - Αλλαγές Ταχύτητας σε VLAN Χαλκού 50/5</option>
<option value="39">39 - Αλλαγές Ταχύτητας σε VLAN Χαλκού 80/10</option>
<option value="77">77 - Αλλαγές Ταχύτητας σε VLAN Χαλκού 100/10</option>
<option value="41">41 - Αλλαγές Ταχύτητας σε VLAN Χαλκού 20/5</option>
<option value="43">43 - Αλλαγές Ταχύτητας σε VLAN Χαλκού 50/10</option>
<option value="44">44 - Αλλαγές Ταχύτητας σε VLAN Χαλκού 100/20</option>
<option value="52">52 - Τερματισμός υπηρεσίας BIT2 IP PLUS</option>
<option value="79">79 - Παροχή δεύτερης γραμμής με τεχνoλογία bonding (όπου είναι τεχνικά εφικτό)</option>
<option value="80">80 - Τερματισμός δεύτερης γραμμής τεχνoλογίας bonding</option>
<option value="81">81 - Παροχή υπηρεσίας ενισχυμένης ταχύτητας αποστολής σε Vlan Χαλκού και Οπτικού</option>
<option value="82">82 - Τερματισμός υπηρεσίας ενισχυμένης ταχύτητας αποστολής σε Vlan Χαλκού και Οπτικού</option>




<!-- FIB FIB FIB FIB FIB FIB FIB FIB FIB FIB FIB FIB FIB FIB FIB FIB FIB FIB FIB FIB FIB 
 -->


					<option value="1">1 - VLAN Οπτικού 65/20Mbps</option>
					<option value="2">2 - VLAN Οπτικού 150/30Mbps</option>
					<option value="3">3 - VLAN Οπτικού 250/50Mbps</option>
					<option value="4">4 - VLAN Οπτικού 500/80Mbps</option>
					<option value="5">5 - VLAN Οπτικού 1Gbps/100Mbps</option>
					<option value="10">10 - VLAN Οπτικού 100/50Mbps</option>
					<option value="11">11 - VLAN Οπτικού 200/100Mbps</option>
					<option value="12">12 - VLAN Οπτικού 400/200Mbps</option>
					<option value="13">13 - VLAN Οπτικού 600/300Mbps</option>
					<option value="14">14 - VLAN Οπτικού 1Gbps/500Mbps</option>
					<option value="15">15 - Τερματισμός Βασικής Εικονικής Λογικής Σύνδεσης Vlan Οπτικού</option>
					<option value="16">16 - VLAN Οπτικού 65/20Mbps</option>
					<option value="17">17 - VLAN Οπτικού 150/30Mbps</option>
					<option value="18">18 - VLAN Οπτικού 250/50Mbps</option>
					<option value="19">19 - VLAN Οπτικού 500/80Mbps</option>
					<option value="20">20 - VLAN Οπτικού 1Gbps/100Mbps</option>
					<option value="25">25 - VLAN Οπτικού 100/50Mbps</option>
					<option value="26">26 - VLAN Οπτικού 200/100Mbps</option>
					<option value="27">27 - VLAN Οπτικού 400/200Mbps</option>
					<option value="28">28 - VLAN Οπτικού 600/300Mbps</option>
					<option value="29">29 - VLAN Οπτικού 1Gbps/500Mbps</option>
					<option value="40">40 - VLAN Οπτικού 65/20Mbps</option>
					<option value="41">41 -	VLAN Οπτικού 150/30Mbps</option>
					<option value="42">42 -	VLAN Οπτικού 250/50Mbps</option>
					<option value="43">43 -	VLAN Οπτικού 500/80Mbps</option>
					<option value="44">44 -	VLAN Οπτικού 80/10 1Gbps/100Mbps</option>
					<option value="50">50 -	VLAN Οπτικού 100/50Mbps</option>
					<option value="51">51 -	VLAN Οπτικού 200/100Mbps</option>
					<option value="52">52 -	VLAN Οπτικού 400/200Mbps</option>
					<option value="53">53 -	VLAN Οπτικού 600/300Mbps</option>
					<option value="54">54 -	VLAN Οπτικού 1Gbps/500Mbps</option>
					<option value="55">55 -	VLAN Οπτικού 65/20Mbps</option>
					<option value="56">56 -	VLAN Οπτικού 150/30Mbps</option>
					<option value="57">57 -	VLAN Οπτικού 250/50Mbps</option>
					<option value="58">58 -	VLAN Οπτικού 500/80Mbps</option>
					<option value="59">59 -	VLAN Οπτικού 1Gbps/100Mbps</option>
					<option value="65">65 -	VLAN Οπτικού 100/50Mbps</option>
					<option value="66">66 -	VLAN Οπτικού 200/100Mbps</option>
					<option value="67">67 -	VLAN Οπτικού 400/200Mbps</option>
					<option value="68">68 -	VLAN Οπτικού 600/300Mbps</option>
					<option value="69">69 -	VLAN Οπτικού 1Gbps/500Mbps</option>


                            </select></td>
                    </tr>
                    <tr>
                        <td align="right">customer_name</td>
                        <td align="left"><input type="text" name="customer_name" id="customer_name" required /></td>
                    </tr>
                    <tr>
                        <td align="right">customer_id</td>
                        <td align="left"><input type="text" name="customer_id" id="customer_id" required /></td>
                    </tr>
                    <tr>
                        <td align="right">exchange_name</td>
                        <td align="left"><input type="text" name="exchange_name" id="exchange_name" /></td>
                    </tr>
                    <tr>
                        <td align="right">service_number</td>
                        <td align="left"><input type="text" name="service_number" id="service_number" /></td>
                    </tr>
                    <tr>
                        <td align="right">street_number</td>
                        <td align="left"><input type="text" name="street_number" id="street_number" required  /></td>
                    </tr>
                    <tr>
                        <td align="right">premises_number</td>
                        <td align="left"><input type="text" name="premises_number" id="premises_number" /></td>
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
                        <td align="right">Notes</td>
                        <td align="left"><input type="text" name="Notes" id="Notes" /></td>
                    </tr>
                    <tr>
                        <td align="right">streetId</td>
                        <td align="left"><input type="text" name="streetId" id="streetId" required /></td>
                    </tr>
                    <tr>
                        <td align="right">premisesType</td>
                        <td align="left"> <select name="premisesType" id="premisesType" class="select1">

                                <option value="1">Οικία</option>
                                <option	value="2">Κατάστημα</option>
                                <option	value="3">Διαμέρισμα</option>
                                <option	value="4">Μεζονέτα</option>
                                <option	value="5">Βοηθητικό Σπίτι</option>
                                <option	value="6">Γραφείο</option>
                                <option	value="7">Στούντιο</option>
                                <option	value="8">Βίλα</option>
                                <option	value="9">Αποθήκη</option>
                                <option	value="10">Εργοστάσιο</option>
                                <option	value="11">Αεροδρόμιο</option>
                                <option	value="12">Λιμάνι </option>


                            </select></td>
                    </tr>
                    <tr>
                        <td hidden align="right">additionalProducts</td>
                        <td align="left"><input type="text" name="additionalProducts" id="additionalProducts" hidden /></td>


                    </tr>
                    <tr>
                        <td hidden align="right">Product</td>
                        <td align="left"><input type="text" name="Product" id="Product" hidden /></td>
                    </tr>
                    <tr>
                        <td hidden align="right">PcatCode</td>
                        <td align="left"><input type="text" name="PcatCode" id="PcatCode" hidden /></td>
                    </tr>
                    <tr>
                        <td hidden align="right">ProductSerial</td>
                        <td align="left"><input type="text" name="ProductSerial" id="ProductSerial" value ="0" required hidden /></td>
                    </tr>
                    <tr>
                        <td hidden align="right">LoopRefNumber</td>
                        <td align="left"><input type="text" name="LoopRefNumber" id="LoopRefNumber" value="0" required hidden /></td>
                    </tr>
                    <tr>
                        <td hidden align="right">TerminationAtCustomer</td>
                        <td align="left"><input type="text" name="TerminationAtCustomer" id="TerminationAtCustomer" hidden /></td>
                    </tr>
                    <tr>
                        <td hidden align="right">Info</td>
                        <td align="left"><input type="text" name="Info" id="Info" hidden /></td>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $("#buttontest1").click(function(){
        $.post ($("#myForm").attr("action"),  $("#myForm").serializeArray(), function(info) {$("#result").html(info);});

        //document.getElementById('fright').style.display="block"


    });
    $("#myForm").submit( function() {

        return false;
    });


    $(document).ready(function () {
        $("#product_category").change(function () {
             switch($(this).val()) {
                case 'BIT':
                    $("#product_serial").html("<option value='1'>1 - ΠΡΟΣΩΡΙΝΗ ΑΠΟΣΥΝΔΕΣΗ ΥΠΗΡΕΣΙΑΣ BITSTREAM</option><option value='2'>2 - ΕΠΑΝΑΣΥΝΔΕΣΗ ΥΠΗΡΕΣΙΑΣ BITSTREAM</option><option value='14'>14 - ΤΕΡΜΑΤΙΣΜΟΣ ΥΠΗΡΕΣΙΑΣ ADSL3</option>                             <option value='35'>35 - ΤΕΡΜΑΤΙΣΜΟΣ ΠΡΟΙΟΝΤΟΣ xDSL 3 ΕΝΙΣΧΥΜΕΝΗΣ ΤΑΧΥΤΗΤΑΣ ΑΠΟΣΤΟΛΗΣ</option><option value='37'>37 - ΠΑΡΟΧΗ ΕΝΙΣΧΥΜΕΝΗΣ ΤΑΧΥΤΗΤΑΣ ΑΠΟΣΤΟΛΗΣ</option><option value='38'>38 - ΠΑΡΟΧΗ ΔΕΥΤΕΡΗΣ ΓΡΑΜΜΗΣ ΜΕ ΤΕΧΝΟΛΟΓΙΑ BONDING (ΟΠΟΥ ΕΙΝΑΙ ΤΕΧΝΙΚΑ ΕΦΙΚΤΟ)</option><option value='39'>39 - ΤΕΡΜΑΤΙΣΜΟΣ ΔΕΥΤΕΡΗΣ ΓΡΑΜΜΗΣ ΤΕΧΝΟΛΟΓΙΑΣ BONDING</option><option value='75'>75 - ΤΕΡΜΑΤΙΣΜΟΣ ΥΠΗΡΕΣΙΑΣ NAKED ADSL3</option><option value='129'>129 - ΠΡΟΣΩΡΙΝΗ ΑΠΟΣΥΝΔΕΣΗ ΥΠΗΡΕΣΙΑΣ NAKED DSL</option><option value='130'>130 - ΕΠΑΝΑΣΥΝΔΕΣΗ ΥΠΗΡΕΣΙΑΣ NAKED DSL</option><option value='501'>501 - ΠΑΡΟΧΗ NAKED DSL 3 10M/2M ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option><option value='502'>502 - ΠΑΡΟΧΗ NAKED DSL 3 20M/2M ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option><option value='503'>503 - ΠΑΡΟΧΗ NAKED DSL 3 30M/4M ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option><option value='504'>504 - ΠΑΡΟΧΗ NAKED DSL 3 50M/5M ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option><option value='505'>505 - ΠΑΡΟΧΗ NAKED DSL 3 80M/10M ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option><option value='560'>560 - ΠΑΡΟΧΗ NAKED DSL 3 100M/10M ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option><option value='507'>507 - ΠΑΡΟΧΗ NAKED DSL 3 20M/5M ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option><option value='509'>509 - ΠΑΡΟΧΗ NAKED DSL 3 50M/10M ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option><option value='510'>510 - ΠΑΡΟΧΗ NAKED DSL 3 100M/20M ΣΕ ΤΟΠΙΚΟ ΑΝΕΝΕΡΓΟ ΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ)</option><option value='512'>512 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ DSL 3 10M/2M</option><option value='513'>513 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ DSL 3 20M/2M</option><option value='514'>514 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ DSL 3 30M/4M</option><option value='515'>515 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ DSL 3 50M/5M</option><option value='516'>516 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ DSL 3 80M/10M</option><option value='561'>561 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ DSL 3 100M/10M</option><option value='518'>518 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ DSL 3 20M/5M</option><option value='520'>520 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ DSL 3 50M/10M</option><option value='521'>521 - ΑΛΛΑΓΗ ΤΑΧΥΤΗΤΑΣ ΣΕ DSL 3 100M/20M</option><option value='523'>523 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  DSL 3  10M/2M (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option><option value='524'>524 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  DSL 3  20M/2M (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option><option value='525'>525 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  DSL 3  30M/4M (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option><option value='526'>526 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  DSL 3  50M/5M (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option><option value='527'>527 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  DSL 3  80M/10M(ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option><option value='562'>562 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  DSL 3 100M/10M (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option><option value='529'>529 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  DSL 3 20M/5M (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option><option value='531'>531 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  DSL 3  50M/10M (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option><option value='532'>532 - ΜΕΤΑΤΡΟΠΗ ΣΕ NAKED  DSL 3 100M/20M (ΜΕ ΦΟΡΗΤΟΤΗΤΑ)</option><option value='534'>534 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED DSL 3  10M/2M (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option><option value='535'>535 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED DSL 3  20M/2M (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option><option value='536'>536 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED DSL 3  30M/4M (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option><option value='537'>537 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED DSL 3  50M/5M (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option><option value='538'>538 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED DSL 3  80M/10M (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option><option value='563'>563 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED DSL 3  100M/10M (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option><option value='540'>540 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED DSL 3  20M/5M (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option><option value='542'>542 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED DSL 3  50M/10M (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option><option value='543'>543 - ΜΕΤΑΒΑΣΗ / ΜΕΤΑΤΡΟΠΗ ΣΕ ΠΡΟΣΒΑΣΗ NAKED DSL 3  100M/20M (ΧΩΡΙΣ ΦΟΡΗΤΟΤΗΤΑ)</option>");
                    break;
                case 'VCT':
                    $("#product_serial").html("<option value='1'>1 - ΠΑΡΟΧΗ ΥΠΗΡΕΣΙΑΣ ΣΕ ΑΝΕΝΕΡΓΟ ΥΠΟΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ) VLAN Χαλκού 10/2</option><option value='3'>3 - ΠΑΡΟΧΗ ΥΠΗΡΕΣΙΑΣ ΣΕ ΑΝΕΝΕΡΓΟ ΥΠΟΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ) VLAN Χαλκού 30/4</option><option value='4'>4 - ΠΑΡΟΧΗ ΥΠΗΡΕΣΙΑΣ ΣΕ ΑΝΕΝΕΡΓΟ ΥΠΟΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ) VLAN Χαλκού 50/5</option><option value='5'>5 - ΠΑΡΟΧΗ ΥΠΗΡΕΣΙΑΣ ΣΕ ΑΝΕΝΕΡΓΟ ΥΠΟΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ) Χαλκού 80/10</option><option value='71'>71 - ΠΑΡΟΧΗ ΥΠΗΡΕΣΙΑΣ ΣΕ ΑΝΕΝΕΡΓΟ ΥΠΟΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ) VLAN Χαλκού 100/10</option><option value='7'>7 - ΠΑΡΟΧΗ ΥΠΗΡΕΣΙΑΣ ΣΕ ΑΝΕΝΕΡΓΟ ΥΠΟΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ) VLAN Χαλκού 20/5</option><option value='9'>9 - ΠΑΡΟΧΗ ΥΠΗΡΕΣΙΑΣ ΣΕ ΑΝΕΝΕΡΓΟ ΥΠΟΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ) VLAN Χαλκού 50/10</option><option value='10'>10 - ΠΑΡΟΧΗ ΥΠΗΡΕΣΙΑΣ ΣΕ ΑΝΕΝΕΡΓΟ ΥΠΟΒΡΟΧΟ (ΝΕΑ ΕΓΚΑΤΑΣΤΑΣΗ) VLAN Χαλκού 100/20</option><option value='18'>18 - Μετατροπή σε Vectoring με φορητότητα-VLAN Χαλκού 10/2</option><option value='19'>19 - Μετατροπή σε Vectoring με φορητότητα-VLAN Χαλκού 20/2</option><option value='20'>20 - Μετατροπή σε Vectoring με φορητότητα-VLAN Χαλκού 30/4</option><option value='21'>21 - Μετατροπή σε Vectoring με φορητότητα-VLAN Χαλκού 50/5</option><option value='22'>22 - Μετατροπή σε Vectoring με φορητότητα-VLAN Χαλκού 80/10</option><option value='73'>73 - Μετατροπή σε Vectoring με φορητότητα-VLAN Χαλκού 100/10</option><option value='24'>24 - Μετατροπή σε Vectoring με φορητότητα-VLAN Χαλκού 20/5</option><option value='26'>26 - Μετατροπή σε Vectoring με φορητότητα-VLAN Χαλκού 50/10</option><option value='27'>27 - Μετατροπή σε Vectoring με φορητότητα-VLAN Χαλκού 100/20</option><option value='54'>54 - Μετατροπή / Μετάβαση σε Vectoring χωρίς φορητότητα VLAN Χαλκού 10/2</option><option value='55'>55 - Μετατροπή / Μετάβαση σε Vectoring χωρίς φορητότητα VLAN Χαλκού 20/2</option><option value='56'>56 - Μετατροπή / Μετάβαση σε Vectoring χωρίς φορητότητα VLAN Χαλκού 30/4</option><option value='57'>57 - Μετατροπή / Μετάβαση σε Vectoring χωρίς φορητότητα VLAN Χαλκού 50/5</option><option value='58'>58 - Μετατροπή / Μετάβαση σε Vectoring χωρίς φορητότητα VLAN Χαλκού 80/10</option><option value='75'>75 - Μετατροπή / Μετάβαση σε Vectoring χωρίς φορητότητα VLAN Χαλκού 100/10</option><option value='60'>60 - Μετατροπή / Μετάβαση σε Vectoring χωρίς φορητότητα VLAN Χαλκού 20/5</option><option value='62'>62 - Μετατροπή / Μετάβαση σε Vectoring χωρίς φορητότητα VLAN Χαλκού 50/10</option><option value='63'>63 - Μετατροπή / Μετάβαση σε Vectoring χωρίς φορητότητα VLAN Χαλκού 100/20</option><option value='35'>35 - Αλλαγές Ταχύτητας σε VLAN Χαλκού 10/2</option><option value='36'>36 - Αλλαγές Ταχύτητας σε VLAN Χαλκού 20/2</option><option value='37'>37 - Αλλαγές Ταχύτητας σε VLAN Χαλκού 30/4</option><option value='38'>38 - Αλλαγές Ταχύτητας σε VLAN Χαλκού 50/5</option><option value='39'>39 - Αλλαγές Ταχύτητας σε VLAN Χαλκού 80/10</option><option value='77'>77 - Αλλαγές Ταχύτητας σε VLAN Χαλκού 100/10</option><option value='41'>41 - Αλλαγές Ταχύτητας σε VLAN Χαλκού 20/5</option><option value='43'>43 - Αλλαγές Ταχύτητας σε VLAN Χαλκού 50/10</option><option value='44'>44 - Αλλαγές Ταχύτητας σε VLAN Χαλκού 100/20</option><option value='52'>52 - Τερματισμός υπηρεσίας BIT2 IP PLUS</option><option value='79'>79 - Παροχή δεύτερης γραμμής με τεχνoλογία bonding (όπου είναι τεχνικά εφικτό)</option><option value='80'>80 - Τερματισμός δεύτερης γραμμής τεχνoλογίας bonding</option><option value='81'>81 - Παροχή υπηρεσίας ενισχυμένης ταχύτητας αποστολής σε Vlan Χαλκού και Οπτικού</option><option value='82'>82 - Τερματισμός υπηρεσίας ενισχυμένης ταχύτητας αποστολής σε Vlan Χαλκού και Οπτικού</option>");
                    break;
                case 'CN':
                    $("#product_serial").html("");
                    break;
                case 'FIB':
                    $("#product_serial").html("<option value='1'>1 - VLAN Οπτικού 65/20Mbps</option><option value='2'>2 - VLAN Οπτικού 150/30Mbps</option><option value='3'>3 - VLAN Οπτικού 250/50Mbps</option><option value='4'>4 - VLAN Οπτικού 500/80Mbps</option><option value='5'>5 - VLAN Οπτικού 1Gbps/100Mbps</option><option value='10'>10 - VLAN Οπτικού 100/50Mbps</option><option value='11'>11 - VLAN Οπτικού 200/100Mbps</option><option value='12'>12 - VLAN Οπτικού 400/200Mbps</option><option value='13'>13 - VLAN Οπτικού 600/300Mbps</option><option value='14'>14 - VLAN Οπτικού 1Gbps/500Mbps</option><option value='15'>15 - Τερματισμός Βασικής Εικονικής Λογικής Σύνδεσης Vlan Οπτικού</option><option value='16'>16 - VLAN Οπτικού 65/20Mbps</option><option value='17'>17 - VLAN Οπτικού 150/30Mbps</option><option value='18'>18 - VLAN Οπτικού 250/50Mbps</option><option value='19'>19 - VLAN Οπτικού 500/80Mbps</option><option value='20'>20 - VLAN Οπτικού 1Gbps/100Mbps</option><option value='25'>25 - VLAN Οπτικού 100/50Mbps</option><option value='26'>26 - VLAN Οπτικού 200/100Mbps</option><option value='27'>27 - VLAN Οπτικού 400/200Mbps</option><option value='28'>28 - VLAN Οπτικού 600/300Mbps</option><option value='29'>29 - VLAN Οπτικού 1Gbps/500Mbps</option><option value='40'>40 - VLAN Οπτικού 65/20Mbps</option><option value='41'>41 -	VLAN Οπτικού 150/30Mbps</option><option value='42'>42 -	VLAN Οπτικού 250/50Mbps</option><option value='43'>43 -	VLAN Οπτικού 500/80Mbps</option><option value='44'>44 -	VLAN Οπτικού 80/10 1Gbps/100Mbps</option><option value='50'>50 - VLAN Οπτικού 100/50Mbps</option><option value='51'>51 - VLAN Οπτικού 200/100Mbps</option><option value='52'>52 - VLAN Οπτικού 400/200Mbps</option><option value='53'>53 - VLAN Οπτικού 600/300Mbps</option><option value='54'>54 -	VLAN Οπτικού 1Gbps/500Mbps</option><option value='55'>55 - VLAN Οπτικού 65/20Mbps</option><option value='56'>56 - VLAN Οπτικού 150/30Mbps</option><option value='57'>57 - VLAN Οπτικού 250/50Mbps</option><option value='58'>58 - VLAN Οπτικού 500/80Mbps</option><option value='59'>59 - VLAN Οπτικού 1Gbps/100Mbps</option><option value='65'>65 - VLAN Οπτικού 100/50Mbps</option><option value='66'>66 - VLAN Οπτικού 200/100Mbps</option><option value='67'>67 -	VLAN Οπτικού 400/200Mbps</option><option value='68'>68 - VLAN Οπτικού 600/300Mbps</option><option value='69'>69 - VLAN Οπτικού 1Gbps/500Mbps</option>");
                    break;
                default:
                    $("#product_serial").html("");
             }
          });
        });

</script>