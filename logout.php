<?php 
session_start();
//menghapus session tetapi tetap ada cookie agar ketika user mengakses ulang web bisa tinggal autentikasi akun
$_SESSION['session_username'] = "";
$_SESSION['session_password'] = "";
session_destroy();

$cookie_name = "cookie_username";
$cookie_value = "";
$time = time() - (60 * 60);
setcookie($cookie_name,$cookie_value,$time,"/");

$cookie_name = "cookie_password";
$cookie_value = "";
$time = time() - (60 * 60);
setcookie($cookie_name,$cookie_value,$time,"/");

header("location:index.php");