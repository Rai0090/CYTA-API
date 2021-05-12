<?php
include_once 'dbh.inc.php';

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$fault_type = isset($_POST['fault_type']) ? $_POST['fault_type'] : '';
$Representative_Name = isset($_POST['Representative_Name']) ? $_POST['Representative_Name'] : '';
$exchange_name = isset($_POST['exchange_name']) ? $_POST['exchange_name'] : '';
$service_number = isset($_POST['service_number']) ? $_POST['service_number'] : '';
$street = isset($_POST['street']) ? $_POST['street'] : '';
$street_number = isset($_POST['street_number']) ? $_POST['street_number'] : '';
$flat_number = isset($_POST['flat_number']) ? $_POST['flat_number'] : '';
$building_name = isset($_POST['building_name']) ? $_POST['building_name'] : '';
$post_code = isset($_POST['post_code']) ? $_POST['post_code'] : '';
$community = isset($_POST['community']) ? $_POST['community'] : '';
$district = isset($_POST['district']) ? $_POST['district'] : '';
$description = isset($_POST['description']) ? $_POST['description'] : '';
$service_type = 'Report Fault';


$soapUrl = "https://www.wholesale.cyta.com.cy/OnlineOrderWS.asmx?op=ReportFault";
$soapUser = "Logosnet";  //  username
$soapPassword = "UP132HL6N4"; // password



$xml_post_string = '<?xml version="1.0" encoding="utf-8"?>
                            <soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
                              <soap:Body>
                              <ReportFault xmlns="http://tempuri.org/">
                                <username>'.$username.'</username>
                                <password>'.$password.'</password>
                                <fault_type>'.$fault_type.'</fault_type>
                                <Representative_Name>'.$Representative_Name.'</Representative_Name>
                                <exchange_name>'.$exchange_name.'</exchange_name>
                                <service_number>'.$service_number.'</service_number>
                                <street>'.$street.'</street>
                                <street_number>'.$street_number.'</street_number>
                                <flat_number>'.$flat_number.'</flat_number>
                                <building_name>'.$building_name.'</building_name>
                                <community>'.$community.'</community>
                                <district>'.$district.'</district>
                                <description>'.$description.'</description>
                                </ReportFault>
                              </soap:Body>
                            </soap:Envelope>';




$headers = array(
    "POST /OnlineOrderWS.asmx HTTP/1.1",
    "Host: www.wholesale.cyta.com.cy",
    "Content-Type: text/xml; charset=utf-8",
    "Content-length: ".strlen($xml_post_string),
    "SOAPAction: \"http://tempuri.org/ReportFault\"",
);

$url = $soapUrl;

// PHP cURL  for https connection with auth
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

#curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
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

// converting
$response1 = str_replace("<soap:Body>","",$response);
$response2 = str_replace("</soap:Body>","",$response1);




$lul = "<?xml version=\"1.0\" encoding=\"utf-8\"?><soap:Envelope xmlns:soap=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\"><soap:Body><CancelFaultResponse xmlns=\"http://tempuri.org/\"><CancelFaultResult><ResponseCode>1</ResponseCode><ReasonCode>2</ReasonCode></CancelFaultResult></CancelFaultResponse></soap:Body></soap:Envelope>";

$ns = "http://tempuri.org/";
$document = new DOMDocument();
$document->loadXml($response);

$re11 = $document->getElementsByTagName('ResponseCode');
$re22 = $document->getElementsByTagName('ReasonCode');
$re33 = $document->getElementsByTagName('ReferenceNumber');
$ResponseCode = '';
$ReasonCode = '';
$ReferenceNumber = '';
foreach ($re11 as $book) {
    $ResponseCode = $book->nodeValue;

}
foreach ($re22 as $book) {
    $ReasonCode = $book->nodeValue;

}foreach ($re33 as $book) {
    $ReferenceNumber = $book->nodeValue;

}
if ($ReasonCode!=1) {
    switch ($ReasonCode) {

        case "1":
            $errormsg = "AuthenticationFailed";
            break;
        case "2":
            $errormsg = "IPValidationFailed";
            break;
        case "3":
            $errormsg = "ProductMissing";
            break;
        case "4":
            $errormsg = "InvalidProduct";
            break;
        case "5":
            $errormsg = "FaultTypeMissing";
            break;
        case "6":
            $errormsg = "InvalidFaultType";
            break;
        case "7":
            $errormsg = "ReferenceNumberMissing";
            break;
        case "8":
            $errormsg = "InvalidReferenceNumber";
            break;
        case "9":
            $errormsg = "RequiredFieldsMissing";
            break;
        case "10":
            $errormsg = "InvalidFormat";
            break;
        case "11":
            $errormsg = "LateCancellation";
            break;
        case "12":
            $errormsg = "CancelOfCancellationOrderNotAllowed";
            break;
        case "13":
            $errormsg = "OrderAlreadyCancelled";
            break;
        default:
            $errormsg = "unknown";
    }
    echo

    '

                    <header>
                    <nav>
                   <div class="right">
                <table style="float: right;" border="1" >
                    <tr>
                        <td align="right">ResponseCode</td>
                        <td align="left">', $ResponseCode, '</td>
                    </tr>
                    <tr>
                        <td align="right">Reason Code</td>
                        <td align="left">', $ReasonCode, '</td>
                    </tr>
                    <tr>
                        <td align="right">Reference Number</td>
                        <td align="left">', $ReferenceNumber, '</td>
                    </tr>
                    
                    


                </table>
                </div>
                </nav>
                </header>
                
          ';
}




if ($ReferenceNumber != '') {
    $sql = "INSERT INTO formvlaues (username,
                                service_type,
                                ReferenceNumber) 
             VALUES ('$username',
                    '$service_type',
                    '$ReferenceNumber');";
    mysqli_query($conn, $sql);
}
//echo "Data sent";
//exit();
?>


