<?php

/*
*/

/*
* Khai báo cho phần child theme trong file functions.php
*/
define( 'EB_CHILD_THEME_URL', dirname( __FILE__ ) . '/' );
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


