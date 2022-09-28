<?php
$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr2 = range(1, 10); // Создает массив [1, 2, 3, ... 10] 
$multiple = [];

for ($i = 0; $i < count($arr1); $i++) {
    $multiple[] = $arr1[$key] * $arr2[$key];
}

print_r($multiple);
