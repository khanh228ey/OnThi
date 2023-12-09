<?php

function isChinhPhuong($number) {
    // Kiểm tra xem số có lớn hơn hoặc bằng 0 không
    if ($number < 0) {
        return false;
    }

    // Tính căn bậc hai của số và kiểm tra xem nó có phải là số nguyên hay không
    $squareRoot = sqrt($number);

    // Nếu bình phương của căn bậc hai bằng số gốc, thì đây là số chính phương
    return ($squareRoot * $squareRoot) == $number;
}

// Ví dụ sử dụng hàm
$numberToCheck = 25;
$result = isChinhPhuong($numberToCheck);

if ($result) {
    echo "{$numberToCheck} là số chính phương.";
} else {
    echo "{$numberToCheck} không phải là số chính phương.";
}

?>