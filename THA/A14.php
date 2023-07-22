<?php
$array1 = [
    [77, 87],
    [23, 45]
];
$array2 = [
    'giá trị 1', 'giá trị 2'
];

$result = [];
foreach ($array1 as $key => $value) {
    $result[$key][] = $array2[$key];
    $result[$key] = array_merge($result[$key], $value);
}


print_r($result);
