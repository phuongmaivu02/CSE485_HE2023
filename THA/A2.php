<?php
$arrs = ['đỏ', 'xanh', 'cam', 'trắng'];

// Các màu yêu thích của các người
$anh_color = $arrs[0];
$son_color = $arrs[3];
$thang_color = $arrs[2];
$toi_color = $arrs[3];

// Chuỗi mẫu
$template = "%s là màu yêu thích của anh, %s là màu yêu thích của sơn, %s là màu yêu thích của thắng, còn màu yêu thích của tôi là màu %s";

// Thay thế các giá trị vào chuỗi mẫu
$result = sprintf($template, $anh_color, $son_color, $thang_color, $toi_color);

// Hiển thị kết quả
echo $result;
