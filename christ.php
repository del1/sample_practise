<?php
$no=30;
//do//Do-While Loop Start From Here
//  { 
  	$abc=$no/4;
  	for($i=1; $i<=$no/4; $i++)
   	{
   		echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
   		for($j=1; $j<$abc; $j++)
    	echo("&nbsp;&nbsp;");
    	$abc--;
     	for($j=1; $j<=2*$i-1; $j++)
      	echo("*");
       	echo("<br>");
 	}

 	$abc=$no/3;
 	for($i=3; $i<=$no/3; $i++)
  	{
  		echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
   		for($j=1; $j<$abc; $j++)
    	echo("&nbsp;&nbsp;");
    	$abc--;
     	for($j=1; $j<=2*$i-1; $j++)
      	echo("*");
      	echo("<br>");
  	}

	$abc=$no/2;
 	for($i=4; $i<=$no/2; $i++)
  	{
  		echo("&nbsp");
   		for($j=1; $j<$abc; $j++)
    	echo("&nbsp;&nbsp;");
    	$abc--;
     	for($j=1; $j<=2*$i-1; $j++)
      	echo("*");//Enter The AnyThing In Place Of ( * ) Like Any Key For Change Pattern
      	echo("<br>");
  	}

  	for($i=0;$i<$no/3;$i++)
  	{
  		echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");//Extra Space For Maintain Tree 
  		echo("*****");//Enter The AnyThing In Place Of ( * ) Like Any Key For Change Pattern
  		echo("<br>");
  	}
  	echo "&nbsp;&nbsp;&nbsp;"."*************************************";