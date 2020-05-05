<?php
$nombre= 1;

while ( $nombre<= 100) 
{
	if (($nombre % 3)==0 && ($nombre % 5)==0) 
	{
		echo "FizzBuzz";
	}
	elseif (($nombre % 3)== 0) 
	{
		echo "Fizz";
	}
	elseif (($nombre % 5)== 0) 
	{
		echo "Buzz";
	}
	else
	{
		echo $nombre;
	}
$nombre++;
echo "<br/>";
}
  ?>