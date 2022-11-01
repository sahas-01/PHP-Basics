<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo of functions using php</title>
</head>

<body>
    <h1>Functions using php</h1>
    <p>Array of marks and average to be calculated</p>
    <?php
    function avgMarks($marks){
        $sum = 0;
        foreach($marks as $mark){
            $sum += $mark;
        }
        return $sum / count($marks);
    }
    $marks = array(10, 20, 30, 40, 50);
    echo "Average marks: " . avgMarks($marks);
    echo "<br> Total marks: " . array_sum($marks);
    ?>
</body>

</html>