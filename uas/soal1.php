<?php
	
	$n=13;
	echo "variabel n = $n <br><br>";

	for($a=1; $a<=$n; $a++) {  
		for($b=1; $b<=$a; $b++)  
		{  
			echo "*";  
		}
		echo "$a<br>";
	}

	for($a=$n-1; $a>=1; $a--){  
			for($b=1; $b<=$a; $b++)  
			{  
				echo "*";
			}
			echo "$a<br>"; 
	}  

?>