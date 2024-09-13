

<?php
function check_ptb2($a, $b, $c)
{
    if ($a == 0) {
        return "Đây không phải là phương trình bậc hai.";
    }
    $delta = $b * $b - 4 * $a * $c;
    if ($delta < 0) {
        return "Phương trình vô nghiệm.";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        return "Phương trình có nghiệm kép: x = " . $x;
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        return "Phương trình có hai nghiệm phân biệt: x1 = " . $x1 . ", x2 = " . $x2;
    }
}
// Ví dụ sử dụng
$a = 1;
$b = -2;
$c = 1;
echo check_ptb2($a, $b, $c);
echo "<br>";
?>


<?php
function draw_HCN($width, $height)
{
    for ($i = 1; $i <= $height; $i++) {
        for ($j = 1; $j <= $width; $j++) {
            if ($i == 1 || $i == $height || $j == 1 || $j == $width) {
                echo "*";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>"; 
    }
}
// Ví dụ sử dụng: In ra hình chữ nhật rỗng 5x7
$width = 7;
$height = 5;
draw_HCN($width, $height);
?>



<?php
function TBC_mang($array)
{
    if (empty($array)) {
        return 0;
    }
    $sum = array_sum($array);
    $count = count($array);
    $average = $sum / $count;
    return $average;
}

// Ví dụ sử dụng
$numbers = [1, 2, 3, 4, 5];
echo "Trung bình cộng của mảng là: " . TBC_mang($numbers);
?>

=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            width: 500px;
            height: 500px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<?php
echo "Hello, this is PHP script";
echo '<h1 style="color: blue; text-align: center;">Xin chào TMU</h1>';
echo'<img src="avatar-anh-meo-cute-3.jpg" alt="">'

?>
 
 <p>Xin chào</p>

</body>
</html>
>>>>>>> 95decf33ed22af1f3c53a11148397753ab101c9c
