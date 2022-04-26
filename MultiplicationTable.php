<?php

$row = 100;
$col = 100;

echo "<table border=\"1\">";

	for($i =0; $i <= $row; $i++) {
		echo "<tr>";

		if($i == 0) {
        	echo "<td> </td>";
			for($k=1; $k <= $row; $k++){
				echo "<td> $k </td>"; 
			}
		} else {
        	echo "<td> $i </td>";
			for($j =1; $j <= $col; $j++) {
				echo "<td>" .$i*$j. "</td>";
			}
		}
	
		echo "</tr>";
	}

echo "</table>";
?>