<?php
// biến bên ngoài
$location = 'vietnam';

// Khai báo closure 
// $city là tham số
// $location là biên bên ngoài mà closure muôn sử dụng
// tham số và biến bên ngoài khác nhau ở chỗ khi gọi closure bạn sẽ phải 
// truyền tham số còn biên bên ngoài thi không cần truyền
// Biến location sẽ không bị ảnh hưởng nếu thay đổi trong hàm
// Nếu muốn thay đổi hãy thêm & reference
$go = function($city) use ($location){
	echo 'go ' . $city . ' ' . $location; 
};

// khai báo và gọi closure
$city = 'ha noi';
$go($city);
