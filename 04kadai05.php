<?php
$text = "<h1>朝は晴れ</h1>"
. "<p>、でも午後から雨</p>";  
echo strip_tags($text);
echo "\n";
$fruits = ["apple", "orange", "melon"];
array_push($fruits, "banana", "pineapple");
print_r($fruits);
echo "\n";
$array1 = array("cat" => "猫", "dog" => "犬");
$array2 = array("monkey" => "猿", "cat" => "たま");
$result = array_merge($array1, $array2);
print_r($result);
echo "\n";
echo date('Y-m-d');
echo "\n";
echo time();
echo "\n";
echo date("M-d-Y", mktime(0, 0, 0, 9, 26, 2020));
?>