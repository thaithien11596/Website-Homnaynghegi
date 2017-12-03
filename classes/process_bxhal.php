<?php 

	require('/config/connect.php');
		$sql = "SELECT
		chitietalbum.LuotngheAlbum,
		album.idAlbum,
		album.TenAlbum,
		chitietalbum.idchitietAlbum,
		chitietalbum.NgaydangAlbum
		FROM
		album
		INNER JOIN chitietalbum ON chitietalbum.idAlbum = album.idAlbum
		ORDER BY
		chitietalbum.LuotngheAlbum DESC";
		$database3 = mysqli_query($connect,$sql);
 ?>