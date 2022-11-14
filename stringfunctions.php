<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String functions using PHP</title>
</head>

<body>
    <?php
    $str = "iwp";
    $rev = strrev($str);
    echo $rev;
    $string = "IWP is a great course";
    echo strlen($string);
    echo str_word_count($string);
    echo strrev($string);
    echo strpos($string, "great");
    echo str_replace("great", "awesome", $string);
    ?>
</body>

</html>