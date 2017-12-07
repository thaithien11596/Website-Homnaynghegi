<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		require('header1.php');
		require('../config/connect.php');
		$sql = "SELECT
							baihat.TenBaihat,
							baihat.idBaihat,
							chitietbaihat.idChitietbaihat,
							chitietbaihat.imageBaihat,
							chitietbaihat.LuottaiBaihat
							FROM
							baihat
							INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
							WHERE
							baihat.idQuocgia = 1
							ORDER BY
							chitietbaihat.LuottaiBaihat DESC
						
							";
		$daatabse = mysqli_query($connect, $sql);

	 ?>
	 <div class="container">
	 	 <div class="row">
		 	<div class="col-sm-8">
		 		<h3>Bảng xếp hạng nhạc Việt</h3>
				  <div class="list-group">
				    <a href="#" class="list-group-item">Top 1</a>
				    <a href="#" class="list-group-item">Top 2</a>
				    <a href="#" class="list-group-item">Top 3</a>
				  </div>
		 	</div>
		 </div>
	 </div>
	
	 <script src="../js/jquery.min.js"></script>  
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>
</html>


<?php 
		
		require('../config/connect.php');
				$sql = "SELECT
						baihat.idBaihat,
						chitietbaihat.idChitietbaihat,
						chitietbaihat.imageBaihat,
						chitietbaihat.LuotngheBaihat,
						casi.idCasi,
						casi.HotenCasi,
						chitietbaihat.LinkBaihat,
						baihat.TenBaihat,
						baihat.idQuocgia,
						casi.idQuocgia
						FROM
						baihat
						INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
						INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
						WHERE
						baihat.idQuocgia = 1
						ORDER BY
						chitietbaihat.LuotngheBaihat DESC
						";
				$database = mysqli_query($connect,$sql);

	?>