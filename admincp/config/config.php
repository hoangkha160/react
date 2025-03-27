<!-- kết nối cơ sở dữ liệu -->
<?php 
	
	$mysqli = new mysqli("localhost","root","","web_mysqli","3306");

	// kiểm tra kết nối 
	if ($mysqli->connect_errno) {
	  echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
	  exit();
	}
	ini_set('display_errors','Off');
	ini_set('error_reporting', E_ALL );
	define('WP_DEBUG', false);
	define('WP_DEBUG_DISPLAY', false);
?>