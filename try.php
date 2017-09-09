<?php

$m=1;
$no=40;
$n=$c=$no/5;
for ($i=1; $i <= $c ; $i++) { 
	for ($d=0; $d < $no/2 ; $d++) { 
		echo "&nbsp;";	
	}
	for ($a=1; $a < $n; $a++) { 
		echo "&nbsp;";
	}
	$n--;
	for ($b=1; $b <= $i ; $b++) { 
		echo "*";
	}
	echo "<br>";
}

$n=$c=$no/4;
for ($i=4; $i <= $c ; $i++) { 
	for ($d=0; $d < $no/3 ; $d++) { 
		echo "&nbsp;";	
	}
	for ($a=1; $a < $n; $a++) { 
		echo "&nbsp;";
	}
	$n--;
	for ($b=1; $b <= $i ; $b++) { 
		echo "*";
	}
	echo "<br>";
}

$n=$c=$no/3;
for ($i=5; $i <= $c ; $i++) { 
	for ($d=0; $d < $no/4 ; $d++) { 
		echo "&nbsp;";	
	}
	for ($a=1; $a < $n; $a++) { 
		echo "&nbsp;";
	}
	$n--;
	for ($b=1; $b <= $i ; $b++) { 
		echo "*";
	}
	echo "<br>";
}
for($i=0;$i<$no/3;$i++)
  	{
  		echo("&nbsp;");//Extra Space For Maintain Tree 
  		echo("*****");//Enter The AnyThing In Place Of ( * ) Like Any Key For Change Pattern
  		echo("<br>");
  	}

/*$n=$no/4; //right program
for ($i=1; $i <= $n ; $i++) { 
	for ($c=1; $c < $no ; $c++) { 
		echo "&nbsp;";
	}
	for ($a=$i; $a <= $n-1; $a++) { 
		echo "&nbsp;";
	}
	for ($b=1; $b <= $m ; $b++) { 
		echo "*";
	}
	echo "<br>";
	$m++;
}

*/


/*$m=1;
for($i=1; $i<=$n; $i++) { // iterates over number of rows
    for($j=$i; $j<=$n-1; $j++) {
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