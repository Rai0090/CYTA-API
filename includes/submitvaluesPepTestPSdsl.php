<?php
include_once 'dbh.inc.php';

$TestCct = isset($_POST['TestCct']) ? $_POST['TestCct'] : '';
$AccessToken = isset($_POST['AccessToken']) ? $_POST['AccessToken'] : '';
$accesstoken = '';
$service_type ='Pep Test PS';

$soapUrl = "https://apigw.cyta.com.cy:8243/teptests/1.0.0";
$soapUser = "X5873QBUeJf135WJNCyl_2DTIeka";  //  username
$soapPassword = "Fy8NLbX0GTQx2WsI0_sl6m2d_N4a"; // password


$username='X5873QBUeJf135WJNCyl_2DTIeka';
$password='Fy8NLbX0GTQx2WsI0_sl6m2d_N4a';
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
                          <tep:DSLMeasurements xmlns:tep="http://www.example.org/TepTests/">                        
                            <tep:TestCct xmlns:tep="http://www.example.org/TepTestsSchema">'.$TestCct.'</tep:TestCct>
                          </tep:DSLMeasurements>
                        </soapenv:Body>
                     </soapenv:Envelope>';


// echo '<prexmlstring>'; print_r($xml_post_string); echo '</prexmlstring>';


$headers = array(
    "POST /teptests/1.0.0 HTTP/1.1",
    "Accept-Encoding: gzip,deflate",
    "Content-Type: text/xml;charset=UTF-8",
    "SOAPAction: \"DSLMeasurements\"",
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





$ns = "DSLMacAddresses";
$document = new DOMDocument();
$document->loadXml($response);

$re11 = $document->getElementsByTagName('Result');
$Result = '';


foreach ($re11 as $book) {
    $Result = $book->nodeValue;
    // echo '<result>'; print_r($Result); echo '</result>';

}


if (strlen($response) > 1) {

 echo
    '

                    <header>
                    <nav>
                   <div>
                <table style="float: left;" border="1" >
                    <tr>
                        <td align="right">Result</td>
                        <td align="left">', $Result, '</td>
                    </tr>
                   

                </table>
                </nav>
                </header>
                
          ';



}