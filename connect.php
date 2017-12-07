<?php 

	$connect = mysqli_connect("localhost","id3672668_thaithien11596","0906929906","id3672668_music_database");
	$language = mysqli_query($connect,'set names utf8');
	if(!$connect){
		die('Error ! Can not connect to Database') . mysqli_connect_error($connect);
	}
 ?>