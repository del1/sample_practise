<?php


$nodes=5;
$number_of_star=40;

/*
 $m=1;
for($i=1; $i<=5; $i++) { // iterates over number of rows
    for($j=$i; $j<=4; $j++) {
        echo "&nbsp;";
    }
    for($k=1; $k<=$m; $k++)  {
        echo "*";
    }
    for($c=$m; $c>1; $c--) {
        echo "&nbsp";
    }
    echo "<br>";
    $m++;
}*/

$m=1;
$n=6;//$number_of_star=
$a=1;
$nodes=3;//number of nodes on christmas
//do {

	for ($i=1; $i <=$n ; $i++) { 
		 	for ($j=$i; $j <= $n-1 ; $j++) { 
		 		echo "&nbsp;";
		 	}
		 	for ($k=1; $k <=$m ; $k++) { 
		 		echo "*";
		 	}
		 	/*for ($p=$m; $p >1 ; $p--) { 
		 		echo "&nbsp;";
		 	}*/
		echo "<br>";
		$m++;
	}
/*
	$n=7;
	$m=2;
	for ($i=1; $i <=$n ; $i++) { 
		 	for ($j=$i; $j <= $n-1 ; $j++) { 
		 		echo "&nbsp;";
		 	}
		 	for ($k=1; $k <=$m ; $k++) { 
		 		echo "*";
		 	}
		 	for ($p=$m; $p >1 ; $p--) { 
		 		echo "&nbsp;";
		 	}
		echo "<br>";
		$m++;
	}
*/

//	$a++;
//} while ($nodes <= $n);


