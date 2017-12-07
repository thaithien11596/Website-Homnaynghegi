<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome to my webiste</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/bootstrap-theme.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css?v=1.0">
	<link rel="stylesheet" href="../css/style-sing.css">
	
</head>
<style type="text/css">
	.container.container3 {min-height: 1100px;}
	.jumbotron.jbstr{margin-top: 0px;padding: 10px;min-height: 200px;margin-bottom: 5px;width: 765px	}
	.jumbotron.jbstr p{font-size: 17px;text-align: justify;color:#dedede ;clear: both;line-height: 24px;}
	label a{font-size: 20px;color: #dedede;}
	.noidungtrai1{top: 30px;}
	.col-sm-4.noidungtrai1 {width: 354px;height: 358px;left: 23px;padding: 0;top: 52px;border: 1px solid black;box-shadow: 0 0 5px 2px;}
	.col-sm-3.col-xs-3.noidungnoibat {left: 15px;top: 20px;text-align: center; height: 200px;margin-top: 0px !important}
	/*.fade1 {background: #3330309e;width: 165px !important;height: 165px !important;position: absolute;z-index: 1;transition: 0.6s;top: 0px;opacity: 0;color: #dad5d5;font-size: 13px;}*/
	span.glyphicon.glyphicon-play.iconplay {position: absolute;z-index: 2;left: 61px !important;top: 65px !important;font-size: 15px;padding: 10px;color: #fdfcfc;border: 2px solid white;border-radius: 50%;opacity: 0;transition: 0.6s;}
	.card.cardsing { border: 1px solid black;box-shadow: 0 0 3px 1px;}
	@media(max-width: 1200px){.jumbotron.jbstr{width: 635px	}}
	@media(max-width: 992px){.jumbotron.jbstr{width: 491px	}}
	@media(max-width: 768px){ audio.audiosing {width: 490px !important;}.col-sm-4.noidungtrai1 {opacity: 1}}


</style>
<body>
	<?php 

			require('../config/connect.php');
			require('header1.php');
			 if(isset($_GET['idbh'])){
								$bh = $_GET['idbh'];
							}  
				$sql = "SELECT
baihat.idBaihat,
chitietbaihat.idChitietbaihat,
chitietbaihat.imageBaihat,
chitietbaihat.NgaydangBaihat,
chitietbaihat.LuotngheBaihat,
chitietbaihat.LinkBaihat,
baihat.TenBaihat,
baihat.LoiBaihat,
casi.idCasi,
casi.HotenCasi
FROM
baihat
INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
INNER JOIN casi ON chitietbaihat.idCasi = casi.idCasi
WHERE
chitietbaihat.idChitietbaihat = $bh";
				
				$database = mysqli_query($connect, $sql);
		 ?>
	
 
		<div class="container container3">
			<div class="row">
				<div class="col-sm-8 col8sing">
						<?php 

								while ($result = mysqli_fetch_assoc($database)) { 
									// echo '<pre>';
									// print_r($result);
										// if($result['idChitietbaihat'] = $result['idCasi'] ){
										?>
										    <label for="" style="color:white; font-size: 18px; color: #dedede;margin-top: 20px;">Tên bài hát: <?= $result['TenBaihat'] ?> - <a href="#" style="color: #dedede"><?= $result['HotenCasi'] ?></a></label>
											<audio class="audiosing" src="../<?= $result['LinkBaihat'] ?>" type="audio/mp3" autobuffer autoloop loop controls autoplay></audio>
													<div class="jumbotron jbstr">
														<h4 class="display-3" style="float: left;">Lời bài hát: <?= $result['TenBaihat'] ?></h4>
														<h4 class="display-3" style="float:right;">Lượt nghe: <?= $result['LuotngheBaihat'] ?></h4>
														<p class="lbh"><?= $result['LoiBaihat'] ?></p>
												<!-- 		<a href="singer_form.php">Báo lỗi</a>
														<a href="singer_form.php">Góp ý lyrics</a> -->
								
													</div>
										<?php				
								 } 
						 ?>
						
					
			<div class="col-sm-12 col12sing" style="padding:0px">
				<div class="col-sm-3 col-xs-3 noidungnoibat ">
														<a href="include/sing-form.php?id=<?= $result['idChitietbaihat'] ?>">
															<div class="card cardsing">
																<img class="card-img-top" src="../img/nd20.jpg" alt="Card image cap" style="width: 100%">
																<span class="glyphicon glyphicon-play iconplay" ></span>
																<div class="fade1">Lượt nghe:<?= $result['LuotngheBaihat'] ?></div>
																<div class="card-block">
																	<h4 class="card-title"><a href="include/singer_form.php"><?= $result['HotenCasi'] ?></a></h4>
																</div>
															</div>
														</a>
														</div>

									<div class="col-sm-3 col-xs-3 noidungnoibat">
									<a href="include/sing-form.php?id=<?= $result['idChitietbaihat'] ?>">
										<div class="card cardsing">
											<img class="card-img-top" src="../img/nd21.jpg" alt="Card image cap" style="width: 100%">
											<span class="glyphicon glyphicon-play iconplay" ></span>
											<div class="fade1">Lượt nghe:<?= $result['LuotngheBaihat'] ?></div>
											<div class="card-block">
												<h4 class="card-title"><a href="include/singer_form.php"><?= $result['HotenCasi'] ?></a></h4>
											</div>
										</div>
									</a>
									</div>

									<div class="col-sm-3 col-xs-3 noidungnoibat">
									<a href="include/sing-form.php?id=<?= $result['idChitietbaihat'] ?>">
										<div class="card cardsing">
											<img class="card-img-top" src="../img/nd22.jpg" alt="Card image cap" style="width: 100%">
											<span class="glyphicon glyphicon-play iconplay" ></span>
											<div class="fade1">Lượt nghe:<?= $result['LuotngheBaihat'] ?></div>
											<div class="card-block">
												<h4 class="card-title"><a href="include/singer_form.php"><?= $result['HotenCasi'] ?></a></h4>
											</div>
										</div>
									</a>
									</div>
										<div class="col-sm-3 col-xs-3 noidungnoibat">
									<a href="include/sing-form.php?id=<?= $result['idChitietbaihat'] ?>">
										<div class="card cardsing">
											<img class="card-img-top" src="../img/nd23.jpg" alt="Card image cap" style="width: 100%">
											<span class="glyphicon glyphicon-play iconplay" ></span>
											<div class="fade1">Lượt nghe:<?= $result['LuotngheBaihat'] ?></div>
											<div class="card-block">
												<h4 class="card-title"><a href="include/singer_form.php"><?= $result['HotenCasi'] ?></a></h4>
											</div>
										</div>
									</a>
									</div>

			</div>
			</div> <!-- Hết col8 -->
			<div class="col-sm-4 noidungtrai1" style="left:23px">
					<a href="#"><img src="../img/quangcao.jpg" alt="Image-quangcao" style="width:100%; height: 100%"></a>
			</div> 
		</div><!-- Hết row -->
	</div> <!-- Hết container3-->
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