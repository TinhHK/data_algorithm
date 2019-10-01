<?php
// gọi đệ quy trong hàm 1 lần, lưu kết quả tạm vào stack LIFO, ví dụ: 4* factorial(3), lưu 4* vào stack. 
// đến điều kiện dừng sẽ lấy kết quả từ stack ra và tính tính tiếp.

function factorial($n)
{
	if($n == 0) 
		return 1;
	return $n * factorial($n - 1);
}

echo factorial(4);