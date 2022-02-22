<?php
$ip = $_SERVER['REMOTE_ADDR'];
setcookie('accept_cookie', $ip, time() + 365*24*60*60, 'php/accept_cookie.php/footer.views.php', '', true, true);

if(isset($_COOKIE['accept_cookie'])) {
   $showcookie = false;
} else {
   $showcookie = true;
}
require_once('php/accept_cookie.php/footer.views.php');
?>