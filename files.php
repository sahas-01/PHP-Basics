<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with Files in php</title>
</head>

<body>
    <!-- <?php
    $fptr = fopen("newfile.txt", "r");
    if ($fptr == false) {
        die("Error in opening file");
    }
    $fileSize = filesize("newfile.txt");
    $content = fread($fptr, $fileSize);
    echo $content;
    fclose($fptr);
    ?>
    <!-- Reading line by line from a file -->
    <?php
    $fptr = fopen("newfile.txt", "r");
    if ($fptr == false) {
        die("Error in opening file");
    }
    echo "<br>";
    while (!feof($fptr)) {
        $line = fgets($fptr);
        echo $line . "<br>";
    }
    fclose($fptr);
    ?> -->

    <!-- Writing to a file -->
    <?php
    $fptr = fopen("newfile2.txt", "w");
    if ($fptr == false) {
        die("Error in opening file");
    }
    $content = "This is a new file";
    fwrite($fptr, $content);
    fclose($fptr);
    ?>

</body>

</html>