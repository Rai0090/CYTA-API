<?php
include_once 'dbh.inc.php';

$CircuitNumber = isset($_POST['CircuitNumber']) ? $_POST['CircuitNumber'] : '';
$AccessToken = isset($_POST['AccessToken']) ? $_POST['AccessToken'] : '';
$accesstoken = '';
$service_type ='GetONTEthPerformanceByCircuit';
$soapUrl = "https://apigw.cyta.com.cy:8243/GetONTEthPerformanceByCircuit/1.0.0";
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





$xml_post_string = '<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/">
                        <soap:Header xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
                        </soap:Header>
                        <soapenv:Body>
                            <get:GetONTEthPerformanceByCircuit
                            xmlns:get="http://fmw.cyta.com.cy/GetONTEthPerformanceByCircuit/">
                                <in>
                                    <GetONTEthPerformanceByCircuitPayload>
                                        <CircuitNumber>'.$CircuitNumber.'</CircuitNumber>
                                    </GetONTEthPerformanceByCircuitPayload>
                                </in>
                            </get:GetONTEthPerformanceByCircuit>
                        </soapenv:Body>
                        </soapenv:Envelope>
';


// echo '<prexmlstring>'; print_r($xml_post_string); echo '</prexmlstring>';


$headers = array(
    "POST /GetONTEthPerformanceByCircuit/1.0.0 HTTP/1.1",
    "Accept-Encoding: gzip,deflate",
    "Content-Type: text/xml;charset=UTF-8",
    "SOAPAction: \"GetONTEthPerformanceByCircuit\"",
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





$ns = "GetONTEthPerformanceByCircuit";
$document = new DOMDocument();
$document->loadXml($response);
// echo '<document>'; print_r($document); echo '</document>';

$re1 = $document->getElementsByTagName('ResponseCode');
$re2 = $document->getElementsByTagName('ResponseDescription');
$re3 = $document->getElementsByTagName('NAME');
$re4 = $document->getElementsByTagName('ALIAS');
$re5 = $document->getElementsByTagName('TransmittedFrames');
$re6 = $document->getElementsByTagName('ReceivedFrames');
$re7 = $document->getElementsByTagName('TransmittedOctets');
$re8 = $document->getElementsByTagName('ReceivedOctets');
$re9 = $document->getElementsByTagName('DiscardedTxFrames');
$re10 = $document->getElementsByTagName('DiscardedRxFrames');
$re11 = $document->getElementsByTagName('CountsTxScapeErr');
$re12 = $document->getElementsByTagName('CountsTxBipErr');
$re13 = $document->getElementsByTagName('CountsRxBipErr');
$re14 = $document->getElementsByTagName('CountsTxHECerr');
$re15 = $document->getElementsByTagName('OversizedFrames');
$re16 = $document->getElementsByTagName('ShortFrames');
$re17 = $document->getElementsByTagName('Jabbers');
$re19 = $document->getElementsByTagName('FragmentsLessthan64Bytes');
$re19 = $document->getElementsByTagName('ONTSTAT');
$re20 = $document->getElementsByTagName('FCS');





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
    $TransmittedFrames = $book->nodeValue;

}

foreach ($re6 as $book) {
    $ReceivedFrames = $book->nodeValue;

}

foreach ($re7 as $book) {
    $TransmittedOctets = $book->nodeValue;

}

foreach ($re8 as $book) {
    $ReceivedOctets = $book->nodeValue;

}

foreach ($re9 as $book) {
    $DiscardedTxFrames = $book->nodeValue;

}

foreach ($re10 as $book) {
    $DiscardedRxFrames = $book->nodeValue;

}

foreach ($re11 as $book) {
    $CountsTxScapeErr = $book->nodeValue;

}

foreach ($re12 as $book) {
    $CountsTxBipErr = $book->nodeValue;

}

foreach ($re13 as $book) {
    $CountsRxBipErr = $book->nodeValue;

}

foreach ($re14 as $book) {
    $CountsTxHECerr = $book->nodeValue;

}

foreach ($re15 as $book) {
    $OversizedFrames = $book->nodeValue;

}

foreach ($re16 as $book) {
    $ShortFrames = $book->nodeValue;

}

foreach ($re17 as $book) {
    $Jabbers = $book->nodeValue;

}

foreach ($re18 as $book) {
    $FragmentsLessthan64Bytes = $book->nodeValue;

}

foreach ($re19 as $book) {
    $ONTSTAT = $book->nodeValue;

}

foreach ($re20 as $book) {
    $FCS = $book->nodeValue;

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
                            <td align="right">TransmittedFrames</td>
                            <td align="left">', $TransmittedFrames, '</td>
                        </tr>
                        <tr>
                            <td align="right">ReceivedFrames</td>
                            <td align="left">', $ReceivedFrames, '</td>
                        </tr>
                        <tr>
                            <td align="right">TransmittedOctets</td>
                            <td align="left">', $TransmittedOctets, '</td>
                        </tr>
                        <tr>
                            <td align="right">ReceivedOctets</td>
                            <td align="left">', $ReceivedOctets, '</td>
                        </tr>
                        <tr>
                            <td align="right">DiscardedTxFrames</td>
                            <td align="left">', $DiscardedTxFrames, '</td>
                        </tr>
                        <tr>
                            <td align="right">DiscardedRxFrames</td>
                            <td align="left">', $DiscardedRxFrames, '</td>
                        </tr>
                        <tr>
                            <td align="right">CountsTxScapeErr</td>
                            <td align="left">', $CountsTxScapeErr, '</td>
                        </tr>
                        <tr>
                            <td align="right">CountsTxBipErr</td>
                            <td align="left">', $CountsTxBipErr, '</td>
                        </tr>
                        <tr>
                            <td align="right">CountsRxBipErr</td>
                            <td align="left">', $CountsRxBipErr, '</td>
                        </tr>
                        <tr>
                            <td align="right">CountsTxHECerr</td>
                            <td align="left">', $CountsTxHECerr, '</td>
                        </tr>
                        <tr>
                            <td align="right">OversizedFrames</td>
                            <td align="left">', $OversizedFrames, '</td>
                        </tr>
                        <tr>
                            <td align="right">ShortFrames</td>
                            <td align="left">', $ShortFrames, '</td>
                        </tr>
                        <tr>
                            <td align="right">Jabbers</td>
                            <td align="left">', $Jabbers, '</td>
                        </tr>
                        <tr>
                            <td align="right">FragmentsLessthan64By</td>
                            <td align="left">', $FragmentsLessthan64By, '</td>
                        </tr>
                        <tr>
                            <td align="right">FCS</td>
                            <td align="left">', $FCS, '</td>
                        </tr>

                        
                    </table>
            </nav>
        </header>';

} elseif ($ResponseCode == 1) {
    echo 'Circuit not Found';
} else {

   echo 'System Error'; 
}