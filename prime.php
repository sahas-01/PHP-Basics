<html>

<head>
    <title>PRINT PRIME</title>
</head>

<body>
    <h1 align="center">Program to print prime numbers between 1 and 100</h1>
    <?php
  	$a = 100;
  	$b = 2;

  	while(TRUE)
  	{
  		$div = 2;
  		if($b > $a)
  		{
  			break;
  		}
  		while(TRUE)
  		{
  			if($div > sqrt($b))
  			{
  				echo $b."  ";
  				break;
  			}
  			if($b % $div == 0)
  			{
  				break;
  			}
  			$div = $div + 1;
  		}
  		$b = $b + 1;
  	}
  ?>
</body>

</html>