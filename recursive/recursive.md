- hàm đc gọi trong thân hàm
- phải xác định đc điểm dừng
- các chỉ thị lệnh ở sau nó và các biến local sẽ được lưu vào trong Stack khi hàm gọi chính nó,
  Hết đệ quy(đạt đến điều kiện dừng) thì gọi Stack lấy dữ liệu ra chạy tiếp phần đang chạy dở.
  ===> nhưng nếu là return hàm đệ quy luôn thì sẽ ko lưu gì cả.
  vd:
  		recurion($a, $b);
  		if(something){
  			recusion($b, $c);
  		}
  		==> chạy hết recursion($a, $b) xong, quay lại chạy tiếp recursion($b, $c)

  		return recursion($a, $b);
  		if(something) recursion($b, $c)
  		==> chỉ chạy recursion($a, $b), còn recursion($b, $c) thì xin lỗi tình yêu.

- thường dùng cho menu

- Linear recursion: hàm chỉ gọi lại chính nó 1 lần
- Tail recursion: lời gọi đệ quy đc thực hiện ở cuối hàm, ko lưu stack vì gọi ở cuối.
- Binary recursion: gọi 2 lần chính nó
- Exponential recursion(đệ quy đa tuyến): trong hàm có vòng lặp gọi lại đệ quy của chính nó.
  Độ phức tạp thường là O(a^n)
- Nested recursion.
- Mutual recursion (đệ quy tương hỗ): gọi đệ quy thông quay một hàm khác.
