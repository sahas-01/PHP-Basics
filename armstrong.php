<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong number</title>
</head>

<body>
    <?php
    function isArmstrong($num)
    {
        $temp = $num;
        $sum = 0;
        while ($temp != 0) {
            $sum += ($temp % 10) * ($temp % 10) * ($temp % 10);
            $temp = (int)($temp / 10);
        }
        if ($sum == $num) {
            return true;
        } else {
            return false;
        }
    }
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        if (isArmstrong($num)) {
            echo "$num is an Armstrong number";
        } else {
            echo "$num is not an Armstrong number";
        }
    }
    ?>
    <form method="POST">
        <input type="number" name="num" placeholder="Number">
        <br>
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
</body>

</html>