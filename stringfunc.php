<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>String Palindrome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <h1 class="my-5">String Palindrome demo</h1>
    <?php
    $str = "sahas";
    $rev = strrev($str);
    if($str == $rev){
        echo "The String is a Palindrome";
    }
    else{
        echo "The String is not a Palindrome";
    }
    ?>

</body>

</html>