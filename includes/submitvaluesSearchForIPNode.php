<?php
include_once 'dbh.inc.php';

$Network_Element_Name = isset($_POST['Network_Element_Name']) ? $_POST['Network_Element_Name'] : '';
$AccessToken = isset($_POST['AccessToken']) ? $_POST['AccessToken'] : '';
$accesstoken = '';
$service_type ='Pep Test PS';
$soapUrl = "https://apigw.cyta.com.cy:8243/SearchForIPNode/1.0.0/SearchForIPNode";
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
                        <soap:Header xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"></soap:Header>
                        <soapenv:Body>
                            <sear:SearchForIPNode xmlns:sear="http://fmw.cyta.com.cy/SearchForIPNode/">
                                <in>
                                    <SearchForIPNodePayload>
                                        <Network_Element_Name>'.$Network_Element_Name.'</Network_Element_Name>
                                    </SearchForIPNodePayload>
                                </in>
                            </sear:SearchForIPNode>
                        </soapenv:Body>
                     </soapenv:Envelope>';


echo '<prexmlstring>'; print_r($xml_post_string); echo '</prexmlstring>';


$headers = array(
    "POST /SearchForIPNode/1.0.0 HTTP/1.1",
    "Accept-Encoding: gzip,deflate",
    "Content-Type: text/xml;charset=UTF-8",
    "SOAPAction: \"SearchForIPNode\"",
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
echo '<response>'; print_r($response); echo '</response>';
echo '<error>'; print_r($err); echo '</error>';
echo '<info>'; print_r($err); echo '</info>';

// converting
$response1 = str_replace("<soap:Body>","",$response);
$response2 = str_replace("</soap:Body>","",$response1);





$ns = "SearchForIPNode";
$document = new DOMDocument();
$document->loadXml($response);
echo '<document>'; print_r($document); echo '</document>';

$re11 = $document->getElementsByTagName('ResponseCode');
$re22 = $document->getElementsByTagName('ResponseDescription');
$re33 = $document->getElementsByTagName('IP_Node_Name');
$re44 = $document->getElementsByTagName('IP_Node_Code');




foreach ($re11 as $book) {
    $ResponseCode = $book->nodeValue;

}

foreach ($re22 as $book) {
    $ResponseDescription = $book->nodeValue;

}

foreach ($re33 as $book) {
    $IP_Node_Name = $book->nodeValue;

}

foreach ($re44 as $book) {
    $IP_Node_Code = $book->nodeValue;

}



if ($ResponseCode == 0) {

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
                            <td align="left">', $IP_Node_Name, '</td>
                        </tr>
                        <tr>
                            <td align="right">OTL_Name</td>
                            <td align="left">', $IP_Node_Code, '</td>
                        </tr>
                    </table>
            </nav>
        </header>';

} elseif ($ResponseCode == 1) {
    echo 'Element not Found';
} else {

   echo 'System Error'; 
}