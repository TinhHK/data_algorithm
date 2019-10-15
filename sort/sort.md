1. Bubble sort: xuất phát từ cuối dãy, đổi chỗ các cặp phần tử kế cận để đưa phần tử nhỏ hơn
trong cặp phần tử đó về vị trí đứng đầu dãy hiện hành, sau đó ko xét đến nó ở bước tiếp theo.
- Lặp lại xử lý trên cho đến khi ko còn gặp phần tử nào để xét
- Độ phức tạp O(n2)
- Nhược điểm: không nhận diện được dãy đã có thứ tự hay có thứ tự từng phần.

2. Shaker sort: cải tiến của Bubble sort, nhận biết đc mảng đã sắp xếp.
- Tối ưu hơn khi trong mảng có các phần tử đã có thứ tự.
- Một lần lặp sẽ đưa phần tử nhỏ nhất về đầu, phần tử lớn nhất về cuối.
- Độ phức tạp O(n2)

3. Selection sort: chọn phần tử nhỏ nhất
- chọn phần tử đầu tiên là phần tử nhỏ nhất là a
- tìm phần tử nhỏ nhất của n -1 phần tử còn lại trong mảng là b
- so sánh a với b, nếu a > b, swap a và b, tiếp tục vòng lặp với selection là phần tử thứ 2.
- Độ phức tạp: n(n-1)/2

4. Insertion sort
- lấy phần tử đầu tiên coi là dãy có thứ tự
- insert phân tử tiếp theo vào dãy sao cho có thứ tự
- thực hiện insert đến hết mảng
- Độ phức tạp : n(n-1)/2

5. Interchange Sort: ngược lại với Bubble sort (chạy từ cuối dãy)

6. Quick sort: chia ra 3 phần left[] < pivot < right[], chia nhỏ tiếp đến khi
               mảng left còn 2 phần tử và mảng right còn 2 phần tử.
- Độ phức tạp: O(n2)