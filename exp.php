<?php
/**
* 
*/
class Exp
{
	//public $abc;
/*	function __construct()
	{
		echo "constructor called"."<br>";
	}

	function __destruct()
	{
		//var_dump($this);
		echo "<br>"."destructor called"."<br>";
	}*/

	function __get($name)
	{
		echo "__get executed with name $name "."<br>";
	}
	function __set($name , $value)
	{
		echo "__set executed with name $name , value $value"."<br>";
	}
	function __call($name , $parameter)
	{
		$a = print_r($parameter , true); //taking recursive array in string
		echo "__call executed with name $name , parameter $a"."<br>";
	}
	static function __callStatic($name , $parameter)
	{
		$a = print_r($parameter , true); //taking recursive array in string
		echo "__callStatic executed with name $name , parameter $a"."<br>";
	}
}
$obj = new Exp();
$obj->abc=3;
$app = $obj->pqr;//__get will triggerd
$obj->getMyName('ankur' , 'techflirt', 'etc');//__call willl be executed
Exp::xyz('1' , 'qpc' , 'test');//__callstatic will be executed
//echo "<br>"."me in between"; //__construct get automatically executed and print 1 on screen
//unset($objT);//__destruct triggers and print 2.

?>