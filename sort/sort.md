1. Bubble sort: lặp lại việc đổi chỗ 2 phần tử liên tiếp đến khi dãy được sắp xếp.
- Độ phức tạp O(n2)
- Nhược điểm: không nhận diện được dãy đã có thứ tự hay có thứ tự từng phần.

2. Shaker sort: cải tiến của Bubble sort, nhận biết đc mảng đã sắp xếp.
- Tối ưu hơn khi trong mảng có các phần tử đã có thứ tự.
- Một lần lặp sẽ đưa phần tử lớn nhất về cuối, phần tử nhỏ nhất về đầu do lưu vị trí phần tử khi kết thúc vòng lặp.
- Độ phức tạp O(n2)

3. Selection sort: chọn phần tử nhỏ nhất
- chọn phần tử đầu tiên là phần tử nhỏ nhất là a
- so sánh a với n-1 phần tử còn lại, rồi chọn phần tử thứ 2 so sánh với n-2 phần tử còn lại
- Độ phức tạp: n(n-1)/2

4. Interchange sort: bắt đầu từ đầu dãy, so sánh với n -1 phần tử còn lại, rồi đổi chỗ trực tiếp.

5. Insertion sort: duyệt từng phần tử và chèn phần tử đó vào đúng vị trí trong mảng con đã sắp xếp.
- lấy phần tử đầu tiên coi là dãy có thứ tự
- insert phân tử tiếp theo vào dãy sao cho có thứ tự
- thực hiện insert đến hết mảng
- Độ phức tạp : n(n-1)/2

6. Quick sort: chia mảng thành các mảng con dựa vào pivot đã chọn, tiến trình tiếp tục cho đến khi độ đài của
               các mảng con đều bằng 1
- Độ phức tạp: O(n2)

7. Merge sort: tách mảng ra thành 2 mảng con cho tới khi mảng con chỉ còn lại 1 phần tử, sau đó trộn các mảng con lại với nhau.
- Độ phức tạp O(nlogn)