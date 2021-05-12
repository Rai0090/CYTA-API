<?php
include_once 'dbh.inc.php';

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$fault_reference_number = isset($_POST['fault_reference_number']) ? $_POST['fault_reference_number'] : '';
$service_type = 'Get Fault Info';


$soapUrl = "https://www.wholesale.cyta.com.cy/OnlineOrderWS.asmx?op=GetFaultInfo";
$soapUser = "Logosnet";  //  username
$soapPassword = "UP132HL6N4"; // password



$xml_post_string = '<?xml version="1.0" encoding="utf-8"?>
                            <soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
                              <soap:Body>
                              <GetFaultInfo xmlns="http://tempuri.org/">
                                <username>'.$username.'</username>
                                <password>'.$password.'</password>
                                <fault_reference_number>'.$fault_reference_number.'</fault_reference_number>
                                </GetFaultInfo>
                              </soap:Body>
                            </soap:Envelope>';




$headers = array(
    "POST /OnlineOrderWS.asmx HTTP/1.1",
    "Host: www.wholesale.cyta.com.cy",
    "Content-Type: text/xml; charset=utf-8",
    "Content-length: ".strlen($xml_post_string),
    "SOAPAction: \"http://tempuri.org/GetFaultInfo\"",
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

$re1 = $document->getElementsByTagName('ResponseCode');
$re2 = $document->getElementsByTagName('ReasonCode');
$re3 = $document->getElementsByTagName('Reference_Number');
$re4 = $document->getElementsByTagName('SerialNumber');
$re5 = $document->getElementsByTagName('Product_Category');
$re6 = $document->getElementsByTagName('Product_Serial');
$re7 = $document->getElementsByTagName('Status');
$re8 = $document->getElementsByTagName('Submission_Date');
$re9 = $document->getElementsByTagName('Original_Date');
$re10 = $document->getElementsByTagName('Provision_Date');
$re11 = $document->getElementsByTagName('Customer_Name');
$re12 = $document->getElementsByTagName('Customer_ID');
$re13 = $document->getElementsByTagName('Exchange_Name');
$re14 = $document->getElementsByTagName('Service_Number');
$re15 = $document->getElementsByTagName('Street');
$re16 = $document->getElementsByTagName('Street_Number');
$re17 = $document->getElementsByTagName('Building_Name');
$re18 = $document->getElementsByTagName('Premises_Number');
$re19 = $document->getElementsByTagName('Post_Code');
$re20 = $document->getElementsByTagName('Community');
$re21 = $document->getElementsByTagName('District');
$re22 = $document->getElementsByTagName('Installation_Equipment');
$re23 = $document->getElementsByTagName('Notes');
$re24 = $document->getElementsByTagName('StreetId');
$re25 = $document->getElementsByTagName('Premises_Type');

$ResponseCode = '';
$ReasonCode = '';
$Reference_Number = '';
$SerialNumber = '';
$Product_Category='';
$Product_Serial = '';
$Status = '';
$Submission_Date = '';
$Original_Date = '';
$Provision_Date='';
$Customer_Name = '';
$Customer_ID = '';
$Exchange_Name = '';
$Service_Number = '';
$Street = '';
$Street_Number = '';
$Building_Name = '';
$Premises_Number = '';
$Post_Code = '';
$Community = '';
$District = '';
$Installation_Equipment = '';
$Notes = '';
$StreetId = '';
$Premises_Type = '';

foreach ($re1 as $book) {
    $ResponseCode = $book->nodeValue;

}
foreach ($re2 as $book) {
    $ReasonCode = $book->nodeValue;

}foreach ($re3 as $book) {
    $Reference_Number = $book->nodeValue;

}foreach ($re4 as $book) {
    $SerialNumber = $book->nodeValue;

}foreach ($re5 as $book) {
    $Product_Category = $book->nodeValue;

}foreach ($re6 as $book) {
    $Product_Serial = $book->nodeValue;

}foreach ($re7 as $book) {
    $Status = $book->nodeValue;

}foreach ($re8 as $book) {
    $Submission_Date = $book->nodeValue;

}foreach ($re9 as $book) {
    $Original_Date = $book->nodeValue;

}foreach ($re10 as $book) {
    $Provision_Date = $book->nodeValue;

}foreach ($re11 as $book) {
    $Customer_Name = $book->nodeValue;

}foreach ($re12 as $book) {
    $Customer_ID = $book->nodeValue;

}foreach ($re13 as $book) {
    $Exchange_Name = $book->nodeValue;

}foreach ($re14 as $book) {
    $Service_Number = $book->nodeValue;

}foreach ($re15 as $book) {
    $Street = $book->nodeValue;

}foreach ($re16 as $book) {
    $Street_Number = $book->nodeValue;

}foreach ($re17 as $book) {
    $Building_Name = $book->nodeValue;

}foreach ($re18 as $book) {
    $Premises_Number = $book->nodeValue;

}foreach ($re19 as $book) {
    $Post_Code = $book->nodeValue;

}foreach ($re20 as $book) {
    $Community = $book->nodeValue;

}foreach ($re21 as $book) {
    $District = $book->nodeValue;

}foreach ($re22 as $book) {
    $Installation_Equipment = $book->nodeValue;

}foreach ($re23 as $book) {
    $Notes = $book->nodeValue;

}foreach ($re24 as $book) {
    $StreetId = $book->nodeValue;

}foreach ($re25 as $book) {
    $Premises_Type = $book->nodeValue;

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
            echo "AuthenticationFailed";
            break;
        case "4":
            echo "ReferenceNumberMissing";
            break;
        case "5":
            echo "InvalidReferenceNumber";
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
                   <div CLASS="right">
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
                        <td align="right">Reference_Number</td>
                        <td align="left">', $Reference_Number, '</td>
                    </tr>
                    <tr>
                        <td align="right">SerialNumber</td>
                        <td align="left">', $SerialNumber, '</td>
                    </tr>
                    <tr>
                        <td align="right">Product_Category</td>
                        <td align="left">', $Product_Category, '</td>
                    </tr>
                    <tr>
                        <td align="right">Product_Serial</td>
                        <td align="left">', $Product_Serial, '</td>
                    </tr>
                    <tr>
                        <td align="right">Status</td>
                        <td align="left">', $Status, '</td>
                    </tr>
                    <tr>
                        <td align="right">Submission_Date</td>
                        <td align="left">', $Submission_Date, '</td>
                    </tr>
                    <tr>
                        <td align="right">Original_Date</td>
                        <td align="left">', $Original_Date, '</td>
                    </tr>
                    <tr>
                        <td align="right">Provision_Date</td>
                        <td align="left">', $Provision_Date, '</td>
                    </tr>
                    <tr>
                        <td align="right">Customer_Name</td>
                        <td align="left">', $Customer_Name, '</td>
                    </tr>
                    <tr>
                        <td align="right">Customer_ID</td>
                        <td align="left">', $Customer_ID, '</td>
                    </tr>
                    <tr>
                        <td align="right">Exchange_Name</td>
                        <td align="left">', $Exchange_Name, '</td>
                    </tr>
                    <tr>
                        <td align="right">Service_Number</td>
                        <td align="left">', $Service_Number, '</td>
                    </tr>
                    <tr>
                        <td align="right">Street</td>
                        <td align="left">', $Street, '</td>
                    </tr>
                    <tr>
                        <td align="right">Street_Number</td>
                        <td align="left">', $Street_Number, '</td>
                    </tr>
                    <tr>
                        <td align="right">Building_Name</td>
                        <td align="left">', $Building_Name, '</td>
                    </tr>
                    <tr>
                        <td align="right">Premises_Number</td>
                        <td align="left">', $Premises_Number, '</td>
                    </tr>
                    <tr>
                        <td align="right">Post_Code</td>
                        <td align="left">', $Post_Code, '</td>
                    </tr>
                    <tr>
                        <td align="right">Community</td>
                        <td align="left">', $Community, '</td>
                    </tr>
                    <tr>
                        <td align="right">District</td>
                        <td align="left">', $District, '</td>
                    </tr>
                    <tr>
                        <td align="right">Installation_Equipment</td>
                        <td align="left">', $Installation_Equipment, '</td>
                    </tr>
                    <tr>
                        <td align="right">Notes</td>
                        <td align="left">', $Notes, '</td>
                    </tr>
                    <tr>
                        <td align="right">StreetId</td>
                        <td align="left">', $StreetId, '</td>
                    </tr>
                    <tr>
                        <td align="right">Premises_Type</td>
                        <td align="left">', $Premises_Type, '</td>
                    </tr>
                    


                </table>
                </nav>
                </header>
                
          ';
}



if ($ResponseCode == '0') {
    $sql = "INSERT INTO formvlaues (username,
                                ppassword,
                                service_type) 
             VALUES ('$username',
                    '$password',
                    '$service_type');";
    mysqli_query($conn, $sql);
}
//echo "Data sent";
//exit();
?>


