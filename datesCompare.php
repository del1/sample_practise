<?php
$limitFromDate1='2017-06-01'; //smalldate
$limitToDate1='2017-06-30';
$newFromDate = '2017-06-15'; //big
$newToDate = '2017-07-15';
$limitFromDate2='2017-07-01';
$limitToDate2='2017-07-31';

echo "<pre>";
//echo strtotime($newFromDate);
echo "<br>";
//echo strtotime($newToDate);
//strtotime($newFromDate)
if((strtotime($newFromDate) < strtotime($limitFromDate1)))
{
	//echo "mahesh";
}else
{
	//echo "dipali";
}

$datediff = strtotime($limitToDate1) - strtotime($newFromDate);

echo floor($datediff / (60 * 60 * 24));
