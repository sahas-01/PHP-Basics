<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $age = $_POST['age'];
        if ($age >= 18) {
            echo "$name is an adult";
        } else {
            echo "$name is a minor";
        }
    }
    ?>
    <form method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="age" placeholder="Age">
        <br>
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
</body>

</html>