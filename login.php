<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page without SQL</title>
</head>

<body>
    <?php
    $username = "admin";
    $password = "admin";
    if (isset($_POST['submit'])) {
        $uname = $_POST['uname'];
        $pass = $_POST['pass'];
        if ($uname == $username && $pass == $password) {
            echo "<p>Login Successful</p>";
        } else {
            echo "<p>Login Failed</p>";
        }
    }
    ?>
    <form method="POST">
        <input type="text" name="uname" placeholder="Username">
        <input type="password" name="pass" placeholder="Password">
        <br>
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
</body>

</html>