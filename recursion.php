<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursion to print numbers from 10 to 1</title>
</head>

<body>
    <?php
    $num = 10; 
function display($number) {    
    if($number >= 1) {    
        echo $number." ";    
        $number--;    
        display($number); 
    }  
}    
    
display(10);    
?>
</body>

</html>