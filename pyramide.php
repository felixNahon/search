<?php 	 
function draw(){
	$file = fopen('./data.txt','r+'); 
	while(($line=fgets($file,4000))!==false){
		echo $line . "<br>";
	} 
}
draw(); 

