<?php
$no=24;
$x=$n=$no/4;
for ($i=1; $i <= $n ; $i++) { 

	for ($d=1; $d <= 9 ; $d++) { 
		echo "&nbsp;";
	}
	for ($a=1; $a <= $x ; $a++) { 
		echo "&nbsp;";
	}
	$x--;
	for ($b=1; $b <= $i;  $b++) { 
		echo "*";
	}
	echo "<br>";
}
$x=$n=$no/3;
for ($i=2; $i <= $n ; $i++) { 
	for ($d=1; $d <= 6 ; $d++) { 
		echo "&nbsp;";
	}
	for ($a=1; $a <= $x ; $a++) { 
		echo "&nbsp;";
	}
	$x--;
	for ($b=1; $b <= $i;  $b++) { 
		echo "*";
	}
	echo "<br>";
}
$x=$n=$no/2;
for ($i=4; $i <= $n ; $i++) { 
	for ($a=1; $a <= $x ; $a++) { 
		echo "&nbsp;";
	}
	$x--;
	for ($b=1; $b <= $i;  $b++) { 
		echo "*";
	}
	echo "<br>";
}

for ($i=1; $i <= $x ; $i++) {
	for ($d=1; $d < 14;  $d++) { 
		echo "&nbsp;";
	}
	echo "***";
	echo "<br>";
} 

echo "********************";