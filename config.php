<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'jewellary');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

define('SERVER_PATH', $_SERVER['DOCUMENT_ROOT'] . '/mentor/');
define('SITE_PATH', 'http://localhost/mentor/');


define('HINFO_IMAGE_SERVER_PATH', SERVER_PATH . 'college_img/h_info/');
define('HINFO_IMAGE_SITE_PATH', SITE_PATH . 'college_img/h_info/');

define('HSTAFF_IMAGE_SERVER_PATH', SERVER_PATH . 'college_img/h_staff/');
define('HSTAFF_IMAGE_SITE_PATH', SITE_PATH . 'college_img/h_staff/');


define('ABOUT_IMAGE_SERVER_PATH', SERVER_PATH . 'college_img/about/');
define('ABOUT_IMAGE_SITE_PATH', SITE_PATH . 'college_img/about/');

define('COURSE_IMAGE_SERVER_PATH', SERVER_PATH . 'college_img/course/');
define('COURSE_IMAGE_SITE_PATH', SITE_PATH . 'college_img/course/');

define('STAFF_IMAGE_SERVER_PATH', SERVER_PATH . 'college_img/staff/');
define('STAFF_IMAGE_SITE_PATH', SITE_PATH . 'college_img/staff/');

define('EVENTS_IMAGE_SERVER_PATH', SERVER_PATH . 'college_img/events/');
define('EVENTS_IMAGE_SITE_PATH', SITE_PATH . 'college_img/events/');

if ($conn == false) {
    die('Error:Cannot Connect');
}
function get_safe_value($conn, $str)
{
  if ($str != '') {
    $str = trim($str);
    return strip_tags(mysqli_real_escape_string($conn, $str));
  }
}
?>