
<?php
// code đổ dữ liệu sql vào websever admin
$objPdo = new PDO("mysql:host=localhost; dbname=music_database", "root", "") or die('Kết Nối Database Thất Bại!!! :(');
$objPdo->query("set names 'utf8' ");
?>