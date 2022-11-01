<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For each loops & arrays demo</title>
</head>

<body>
    <h1>For each loops & arrays demo</h1>
    <?php
    $names = array("Name", "Me", "You", "Us");
    foreach ($names as $name) {
        echo "Hello $name <br>";
    }
    ?>
    <?php
    $arr = array(1,2,3,4,5,6,7,8,9,10);
    for($i = 0; $i < count($arr); $i++){
        echo $arr[$i] . "<br>";
    }
    ?>

</body>

</html>