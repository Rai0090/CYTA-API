<?php
include "includes/dbh.inc.php";
require "index.php";

$sql = "SELECT id, created_at, username, ReferenceNumber, service_type, product_category, product_serial FROM formvlaues";
$result = $conn->query($sql);

echo "<table border='1' style='float: left' class='left'>
<tr>
<th>Date</th>
<th>Service Type</th>
<th>Product Category</th>
<th>Product Serial</th>
<th>ReferenceNumber</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['created_at'] . "</td>";
    echo "<td>" . $row['service_type'] . "</td>";
    echo "<td>" . $row['product_category'] . "</td>";
    echo "<td>" . $row['product_serial'] . "</td>";
    echo "<td>" . $row['ReferenceNumber'] . "</td>";
    echo "</tr>";
}
echo "</table>";


