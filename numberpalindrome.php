<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome of a given Number</title>
</head>

<body>
    <?php
    function isPalindrome($num)
    {
        $temp = $num;
        $rev = 0;
        while ($temp != 0) {
            $rev = $rev * 10 + $temp % 10;
            $temp = (int)($temp / 10);
        }
        if ($rev == $num) {
            return true;
        } else {
            return false;
        }
    }
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];
        if (isPalindrome($num)) {
            echo "$num is a palindrome";
        } else {
            echo "$num is not a palindrome";
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