
Video clip hướng dẫn tạo và sử dụng child theme cho `echbaydotcom`:
https://www.youtube.com/watch?v=GG-o5OJ0-Wo


== DANH SÁCH CÁC FILE ĐƯỢC TẠO VÀ NẠP MẶC ĐỊNH ==

`images-child`:
- Là thư mục chứa ảnh cho các file CSS trong thư mục `ui`.

`ui`:
- Toàn bộ các file template, file javascript và file css tổng cho việc tạo theme sẽ nằm trong này.

`functions.php`:
- Dùng để định nghĩa thư mục chính cho child theme hoặc có thể viết các function PHP riêng của code vào trong này. Các function vẫn đảm bảo đầy đủ yếu tố và quy tắc chung của wordpress.

`style.css`:
- Mục đích chính là đặt tên cho child theme, không viết CSS của child theme vào đây, mà hãy viết vào file d.css trong thư mục `ui`.

`ui/d.css`:
- Đây là file css tổng của theme, các đoạn mã CSS không thuộc bất kỳ template nào hoặc css dùng chung cho toàn trang thì viết vào đây.

`ui/d.js`:
- Đây là file javascript tổng của theme, file này sẽ được nạp trong tất cả các trang, các hàm ở đây sẽ được viết để nối tiếp hoặc phủ định các hàm javascript mặc định của theme gốc.
