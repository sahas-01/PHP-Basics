<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessing session data</title>
</head>

<body>
    <?php
    session_start();
    echo "Welcome " . $_SESSION["username"] . ".<br>";
    echo "Your favorite color is " . $_SESSION["favcolor"] . ".";
    ?>
</body>

</html>