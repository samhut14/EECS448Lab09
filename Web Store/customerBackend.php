<link rel="stylesheet" href="style.css"> </link>
<html>
<body>

<?php

function makeRow($item, $price, $num){
    echo "<tr>";
    echo "<th>$item</th>";
    echo "<td>$num</td>";
    echo "<td>$$price</td>";
    echo "<td>$" .$num*$price. "</td>";
    echo "</tr>";
}

$user = $_POST["username"]; 
$password = $_POST["password"];

$orchids = $_POST["orchids"];
$roses = $_POST["roses"];
$tulips = $_POST["tulips"];

$shipping = $_POST["shipping"];

if($shipping == "Standard") $cost = 0;
else if($shipping == "Express") $cost = 5;
else $cost = 50;

echo "<h2>Floral Shop Receipt</h2>";
echo "<p>Welcome $user!</p>";
echo "<p>Here's your password and receipt: $password</p>";

echo "<table border=\"1\">";

echo "<tr>";
echo "<th> </th> <th>Quantity</th> <th>Cost Per Item</th> <th>Sub Total</th>";
echo "</tr>";

makeRow("Orchids",25, $orchids);
makeRow("Roses",20, $roses);
makeRow("Tulips",15, $tulips);

echo "<tr>";
echo "<th>Shipping</th> <td colspan=\"2\">$shipping</td> <td>$$cost</td>";
echo "</tr>";

$total = $cost+($orchids*25)+($roses*20)+($tulips*15);

echo "<tr>";
echo "<th colspan=\"3\">Total Cost</th>";
echo "<th>$$total</th>";
echo "</tr>";


?>

</body>
</html>