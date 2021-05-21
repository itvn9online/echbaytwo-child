<?php

/*
*/

/*
* Khai báo cho phần child theme trong file functions.php
*/
define( 'EB_CHILD_THEME_URL', __DIR__ . '/' );
//echo 'EB_CHILD_THEME_URL: ' . EB_CHILD_THEME_URL . '<br>';



// custom phần ngôn ngữ, mỗi child theme đều có thể tạo thêm ngôn ngữ riêng bằng cách mở comment function này ra
/*
function WGR_child_lang () {
	global $___eb_lang;
	global $eb_type_lang;
	
	$___eb_lang[eb_key_for_site_lang . 'new_key'] = 'new_key';
	$eb_type_lang[eb_key_for_site_lang . 'new_type_key'] = 'number|textarea|default: text';
}
*/


// chức năng replace các trường dữ liệu {tmp.*} còn dư thừa trong website, thường là những website có nhu cầu sử dụng trường dữ liệu tùy chỉnh
// -> web nào sử dụng thì mở function này ra là nó sẽ được kích hoạt trong plugin
/*
function WGR_cleanup_tmp_in_child_theme ($html) {
	return EBE_arr_tmp(array(
		'number' => 0,
		'string' => '&nbsp;'
	), $html);
}
*/



