<?php
function calculateOperations($arrs) {
    $sum = 0;
    $product = 1;
    $difference = 0;
    $quotient = 0;

    // Tính tổng, tích, hiệu và thương của các phần tử trong mảng
    foreach ($arrs as $value) {
        $sum += $value;
        $product *= $value;
        $difference -= $value;
        $quotient /= ($value !== 0) ? $value : 1;
    }

    // Hiển thị kết quả
    echo "Tổng các phần tử = " . implode("+", $arrs) . " = " . $sum . "<br>";
    echo "Tích các phần tử = " . implode("*", $arrs) . " = " . $product . "<br>";
    echo "Hiệu các phần tử = " . implode("-", $arrs) . " = " . $difference . "<br>";
    echo "Thương các phần tử = " . implode("/", $arrs) . " = " . $quotient . "<br>";
}

// Mảng số nguyên
$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];

// Gọi hàm để tính và hiển thị kết quả
calculateOperations($arrs);
