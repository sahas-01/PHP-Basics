<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User's name from form and greet him/her</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        echo "<p>Hello $name </p>";
    }
    ?>
    <form method="POST">
        <input type="text" name="name" placeholder="Name">
        <br>
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
</body>

</html>