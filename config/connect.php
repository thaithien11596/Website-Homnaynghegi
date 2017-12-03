<?php 

	$connect = mysqli_connect("localhost","root","","music_database");
	$language = mysqli_query($connect,'set names utf8');
	if(!$connect){
		die('Error ! Can not connect to Database') . mysqli_connect_error($connect);
	}
 ?>