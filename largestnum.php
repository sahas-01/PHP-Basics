<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest of 2 numbers using nesting of functions</title>
</head>

<body>
    <?php
    function largest($num1, $num2)
    {
        if ($num1 > $num2) {
            return $num1;
        } else {
            return $num2;
        }
    }
    function largestOf3($num1, $num2, $num3)
    {
        return largest(largest($num1, $num2), $num3);
    }
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        echo "Largest of $num1, $num2 and $num3 is " . largestOf3($num1, $num2, $num3);
    }
    ?>
    <form method="POST">
        <input type="number" name="num1" placeholder="Number 1">
        <input type="number" name="num2" placeholder="Number 2">
        <input type="number" name="num3" placeholder="Number 3">
        <br>
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
</body>

</html>