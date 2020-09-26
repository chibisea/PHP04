<?php
function myFuncA(array $array){
    $num = 1;
    foreach($array as $value) {
        $num *= $value;
    }
    return $num;
}   
$list = [1, 3, 5, 7, 9];
echo myFuncA($list);