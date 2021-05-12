<?php
include_once 'dbh.inc.php';

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$product_category = isset($_POST['product_category']) ? $_POST['product_category'] : '';
$product_serial = isset($_POST['product_serial']) ? $_POST['product_serial'] : '';
$customer_name = isset($_POST['customer_name']) ? $_POST['customer_name'] : '';
$customer_id = isset($_POST['customer_id']) ? $_POST['customer_id'] : '';
$exchange_name = isset($_POST['exchange_name']) ? $_POST['exchange_name'] : '';
$service_number = isset($_POST['service_number']) ? $_POST['service_number'] : '';
$street = isset($_POST['street']) ? $_POST['street'] : '';
$street_number = isset($_POST['street_number']) ? $_POST['street_number'] : '';
$flat_number = isset($_POST['flat_number']) ? $_POST['flat_number'] : '';
$building_name = isset($_POST['building_name']) ? $_POST['building_name'] : '';
$post_code = isset($_POST['post_code']) ? $_POST['post_code'] : '';
$community = isset($_POST['community']) ? $_POST['community'] : '';
$district = isset($_POST['district']) ? $_POST['district'] : '';
$installation_equipment = isset($_POST['installation_equipment']) ? $_POST['installation_equipment'] : '';
$Notes = isset($_POST['Notes']) ? $_POST['Notes'] : '';
$service_type = 'Place Order';


$soapUrl = "https://test.wholesale.cyta.com.cy/OnlineOrderWS.asmx?op=PlaceOrder";
$soapUser = "Logosnet";  //  username
$soapPassword = "UP132HL6N4"; // password



$xml_post_string = '<?xml version="1.0" encoding="utf-8"?>
                            <soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
                              <soap:Body>
                              <PlaceOrder xmlns="http://tempuri.org/">
                                <username>'.$username.'</username>
                                <password>'.$password.'</password>
                                <product_category>'.$product_category.'</product_category>
                                <product_serial>'.$product_serial.'</product_serial>
                                <customer_name>'.$customer_name.'</customer_name>
                                <customer_id>'.$customer_id.'</customer_id>
                                <exchange_name>'.$exchange_name.'</exchange_name>
                                <service_number>'.$service_number.'</service_number>
                                <street>'.$street.'</street>
                                <street_number>'.$street_number.'</street_number>
                                <flat_number>'.$flat_number.'</flat_number>
                                <building_name>'.$building_name.'</building_name>
                                <post_code>'.$post_code.'</post_code>
                                <community>'.$community.'</community>
                                <district>'.$district.'</district>
                                <installation_equipment>'.$installation_equipment.'</installation_equipment>
                                <Notes>'.$Notes.'</Notes>
                                </PlaceOrder>
                              </soap:Body>
                            </soap:Envelope>';




$headers = array(
    "POST /OnlineOrderWS.asmx HTTP/1.1",
    "Host: www.wholesale.cyta.com.cy",
    "Content-Type: text/xml; charset=utf-8",
    "Content-length: ".strlen($xml_post_string),
    "SOAPAction: \"http://tempuri.org/PlaceOrder\"",
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
            echo "AuthenticationFailed";
            break;
        case "2":
            echo "IPValidationFailed";
            break;
        case "3":
            echo "ProductMissing";
            break;
        case "4":
            echo "InvalidProduct";
            break;
        case "5":
            echo "FaultTypeMissing";
            break;
        case "6":
            echo "InvalidFaultType";
            break;
        case "7":
            echo "ReferenceNumberMissing";
            break;
        case "8":
            echo "InvalidReferenceNumber";
            break;
        case "9":
            echo "RequiredFieldsMissing";
            break;
        case "10":
            echo "InvalidFormat";
            break;
        case "11":
            echo "LateCancellation";
            break;
        case "12":
            echo "CancelOfCancellationOrderNotAllowed";
            break;
        case "13":
            echo "OrderAlreadyCancelled";
            break;
        default:
            echo "Success";
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
                </nav>
                </header>
                
          ';
}



if ($ReferenceNumber != '') {
    $sql = "INSERT INTO formvlaues (username,
                                service_type,
                                product_category,
                                product_serial,
                                ReferenceNumber) 
             VALUES ('$username',
                    '$service_type',
                    '$product_category',
                    '$product_serial',
                    '$ReferenceNumber');";
    mysqli_query($conn, $sql);
}
//exit();
?>
