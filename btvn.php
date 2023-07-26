<?php
//1. đếm số ký tự trong một chuỗi sử dụng hàm strlen().
function countCharacter($str) {
    return strlen($str);
}
echo "Bài 1: " . strlen("Mai Huong"). "<br />";

//2. đếm số từ trong một chuỗi sử dụng hàm str_word_count().
function wordCount($str) {
    return str_word_count($str);
}
echo "Bài 2: " .  str_word_count("Lap trinh PHP"). "<br />";

//3. đảo ngược một chuỗi sử dụng hàm strrev().
function reverString($input){
    return strrev($input);
}
echo "Bài 3: " . reverString( input: 'mai huong'). "<br />";

//4. tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
function fstrpos($input1,$input2) {
    return strpos($input1,$input2);
}
echo "Bài 4: " . fstrpos("Mai Huong", "Huong"). "<br />";

//5. thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
function fstrReplace($input1,$input2,$input3) {
    return str_replace($input1,$input2,$input3);
}
echo "Bài 5: " . fstrReplace("Mai", "Nguyen", "Mai Huong"). "<br />";

//6. kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().

//7. chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
function changeToUpper($str) {
    return strtoupper($str);
}
echo "Bài 7: " . changeToUpper("tai lieu php"). "<br />";
//8. chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
function changeToLower($str) {
    return strtolower($str);
}
echo "Bài 8: " . changeToLower("HOC PHP"). "<br />";

//9. chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
function stringConversion($str) {
    return ucwords($str);
}
echo "Bài 9: " . ucwords("hoc phan PHP"). "<br />";

//10. loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
function removeWhitespace($str) {
    return trim($str);
}
echo "Bài 10: " . trim("   Khoảng trắng "). "<br />";

//11. loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
function removeCharacter($str){
    return ltrim($str);
}
echo "Bài 11: " .  ltrim("Beauty","B"). "<br />";

//12. loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
function removeLast($str){
    return rtrim($str);
}
echo "Bài 12: " .  rtrim("Beauty","B"). "<br />";

//13. tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().

//14. nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().

//15. thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
function addString($str){
    return str_pad($str);
 }
 echo "Bài 15: " . str_pad("đầu chuỗi",25,"Thêm vào ",STR_PAD_LEFT). "<br />";

//16. kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().

//17.  kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().

//18. thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
function replaceCharacter($string){ 
    return preg_replace($string);  
} 
echo "Bài 18: "  . preg_replace("/-/","!","bai-tap-php");
//19. kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
//20. kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
