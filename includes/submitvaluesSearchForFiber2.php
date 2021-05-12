<?php
include_once 'dbh.inc.php';

$StreetID = isset($_POST['StreetID']) ? $_POST['StreetID'] : '';
$StreetNumber = isset($_POST['StreetNumber']) ? $_POST['StreetNumber'] : '';
$greek_flat_number = isset($_POST['greek_flat_number']) ? $_POST['greek_flat_number'] : '';
$AccessToken = isset($_POST['AccessToken']) ? $_POST['AccessToken'] : '';
$accesstoken = '';
$service_type ='Pep Test PS';
$count = 0;
$soapUrl = "https://apigw.cyta.com.cy:8243/SearchForFiber/1.0.1";
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





$xml_post_string = '<?xml version="1.0" encoding="utf-8"?>
                    <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"> 
                        <soap:Header xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"></soap:Header>
                        <soapenv:Body>
                            <sear:SearchForFiber xmlns:sear="http://fmw.cyta.com.cy/SearchForFiber/">
                                <in>
                                    <SearchForFiberPayload>
                                        <StreetID>'.$StreetID.'</StreetID>
                                        <StreetNumber>'.$StreetNumber.'</StreetNumber>
                                        <greek_flat_number>'.$greek_flat_number.'</greek_flat_number>
                                    </SearchForFiberPayload>
                                </in>
                            </sear:SearchForFiber>
                        </soapenv:Body>
                     </soapenv:Envelope>';


// echo '<prexmlstring>'; print_r($xml_post_string); echo '</prexmlstring>';


$headers = array(
    "POST /SearchForFiber/1.0.0 HTTP/1.1",
    "Accept-Encoding: gzip,deflate",
    "Content-Type: text/xml;charset=UTF-8",
    "SOAPAction: \"SearchForFiber\"",
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





$ns = "SearchForFiber";
$document = new DOMDocument();
$document->loadXml($response);
// echo '<document>'; print_r($document); echo '</document>';

$re11 = $document->getElementsByTagName('ResponseDescription');
$re22 = $document->getElementsByTagName('OTL_Name');
$re33 = $document->getElementsByTagName('ResponseCode');
$re44 = $document->getElementsByTagName('Address_Flag');




foreach ($re11 as $book) {
    $ResponseDescription = $book->nodeValue;

}

foreach ($re22 as $book) {
    $OTL_Name = $book->nodeValue;

}

foreach ($re33 as $book) {
    $ResponseCode = $book->nodeValue;

}

foreach ($re33 as $book) {
    $Address_Flag = $book->nodeValue;

}



if ($ResponseCode == 1) {

 echo
    '

        <header class="',$ResponseCode,'">
            <nav>
                <div>
                    <table style="float: left;" border="1" >
                        <tr>
                            <td align="right">ResponseDescription</td>
                            <td align="left">',$ResponseDescription,'</td>
                        </tr>
                        <tr>
                            <td align="right">OTL_Name</td>
                            <td align="left">', $OTL_Name, '</td>
                        </tr>
                        <tr>
                            <td align="right">Address_Flag</td>
                            <td align="left">', $Address_Flag, '</td>
                        </tr>
                    </table>
            </nav>
        </header>';

} elseif ($ResponseCode == 0) {
    echo '<header class="',$ResponseCode,'">
            <nav>
                <div>
                    <table style="float: left;" border="1" >
                        <tr>
                            <td align="right">ResponseDescription</td>
                            <td align="left">',$ResponseDescription,'</td>
                        </tr>
                        <tr>
                            <td align="right">OTL_Name</td>
                            <td align="left">', $OTL_Name, '</td>
                        </tr>
                        <tr>
                            <td align="right">Address_Flag</td>
                            <td align="left">', $Address_Flag, '</td>
                        </tr>
                    </table>
            </nav>
        </header>';
} else {

   echo 'System Error'; 
}