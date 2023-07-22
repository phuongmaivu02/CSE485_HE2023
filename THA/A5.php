<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];

// Lấy giá trị = 3 mà có key là 'b' từ mảng trên
$value1 = $a['b']['o']['b'];

// Lấy giá trị = 1 mà có key là 'c' từ mảng trên
$value2 = $a['a']['c'];

// Lấy thông tin của phần tử có key là 'a'
$info_a = $a['a'];

// Hiển thị kết quả
echo "Giá trị có key 'b' là: " . $value1 ."<br>";
echo "Giá trị có key 'c' là: " . $value2 . "<br>";
echo "Thông tin phần tử có key 'a': ";
print_r($info_a);
