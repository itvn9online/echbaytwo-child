<?php
/*
 * Trang này dùng để code trực tiếp 1 giao diện theo dạng đặt module trong widget, sa đó gọi nội dung widget ra đây
 * Để sử dụng trang trong wordpress, tạo 1 trang tĩnh xong kết nối bằng hàm dưới:
 * [get_child_php_template path="home.php"]
 * - Thay home.php thành tên file tương ứng
 * - File phải được đặt trong thư mục tên là: shortcode
 * - Thuộc tính "Giao diện": For Widget Shortcode (hide title)
 *
 * Danh sách toàn bộ các sidebar được hỗ trợ:
 https://github.com/itvn9online/echbaydotcom/blob/master/index2.php#L662
 *
 *
 * main sidebar
 echo _eb_echbay_sidebar( id_default_for_get_sidebar );
 * home sidebar home_content_top_sidebar, home_content_sidebar, home_content_bottom_sidebar
 echo _eb_echbay_sidebar( 'home_content_bottom_sidebar', '', 'div', 1, 0 );
 * các widget thông qua widget shortcode và phần ngôn ngữ của echbaydotcom
 WGR_echo_shortcode('home_shortcode');
 *
 *
 */