<?php
function info(){
	global $x;
	$x=0;
}

function click(){
	static $count;
	$count++;
	echo $count.'<br>';
}

click();
click();
click();

?>