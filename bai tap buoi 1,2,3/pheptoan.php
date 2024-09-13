<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php
    $a = 3;
    $b = 5;
    echo " A= ", $a ,"<br>";
    echo " B= ", $b ,"<br>";
    echo "A+B =", $a + $b , "<br>";
    ?>
    <?php
    $GPA = 3.0;
    switch ($GPA) {
        case 0.5;
        echo "điểm F";
        break;
        case 1.0;
        echo "điểm D";
        break;
        case 3.0;
        echo "điểm B";  
        break;
    default:
        echo "không có";
        break;
    }
    ?>

    
</body>
</html>

<?php
for ($i = 0; $i < 21; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ","<br>";
    }
}
?>

<?php
function isPrime($num) {
    // Số nguyên tố phải lớn hơn 1
    if ($num <= 1) {
        return false;
    }
    // Kiểm tra các số từ 2 đến căn bậc hai của số đó
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Kiểm tra một số
$number = 29;
if (isPrime($number)) {
    echo "$number là số nguyên tố","<br>";
} else {
    echo "$number không phải là số nguyên tố","<br>";
}
?>

<?php
function calculateAverage($arr) {
    // Kiểm tra nếu mảng trống
    if (empty($arr)) {
        return 0;  // Trả về 0 nếu mảng trống
    }

    // Tính tổng các phần tử trong mảng
    $sum = array_sum($arr);

    // Tính trung bình cộng bằng tổng chia cho số phần tử trong mảng
    $average = $sum / count($arr);

    return $average;
}

// Ví dụ sử dụng hàm
$arr = [1,2,3];
$average = calculateAverage($arr);
echo "Trung bình cộng của mảng là: " . $average;
?>

<?php
// Khởi tạo mảng kết hợp danh sách lớp 01
$class_list = [
    1 => "Nguyễn Văn A",
    2 => "Trần Thị B",
    3 => "Lê Văn C",
    4 => "Phạm Thị D",
    5 => "Hoàng Văn E"
];

// Sử dụng hàm array_rand để chọn một số thứ tự ngẫu nhiên
$random_key = array_rand($class_list);

// In ra số thứ tự kèm tên học sinh
echo "Số thứ tự: " . $random_key . " - Tên: " . $class_list[9];
?>

