<?php
$html = file_get_contents("http://commons.wikimedia.org/wiki/Special:Random/File");
$dom = new DOMDocument();	
$dom->loadHTML($html);
print_r($dom);
$remoteImage = $dom->getElementById("file")->firstChild->attributes[0]->textContent;
header("Content-type: image/png");
header('Content-Length: ' . filesize($remoteImage));
echo file_get_contents($remoteImage);
?>