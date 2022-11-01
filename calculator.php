<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator using PHP</title>
</head>

<body>
    <?php
    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        switch($operator){
            case "None":
                echo "You need to select an operator";
                break;
            case "Add":
                echo $num1 + $num2;
                break;
            case "Subtract":
                echo $num1 - $num2;
                break;
            case "Multiply":
                echo $num1 * $num2;
                break;
            case "Divide":
                echo $num1 / $num2;
                break;
        }
    }
    ?>
    <form method="POST">
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
</body>

</html>