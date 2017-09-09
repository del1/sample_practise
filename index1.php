<?php
$path='./images/';
$files=checkFilesInFolder($path);

foreach ($files as $key => $value) {
	unlink($path.$value);
}

function checkFilesInFolder($filepath)
{//get the list of files in the directory
 	$filelist=array();
	if(file_exists($filepath))
	{
		if ($handle = opendir($filepath.'/')) {
    		while (false !== ($entry = readdir($handle))) {
	        	if ($entry != "." && $entry != "..") {
	        	$ib[]=$entry;
	        	}
    		}
    		closedir($handle);
		}
		if (isset($ib)) {
			$filelist=@$ib;
		}
	}//end of if file_exist
	return $filelist;
}
