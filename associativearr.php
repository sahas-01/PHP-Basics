<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative arrays using PHP</title>
</head>

<body>
    <?php
    $marks = array("Sahas" => 100, "John" => 90, "Rohan" => 80);
    echo $marks["Sahas"] . "<br>";
    echo $marks["John"] . "<br>";
    echo $marks["Rohan"] . "<br>";
    foreach($marks as $key => $value){
        echo "$key got $value marks <br>";
    }
    ?>
</body>

</html>