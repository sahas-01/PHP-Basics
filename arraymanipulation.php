<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array manipulations</title>
</head>

<body>
    <?php
    $arr = array(1, 2, 3, 4, 5);
    echo "Array: ";
    foreach ($arr as $a) {
        echo "$a ";
    }
    echo "<br>";
    echo "Array after adding 6: ";
    array_push($arr, 6);
    foreach ($arr as $a) {
        echo "$a ";
    };
    echo "<br>";
    echo "Array after adding 7 at index 0: ";
    array_unshift($arr, 7);
    foreach ($arr as $a) {
        echo "$a ";
    };
    echo "<br>";
    echo "Array after removing last element: ";
    array_pop($arr);
    foreach ($arr as $a) {
        echo "$a ";
    };
    echo "<br>";
    echo "Array after removing first element: ";
    array_shift($arr);
    foreach ($arr as $a) {
        echo "$a ";
    };
    echo "<br>";
    echo "Array after reversing: ";
    $arr = array_reverse($arr);
    foreach ($arr as $a) {
        echo "$a ";
    };
    echo "<br>";
    echo "Array after sorting: ";
    sort($arr);
    foreach ($arr as $a) {
        echo "$a ";
    };
    echo "<br>";
    echo "Array after shuffling: ";
    shuffle($arr);
    foreach ($arr as $a) {
        echo "$a ";
    };
    echo "<br>";
    echo "Array after removing duplicates: ";
    $arr = array_unique($arr);
    foreach ($arr as $a) {
        echo "$a ";
    };
    echo "<br>";
    echo "Array after removing element at index 2: ";
    array_splice($arr, 2, 1);
    foreach ($arr as $a) {
        echo "$a ";
    };
    echo "<br>";
    echo "Array after removing elements from index 1 to 3: ";
    array_splice($arr, 1, 3);
    foreach ($arr as $a) {
        echo "$a ";
    };
    echo "<br>";
    echo "Array after adding 8 at index 1: ";
    array_splice($arr, 1, 0, 8);
    foreach ($arr as $a) {
        echo "$a ";
    };
    echo "<br>";
    echo "Array after adding 9, 10 at index 2: ";
    array_splice($arr, 2, 0, array(9, 10));
    foreach ($arr as $a) {
        echo "$a ";
    };
    echo "<br>";
    echo "Array after adding 11, 12 at index 4: ";
    array_splice($arr, 4, 0, array(11, 12));
    foreach ($arr as $a) {
        echo "$a ";
    };
    echo "<br>";
    echo "Array after adding 13, 14 at index 6: ";
    array_splice($arr, 6, 0, array(13, 14));
    foreach ($arr as $a) {
        echo "$a ";
    };
    echo "<br>";
    echo "Array after adding 15, 16 at index 8: ";
    array_splice($arr, 8, 0, array(15, 16));
    foreach ($arr as $a) {
        echo "$a ";
    };
    echo "<br>";
    ?>
</body>

</html>