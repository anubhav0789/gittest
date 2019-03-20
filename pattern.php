<?php 

for( $i=1; $i <= 5; $i++){
	for($k=1; $k <= 5-$i; $k++){
		echo "_";
	}

	for($j=1; $j <= $i; $j++){
		echo "*";
	}

	echo "<br/>";
}

echo "<br/>";echo "<br/>";

for( $i=1; $i <= 5; $i++){
	for($j=1; $j <= $i; $j++){
		echo "*";
	}

	echo "<br/>";
}

echo "<br/>";echo "<br/>";

for( $i=1; $i <= 5; $i++){
	for($k=1; $k < $i; $k++){
		echo "_";
	}

	for($j=5; $j >= $i; $j--){
		echo "*";
	}
	echo "<br/>";
}

echo "<br/>";echo "<br/>";

for( $i=1; $i <= 5; $i++){
	
	for($j=1; $j <= 6 - $i; $j++){
		echo "*";
	}
	echo "<br/>";
}

echo "<br/>";echo "<br/>";

for( $i=1; $i <= 4; $i++){
	
	for($k=1; $k <= 4 - $i; $k++){
		echo "_";
	}

	for($j=1; $j <= 2*$i-1; $j++){
		echo "*";
	}



	echo "<br/>";
}


echo "<br/>";echo "<br/>";

for( $i=1; $i <= 4; $i++){
	
	for($k=1; $k <= 4 - $i; $k++){
		echo "_";
	}
	$m =1;
	for($j=1; $j <= 7; $j++){
		if($j>= 5-$i && $j<= 3+$i){
			if($j<4){
				echo $m++;
			}else{
				echo $m--;
			}
		}
		
	}

	echo "<br/>";
}

echo "<br/><br/><br/>";

for( $i=1; $i <= 4; $i++){
	$k =1;
	for($j=1; $j <= 7; $j++){
		
		if($j>= 5-$i && $j<= 3+$i){
			//echo " 1 ";
			if($j<4){
				echo $k++;
			}else{
				echo $k--;
			}
		}else{
			echo "_";
		}
	}

	echo "<br/>";
}





?>