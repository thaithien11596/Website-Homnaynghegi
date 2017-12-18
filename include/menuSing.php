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
		a.list-group-item.list-group-item-action.lstbxh {height: 54px;}
		.col-sm-4.noidungtrai1 img{width: 20px;height: 20px}
	}
</style>
<body>
	<?php 
		
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
		<div class="container container4" style="min-height: 800px">
			<div class="noidungbh">
				
<?php
		$idQg = $_GET['idQg'];
		$idTl = $_GET['idTl'];
		$music=new Music();
		$data2= $music->bxhGe($idQg);
		$data1= $music->demgetsong($idQg,$idTl);
		$dem= count($data1);


?>					

					
					<?php 
					// $idQg = $_GET['idQg'];
					if(isset($_GET['trang'])){
						 $i = $_GET['trang'];
						 $sl = ($i - 1)*12;
						$data=$music->getsong($sl,$idQg,$idTl); foreach ($data as $result) {		} ?>

						<div class="baihatnb">
					<p style="color:white"><?= $result['TenTheloai'] ?> nghe nhiều<span class="glyphicon glyphicon-menu-right menuright"></span></p>
				</div> <!-- Hết bài hát nổi bật-->
				<p style="color: #e6e6e6" class="pbaihat">Tuyển tập các ca khúc được yêu thích nhất.</p>
					<div class="row row1">
						<div class="col-sm-8 colbhnoibat">
																
									<?php	foreach ($data as $result) {
												
											
											//while ($result){
											// echo '<pre>';
											// print_r($row);
											// echo $dem = count_array($result);?>
			
													<div class="col-sm-3 col-xs-3 noidungnoibat">
													<a href="sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=<?= $result['idQuocgia'] ?>">
														<div class="card">
															<img class="card-img-top" src="../img/<?= $result['imageBaihat'] ?>" alt="Card image cap" style="width: 100%">
															<span class="glyphicon glyphicon-play iconplay" ></span>
															<div class="fade1"><span class="glyphicon glyphicon-headphones"> </span> <?= number_format($result['LuotngheBaihat']) ?></div>
															<div class="card-block">
																<h4 class="card-title"><a href="detail_singer.php?idsinger=<?= $result['idCasi'] ?>&&idQg=<?= $result['idQuocgia'] ?>"><?= $result['HotenCasi'] ?></a></h4>
															</div>
														</div>
													</a>
													</div>

											<?php
											}?>
											<div class="row col-sm-12 slidemenu" style="left:15px; padding: 0px;top:15px" >
											<p style="float: left;margin-left: 13px;font-size: 16px;color: white">Bạn đang ở trang: <?= $i ?></p>
									 		<p style="float: right; color:white">Trang:
						<?php  for($i=1;$i<=ceil($dem/12);$i++) { ?>
						<a href="menuSing.php?trang=<?= $i ?>&&idQg=<?= $result['idQuocgia'] ?>&&idTl=<?= $result['idTheloai'] ?>" style="color:white;background-color: black;padding: 10px;"><?= $i ?></a>
							
						<?php } ?>
					</p>
									 </div>		

					<?php } ?>
						
							 	
				
				



					</div> <!-- Hết col-sm-8 -->
					<div class="col-sm-4 noidungtrai1" style="left:23px;top: 15px;border: 0px;height: auto;box-shadow: 0 0 0 0!important">
				<h3 >Bảng xếp hạng nhạc <?= $result['TenQuocgia'] ?></h3>
		 		<div class="list-group">
		 			<?php foreach ($data2 as $result): ?>
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
						<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo" style="background: linear-gradient(#981414,#6f1616);">Giới thiệu</button>
						
							<div id="demo" class="collapse" style="text-align: justify;">
						    	<p style="font-size: 18px;">Website nghe nhạc trực tuyến homnaynghegi.tk nhằm mục đích mang âm nhạc đến với gần với tất cả mọi người hay những người yêu nhạc thông qua mạng Internet.</p>
						  </div>
						  <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo4" style="background: linear-gradient(#981414,#6f1616);">FAQs</button>
						
							<div id="demo4" class="collapse" style="text-align: justify;">
						    	<p style="font-size: 18px;">Coming Soon</p>
						  </div>
					</div>
					<div class="col-sm-6">
						<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo1" style="background: linear-gradient(#981414,#6f1616);">Hỗ trợ</button>
						
							<div id="demo1" class="collapse colp" style="margin-top: 5px;text-align: justify;">
							  <p style="font-size: 18px"><span class="glyphicon glyphicon-map-marker"></span> Việt Nam, HCM City</p>
						      <p style="font-size: 18px"><span class="	glyphicon glyphicon-earphone"></span> 0906929906</p>
						      <p style="font-size: 18px"><span class="glyphicon glyphicon-envelope"></span> thaithien11596@gmail.com</p>
						  </div>
						  	<button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo2" style="background: linear-gradient(#981414,#6f1616);">Góp ý</button>
						
							<div id="demo2" class="collapse colp" style="margin-top: 5px">
							  <p style="font-size: 18px;"><span class="glyphicon glyphicon-map-marker"></span> Mọi ý kiến đóng góp website vui lòng Email về thaithien11596@gmail.com hoặc SĐT: 0906929906</p>
						    
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