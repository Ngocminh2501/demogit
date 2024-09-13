
<?php
// 4.Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos()
$string = "Hello, World!";
$search = "World";
$position = strpos($string, $search);

if ($position !== false) {
    echo "Chuỗi '$search' được tìm thấy ở vị trí: $position";
} else {
    echo "Chuỗi '$search' không được tìm thấy.";
}
?>



<?php
//7.Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
$string = "Hello, World!";
$upper_string = strtoupper($string);
echo "Chuỗi sau khi chuyển thành chữ hoa: $upper_string";
?>



<?php
//14.Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
$array = ["Hello", "World", "PHP"];
$string = implode(" ", $array);
echo "Chuỗi sau khi nối: $string";
?>



<?php
//16.Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
$string = "Hello, World!";
$substring = "World!";

if (endsWith($string, $substring)) {
    echo "Chuỗi '$string' kết thúc bằng '$substring'.";
} else {
    echo "Chuỗi '$string' không kết thúc bằng '$substring'.";
}
?>


<?php
//17.Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
function contains($string, $substring) {
    return strstr($string, $substring) !== false;
}
$string = "Hello, World!";
$substring = "World";

if (contains($string, $substring)) {
    echo "Chuỗi '$string' chứa chuỗi con '$substring'.";
} else {
    echo "Chuỗi '$string' không chứa chuỗi con '$substring'.";
}
?>

<?php
//18.Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một kí tự khác sử dụng hàm preg_replace().

$string = "Hello@World!";
$cleaned_string = preg_replace("/[^a-zA-Z0-9]/", "_", $string);
echo "Chuỗi sau khi thay thế: $cleaned_string";
?>


