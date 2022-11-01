<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecting to Database</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbSahas";
    // Create a database in phpmyadmin
    // Create a connection
    $conn = mysqli_connect($servername, $username, $password , $database);
    // Die if connection was not successful
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    }
    echo "Connection was successful<br>";
    // Create a db
    $sql = "CREATE TABLE `new` (`s.no` INT(4) NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `age` INT(10) NOT NULL , `salary` FLOAT(10) NOT NULL , PRIMARY KEY (`s.no`))";
    $result = mysqli_query($conn, $sql);
    // Check for the database creation success
    if ($result) {
        echo "The table was created successfully<br>";
    } else {
        echo "The table was not created successfully because of this error ---> " . mysqli_error($conn);
    }
    ?>

</body>

</html>