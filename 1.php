<?php
function summary($arr){
	$summa = 0;
	foreach ($arr as $value) {
		$summa += $value;
	}
	return $summa;
}
$list=[5, 7, 3];
echo summary($list)."br";
echo summary([5, 2, 3])."<br>";
?>