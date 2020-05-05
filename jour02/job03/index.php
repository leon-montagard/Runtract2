<?php 
$nombre= 0;
while ( $nombre<= 100) 
{
	if ($nombre<= 20)
	 {
		echo "<i>".$nombre."</i>";
	}
	elseif ($nombre>= 25 && $nombre<= 50) 
	{
		if ($nombre== 42)
		{
			echo "La Plateforme_";
		}
		else
		echo "<u>".$nombre."</u>";
	}
	else
	{
		echo $nombre;
	}
$nombre++;
echo "<br/>";
}
 ?>