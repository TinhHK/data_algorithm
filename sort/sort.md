1. Bubble sort: xuất phát từ cuối dãy, đổi chỗ các cặp phần tử kế cận để đưa phần tử nhỏ hơn
trong cặp phần tử đó về vị trí đứng đầu dãy hiện hành, sau đó ko xét đến nó ở bước tiếp theo.
- Lặp lại xử lý trên cho đến khi ko còn gặp phần tử nào để xét
- Độ phức tạp O(n2)
- Nhược điểm: không nhận diện được dãy đã có thứ tự hay có thứ tự từng phần.

2. Shaker sort: cải tiến của Bubble sort, nhận biết đc mảng đã sắp xếp.
- Tối ưu hơn khi trong mảng có các phần tử đã có thứ tự.
- Một lần lặp sẽ đưa phần tử nhỏ nhất về đầu, phần tử lớn nhất về cuối.
- Độ phức tạp O(n2)