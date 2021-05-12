<?php
include_once 'dbh.inc.php';

$CircuitNumber = isset($_POST['CircuitNumber']) ? $_POST['CircuitNumber'] : '';
$AccessToken = isset($_POST['AccessToken']) ? $_POST['AccessToken'] : '';
$accesstoken = '';
$service_type ='Vectoring';
$soapUrl = "https://apigw.cyta.com.cy:8243/ONTInfo/1.0.0/GetONTPhysicalStatusPS";
$soapUser = "X5873QBUeJf135WJNCyl_2DTIeka";  //  username
$soapPassword = "Fy8NLbX0GTQx2WsI0_sl6m2d_N4a"; // password


$url='https://apigw.cyta.com.cy:8243/token';



$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://apigw.cyta.com.cy:8243/token');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERPWD, 'X5873QBUeJf135WJNCyl_2DTIeka' . ':' . 'Fy8NLbX0GTQx2WsI0_sl6m2d_N4a');

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

$json   = json_decode($result);
$atoken = $json->access_token;

curl_close ($ch);
// echo '<prejson>'; print_r($json); echo '</prejson>';
// echo '<pretoken>'; print_r($atoken); echo '</pretoken>';





$xml_post_string = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:get="http://fmw.cyta.com.cy/GetONTPhysicalStatus/">
                        <soapenv:Header/>
                            <soapenv:Body>
                                <get:GetONTPhysicalStatus>
                                    <in>
                                        <GetONTPhysicalStatusPayload>
                                            <CircuitNumber>'.$CircuitNumber.'</CircuitNumber>
                                        </GetONTPhysicalStatusPayload>
                                    </in>
                                </get:GetONTPhysicalStatus>
                            </soapenv:Body>
                        </soapenv:Envelope>
';


// echo '<prexmlstring>'; print_r($xml_post_string); echo '</prexmlstring>';


$headers = array(
    "POST /GetONTPhysicalStatusPS/1.0.0 HTTP/1.1",
    "Accept-Encoding: gzip,deflate",
    "Content-Type: text/xml;charset=UTF-8",
    "SOAPAction: \"GetONTPhysicalStatusPS\"",
    "Authorization: Bearer $atoken",
    "Host: apigw22.cyta.com.cy:8243",
    "Content-length: ".strlen($xml_post_string),
);

// echo '<xmlheaders>'; print_r($headers); echo '</xmlheaders>';
$url = $soapUrl;

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// converting
$response = curl_exec($ch);
$err = curl_error($ch);
$info = curl_getinfo($ch);
curl_close($ch);
// echo '<response>'; print_r($response); echo '</response>';
// echo '<error>'; print_r($err); echo '</error>';
// echo '<info>'; print_r($err); echo '</info>';

// converting
$response1 = str_replace("<soap:Body>","",$response);
$response2 = str_replace("</soap:Body>","",$response1);





$ns = "SearchForVectoringByCircuit";
$document = new DOMDocument();
$document->loadXml($response);
// echo '<document>'; print_r($document); echo '</document>';

$re1 = $document->getElementsByTagName('ResponseCode');
$re2 = $document->getElementsByTagName('ResponseDescription');
$re3 = $document->getElementsByTagName('NAME');
$re4 = $document->getElementsByTagName('ALIAS');
$re5 = $document->getElementsByTagName('OPTICSRXPOWER');
$re6 = $document->getElementsByTagName('OPTICSTXPOWER');
$re7 = $document->getElementsByTagName('OPTICSTXBIASCURR');
$re8 = $document->getElementsByTagName('OPTICSTXTEMP');
$re9 = $document->getElementsByTagName('OPTICSTXVOL');
$re10 = $document->getElementsByTagName('ONTRANGING');
$re11 = $document->getElementsByTagName('RUNSTAT');
$re12 = $document->getElementsByTagName('ADMINSTAT');
$re13 = $document->getElementsByTagName('BATTERYSTAT');
$re14 = $document->getElementsByTagName('LSTUPTIME');
$re15 = $document->getElementsByTagName('LSTDOWNTIME');
$re16 = $document->getElementsByTagName('LSTDOWNCAUSE');
$re17 = $document->getElementsByTagName('ALARMSTATE');
$re19 = $document->getElementsByTagName('RUNTIME');
$re19 = $document->getElementsByTagName('ONTSTAT');
$re20 = $document->getElementsByTagName('SERIALNUM');
$re21 = $document->getElementsByTagName('CURMACCOUNT');





foreach ($re1 as $book) {
    $ResponseCode = $book->nodeValue;

}

foreach ($re2 as $book) {
    $ResponseDescription = $book->nodeValue;

}

foreach ($re3 as $book) {
    $NAME = $book->nodeValue;

}

foreach ($re4 as $book) {
    $ALIAS = $book->nodeValue;

}

foreach ($re5 as $book) {
    $OPTICSRXPOWER = $book->nodeValue;

}

foreach ($re6 as $book) {
    $OPTICSTXPOWER = $book->nodeValue;

}

foreach ($re7 as $book) {
    $OPTICSTXBIASCURR = $book->nodeValue;

}

foreach ($re8 as $book) {
    $OPTICSTXTEMP = $book->nodeValue;

}

foreach ($re9 as $book) {
    $OPTICSTXVOL = $book->nodeValue;

}

foreach ($re10 as $book) {
    $ONTRANGING = $book->nodeValue;

}

foreach ($re11 as $book) {
    $RUNSTAT = $book->nodeValue;

}

foreach ($re12 as $book) {
    $ADMINSTAT = $book->nodeValue;

}

foreach ($re13 as $book) {
    $BATTERYSTAT = $book->nodeValue;

}

foreach ($re14 as $book) {
    $LSTUPTIME = $book->nodeValue;

}

foreach ($re15 as $book) {
    $LSTDOWNTIME = $book->nodeValue;

}

foreach ($re16 as $book) {
    $LSTDOWNCAUSE = $book->nodeValue;

}

foreach ($re17 as $book) {
    $ALARMSTATE = $book->nodeValue;

}

foreach ($re18 as $book) {
    $RUNTIME = $book->nodeValue;

}

foreach ($re19 as $book) {
    $ONTSTAT = $book->nodeValue;

}

foreach ($re20 as $book) {
    $SERIALNUM = $book->nodeValue;

}

foreach ($re21 as $book) {
    $CURMACCOUNT = $book->nodeValue;

}
echo '<ResponseCode>'; print_r($ResponseCode); echo '</ResponseCode>';


if ($ResponseCode == 0) {

 echo
    '

        <header class="',$ResponseCode,'">
            <nav>
                <div>
                    <table style="float: left;" border="1" >
                        <tr>
                            <td align="right">ResponseCode</td>
                            <td align="left">',$ResponseCode,'</td>
                        </tr>
                        <tr>
                            <td align="right">ResponseDescription</td>
                            <td align="left">', $ResponseDescription, '</td>
                        </tr>
                        <tr>
                            <td align="right">Name</td>
                            <td align="left">', $NAME, '</td>
                        </tr>
                        <tr>
                            <td align="right">Alias</td>
                            <td align="left">', $ALIAS, '</td>
                        </tr>
                        <tr>
                            <td align="right">OPTICSRXPOWER</td>
                            <td align="left">', $OPTICSRXPOWER, '</td>
                        </tr>
                        <tr>
                            <td align="right">OPTICSTXBIASCURR</td>
                            <td align="left">', $OPTICSTXBIASCURR, '</td>
                        </tr>
                        <tr>
                            <td align="right">OPTICSTXTEMP</td>
                            <td align="left">', $OPTICSTXTEMP, '</td>
                        </tr>
                        <tr>
                            <td align="right">OPTICSTXVOL</td>
                            <td align="left">', $OPTICSTXVOL, '</td>
                        </tr>
                        <tr>
                            <td align="right">ONTRANGING</td>
                            <td align="left">', $ONTRANGING, '</td>
                        </tr>
                        <tr>
                            <td align="right">RUNSTAT</td>
                            <td align="left">', $RUNSTAT, '</td>
                        </tr>
                        <tr>
                            <td align="right">ADMINSTAT</td>
                            <td align="left">', $ADMINSTAT, '</td>
                        </tr>
                        <tr>
                            <td align="right">BATTERYSTAT</td>
                            <td align="left">', $BATTERYSTAT, '</td>
                        </tr>
                        <tr>
                            <td align="right">LSTUPTIME</td>
                            <td align="left">', $LSTUPTIME, '</td>
                        </tr>
                        <tr>
                            <td align="right">LSTDOWNTIME</td>
                            <td align="left">', $LSTDOWNTIME, '</td>
                        </tr>
                        <tr>
                            <td align="right">LSTDOWNCAUSE</td>
                            <td align="left">', $LSTDOWNCAUSE, '</td>
                        </tr>
                        <tr>
                            <td align="right">ALARMSTATE</td>
                            <td align="left">', $ALARMSTATE, '</td>
                        </tr>
                        <tr>
                            <td align="right">RUNTIME</td>
                            <td align="left">', $RUNTIME, '</td>
                        </tr>
                        <tr>
                            <td align="right">ONTSTAT</td>
                            <td align="left">', $ONTSTAT, '</td>
                        </tr>
                        <tr>
                            <td align="right">SERIALNUM</td>
                            <td align="left">', $SERIALNUM, '</td>
                        </tr>
                        <tr>
                            <td align="right">CURMACCOUNT</td>
                            <td align="left">', $CURMACCOUNT, '</td>
                        </tr>
                        
                    </table>
            </nav>
        </header>';

} elseif ($ResponseCode == 1) {
    echo 'Circuit not Found';
} else {

   echo 'System Error'; 
}