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
	.col-sm-4.noidungtrai1 {width: 356px;height: 356px;left: 23px;padding: 0;border: 1px solid black;box-shadow: 0 0 5px 2px;top: 15px;}
	.slidemenu a:hover{background-color: orange;text-decoration: none; color: orange}
</style>
<body>

		<div class="container container4">
			<div class="noidungbh">
				
<?php
		$music=new Music();
		$indexMusic=new indexMusic();
		$indexbxhVN=$indexMusic->indexbxhVN();
		$indexbxhUSUK=$indexMusic->indexbxhUSUK();
		if(isset($_GET['idQg']) && isset($_GET['idTl'])){$idQg = $_GET['idQg']; $idTl = $_GET['idTl'];}
		$data=$music->demgetsongnew($idQg,$idTl);
		$demnewVN = count($data);
		foreach ($data as $result) {
			
		}

?>
						<div class="baihatnb">
					<p style="color: white"><?= $result['TenTheloai'] ?> mới<span class="glyphicon glyphicon-menu-right menuright"></span></p>
				</div> <!-- Hết bài hát nổi bật-->
				<p  class="pbaihat" style="color: white">Tuyển tập các ca khúc mới nhất.</p>
					<div class="row row1">
						<div class="col-sm-8 colbhnoibat" style="min-height: 800px">
								
								<?php 
										
										if(isset($_GET['trang'])){
											 $i = $_GET['trang'];
											 $sl = ($i - 1)*12;
											$music=new Music();
											$data=$music->getsongnew($sl,$idQg,$idTl);
									
																			
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
															<div class="fade1"><span class="glyphicon glyphicon-headphones"> </span> <?= number_format($result['LuotngheBaihat']) ?></div>
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
						<?php  for($i=1;$i<=ceil($demnewVN/12);$i++) { ?>
						<a href="menunewSong.php?trang=<?= $i ?>&&idQg=<?= $idQg ?>&&idTl=<?= $idTl ?>" style="color:white;background-color: black;padding: 10px;"><?= $i ?></a>
							
						<?php } ?>
					</p>
									 </div>					
				



					</div> <!-- Hết col-sm-8 -->
					<?php 
						if($idQg==1){?>
						<div class="col-sm-4 noidungtrai2">
						<a href="bxh.php?idQg=1"><p>Bảng xếp hạng nhạc Việt</p></a>
														
								<div class="list-group lstbxh">
									<?php 
										foreach ($indexbxhVN as $result) {

										//while ($result1 = mysqli_fetch_assoc($database1)) { ?>
										    <a href="include/sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=<?= $result['idQuocgia'] ?>" class="list-group-item list-group-item-action lstbxh"><img src="../img/<?= $result['imageBaihat'] ?>" alt="" style="width: 40px"> <?= $result['TenBaihat'] ?></a>
									<?php
										}

									 ?>
								

								</div>
					</div> 
					<?php	}if($idQg==2){?>
						<div class="col-sm-4 noidungtrai2">
						<a href="bxh.php?idQg=2"><p>Bảng xếp hạng nhạc Âu Mỹ</p></a>
														
								<div class="list-group lstbxh">
									<?php 
										foreach ($indexbxhUSUK as $result) {

										//while ($result1 = mysqli_fetch_assoc($database1)) { ?>
										    <a href="include/sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=<?= $result['idQuocgia'] ?>" class="list-group-item list-group-item-action lstbxh"><img src="../img/<?= $result['imageBaihat'] ?>" alt="" style="width: 40px"> <?= $result['TenBaihat'] ?></a>
				<?php	}}
					 ?>
		
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