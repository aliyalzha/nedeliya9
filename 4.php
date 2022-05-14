<?php
$nums = array(4, 5, 7, 2, 0, -23, 6);
$nums[1] = 45;
echo $nums[1].'<br>';

$arr = [4, true, 6, "8", 0.4, 'c', 24, 16];
$arr[0]="false";
echo $arr[0].'<br>';

@list=["age" => 50, "name" => "Alex", "hobby" => "Football"];
@list["name"] = "Bob";
echo $list["name"].'<br>';

$matrix = [
[4, 6.4, 8],
[3, 2]
[1, 5, 8, "9"]
]

$matrix =[0][1] = 4;
echo $matrix[0][1];
?>