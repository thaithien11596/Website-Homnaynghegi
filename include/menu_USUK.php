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
	.col-sm-4.noidungtrai1 img{width: 40px;height: 40px; border: 1px solid gray}
	.col-sm-4.noidungtrai1 h3{padding:5px; text-align: center; font-weight:bold; border-radius: 5px; color: white; background: linear-gradient(#383838,#212121);margin-top: 0px;border: 1px solid gray}
	.slidemenu a:hover{background-color: orange;text-decoration: none; color: orange}
	@media(max-width: 1200px){ .col-sm-4.noidungtrai1 h3{font-size: 19px;}
	.col-sm-4.noidungtrai1 img{width: 30px;height: 30px}
	}
	@media(max-width: 992px){
		a.list-group-item.list-group-item-action.lstbxh {
    height: 54px;
</style>
<body>
	<?php 
		include ("../config/config.php");

		include (ROOT."/include/function.php");
		spl_autoload_register("loadClass");

		/*require('../config/connect.php');
		
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
				$database = mysqli_query($connect,$sql);*/


	?>
		<div class="container container4">
			<div class="noidungbh">
				<div class="baihatnb">
					<a href="menu_VN.php" id="#1">Nhạc Âu Mỹ nghe nhiều trong tuần<span class="glyphicon glyphicon-menu-right menuright"></span></a>
				</div> <!-- Hết bài hát nổi bật-->
				<p style="color: #e6e6e6" class="pbaihat">Tuyển tập các ca khúc được yêu thích nhất.</p>
					<div class="row row1">
<?php
		$music=new Music();
		$data1= $music->indexbxhUSUK();
		$data=$music->demgetsongUSUK();
		$demUSUK = count($data);

?>
						<div class="col-sm-8 colbhnoibat">
								
								<?php 
										
										if(isset($_GET['trangUSUK'])){
											 $i = $_GET['trangUSUK'];
											 $sl = ($i - 1)*12;
											$music=new Music();
											$data=$music->getsongUSUK($sl);
									
																			
										foreach ($data as $result) {
												
											
											//while ($result){
											// echo '<pre>';
											// print_r($row);
											// echo $dem = count_array($result);?>
			
													<div class="col-sm-3 col-xs-3 noidungnoibat">
													<a href="sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=<?= $result['idQuocgia'] ?>">
														<div class="card">
															<img class="card-img-top" src="../img/<?= $result['imageBaihat'] ?>" alt="Card image cap" style="width: 100%">
															<span class="glyphicon glyphicon-play iconplay" ></span>
															<div class="fade1">Lượt nghe:<?= number_format($result['LuotngheBaihat']) ?></div>
															<div class="card-block">
																<h4 class="card-title"><?= $result['HotenCasi'] ?></h4>
															</div>
														</div>
													</a>
													</div>

											<?php
											}

										}		
						
									 ?>		
									 <div class="row col-sm-12 slidemenu" style="left:15px; padding: 0px;top:15px" >
											<p style="float: left;margin-left: 13px;font-size: 16px;color: white">Bạn đang ở trang: <?= $i ?></p>
									 		<p style="float: right; color:white">Trang:
						<?php  for($i=1;$i<=round($demUSUK/12);$i++) { ?>
						<a href="menu_USUK.php?trangUSUK=<?= $i ?>" style="color:white;background-color: black;padding: 10px;"><?= $i ?></a>
							
						<?php } ?>
					</p>
									 </div>					
				



					</div> <!-- Hết col-sm-8 -->
					<div class="col-sm-4 noidungtrai1" style="left:23px;top: 15px;border: 0px;height: auto;box-shadow: 0 0 0 0!important">
				<h3 >Bảng xếp hạng nhạc Âu Mỹ</h3>
		 		<div class="list-group">
		 			<?php foreach ($data1 as $result): ?>
		 				    <a href="sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=<?= $result['idQuocgia'] ?>" class="list-group-item list-group-item-action lstbxh"><img src="../img/<?= $result['imageBaihat'] ?>" alt="" > <?= $result['TenBaihat'] ?></a>
				  
		 			<?php endforeach ?>
				  
			  	</div>
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
						
							<div id="demo1" class="collapse colp" style="margin-top: 5px">
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