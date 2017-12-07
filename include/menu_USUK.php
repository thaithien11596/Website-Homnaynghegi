<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<?php 
		require('header1.php');
	 ?>

</head>
<style>
	
		.col-sm-4.noidungtrai1 {
	    width: 356px;
	    height: 356px;
	    left: 23px;
	    padding: 0;
	    border: 1px solid black;
	    box-shadow: 0 0 5px 2px;
	    top: 15px;
	}
</style>
<body>
	<?php 
		include ("../config/config.php");

		include (ROOT."/include/function.php");
		spl_autoload_register("loadClass");

		$music=new Music();
		$data=$music->getsongUSUK();
		// require('../config/connect.php');
		// 		$sql = "SELECT
		// 				baihat.idBaihat,
		// 				chitietbaihat.idChitietbaihat,
		// 				chitietbaihat.imageBaihat,
		// 				chitietbaihat.LuotngheBaihat,
		// 				casi.idCasi,
		// 				casi.HotenCasi,
		// 				chitietbaihat.LinkBaihat,
		// 				baihat.TenBaihat,
		// 				baihat.idQuocgia,
		// 				casi.idQuocgia
		// 				FROM
		// 				baihat
		// 				INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
		// 				INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
		// 				WHERE
		// 				baihat.idQuocgia = 2
		// 				ORDER BY
		// 				chitietbaihat.LuotngheBaihat DESC
		// 				";
		// 		$database = mysqli_query($connect,$sql);

	?>
		<div class="container container4">
			<div class="noidungbh">
				<div class="baihatnb">
					<a href="menu_USUK.php" id="#1">Nhạc Âu Mỹ nghe nhiều trong tuần<span class="glyphicon glyphicon-menu-right menuright"></span></a>
				</div> <!-- Hết bài hát nổi bật-->
				<p style="color: black" class="pbaihat">Tuyển tập các ca khúc Âu Mỹ được yêu thích nhất.</p>
					<div class="row row1">

						<div class="col-sm-8 colbhnoibat">
								
								<?php 
											
											
											foreach ($data as $result) {
											// echo '<pre>';
											// print_r($row);
											// echo $dem = count_array($result);?>
			
													<div class="col-sm-3 col-xs-3 noidungnoibat">
													<a href="sing-form.php?idbh=<?= $result['idChitietbaihat'] ?>">
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
					<div class="col-sm-4 noidungtrai1">
						<a href="#"><img src="../img/quangcao.jpg" alt="Image-quangcao" style="width:100%; height: 100%;"></a>
					</div> 
				</div>
			</div>
		</div>
		<div class="jumbotron jbt">
				<div class="container container5">
					<h3>Thông tin</h3>
					<hr class="m-y-md">
					<div class="row">
						<div class="col-sm-6">
						<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo">Giới thiệu</button>
						
							<div id="demo" class="collapse">
						    	Website nghe nhạc trực tuyến homnaynghegi.tk nhằm mục đích mang âm nhạc đến với gần với tất cả mọi người hay những người yêu nhạc thông qua mạng Internet.
						  </div>
					</div>
					<div class="col-sm-6">
						<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo1">Hỗ trợ</button>
						
							<div id="demo1" class="collapse colp">
							  <p><span class="glyphicon glyphicon-map-marker"></span> Việt Nam, HCM City</p>
						      <p><span class="glyphicon glyphicon-phone"></span> 0906929906</p>
						      <p><span class="glyphicon glyphicon-envelope"></span> thaithien11596@gmail.com</p>
						  </div>

					</div>
					</div>
					
					  
				</div><!-- Hết container5-->
				 <div class="footer">
				<div class="container container6">
					<p>Copyright &copy;2017 by Homnaynghegi.tk</p>
					<p class="pleft">Designed by BanhMi3T</p>
				</div>
			</div><!-- Hết Footer -->
	</div> <!-- Hết jumbotron-->
</body>
</html>