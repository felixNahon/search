<?php 	 
function draw($file){

	$file = fopen($file, 'r');

	while(($line=fgets($file,4000))!==false){
		echo $line . "<br>";
	} 

	fclose($file);
}
