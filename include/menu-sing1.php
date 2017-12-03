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
						baihat.idBaihat,
						chitietbaihat.idChitietbaihat,
						chitietbaihat.imageBaihat,
						chitietbaihat.LuotngheBaihat,
						casi.idCasi,
						casi.HotenCasi,
						chitietbaihat.LinkBaihat,
						baihat.TenBaihat
						FROM
						baihat
						INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
						INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
						ORDER BY
						chitietbaihat.LuotngheBaihat DESC
						";
				$database = mysqli_query($connect,$sql);

	?>
		<div class="container container4">
			<div class="noidungbh">
				<div class="baihatnb">
					<a href="#" id="#1">Nghe nhiều trong tuần<span class="glyphicon glyphicon-menu-right menuright"></span></a>
				</div> <!-- Hết bài hát nổi bật-->
				<p style="color: black" class="pbaihat">Tuyển tập các ca khúc được yêu thích nhất.</p>
					<div class="row row1">

						<div class="col-sm-8 colbhnoibat">
								
								<?php 
											
											
											while ($result = mysqli_fetch_assoc($database)){
											// echo '<pre>';
											// print_r($row);
											// echo $dem = count_array($result);?>
			
													<div class="col-sm-3 col-xs-3 noidungnoibat">
													<a href="sing-form.php?id=<?= $result['idChitietbaihat'] ?>">
														<div class="card">
															<img class="card-img-top" src="../img/<?= $result['imageBaihat'] ?>" alt="Card image cap" style="width: 100%">
															<span class="glyphicon glyphicon-play iconplay" ></span>
															<div class="fade1">Lượt nghe:<?= $result['LuotngheBaihat'] ?></div>
															<div class="card-block">
																<h4 class="card-title"><?= $result['HotenCasi'] ?></h4>
															</div>
														</div>
													</a>
													</div>

											<?php
											}
											
									 ?>							
								
						
					</div> <!-- Hết col-sm-8 -->
				</div>
			</div>
		</div>
		 <script src="../js/jquery.min.js"></script>  
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>
</html>