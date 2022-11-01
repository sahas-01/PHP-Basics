<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Program in PHP to display Multiplication Table using nested for loop
    </title>

</head>

<body>
    <?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 2; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 10; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>

</body>

</html>