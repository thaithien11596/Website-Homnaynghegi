<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<style>
	.col-sm-4.noidungtrai1 img{width: 40px;height: 40px; border: 1px solid gray}
	.col-sm-4.noidungtrai1 h3{padding:5px; text-align: center; font-weight:bold; border-radius: 5px; color: #dedede; background: linear-gradient(#383838,#212121);margin-top: 0px;border: 1px solid gray}
	.col-sm-4.noidungtrai1 h3:hover{color: white}
	.list-group-item a {text-decoration: none; color: #cccccc}
	.list-group-item a:hover {text-decoration: none; color: white}
	.list-group-item{background: linear-gradient(#211f1f,#080808);}
	ul.list-group.col4lgt {color: white;font-size: 19px;}
	.divcasi{width:auto;}
	.singbxh{margin-left: 10px;margin-right: 10px;font-weight: bold;font-size: 20px;}
	@media(max-width:1200px){
		ul.list-group.col4lgt {color: white;font-size: 16px;}
		.singbxh{margin-left: 10px;margin-right: 10px;font-weight: bold;font-size: 18px}	
		.col-sm-4.noidungtrai1 img{width: 30px;height: 30px; border: 1px solid gray}
	}
	@media(max-width: 992px){.col-sm-4.noidungtrai1 img{width: 20px;height: 20px}
	.col-sm-4.noidungtrai1 h3 {font-size: 18px;}
}
	@media(max-width:576px){
		.divluotnghe{display: none}
	}


</style>
<body>
	<?php 
	include('header1.php');

		if(isset($_GET['idQg'])){ $idQg = $_GET['idQg'];}
		$indexmusic=new indexMusic();
		$music=new Music();
		$bxh=$music->bxh($idQg);
		$indexbxhVN = $indexmusic->indexbxhVN();
		$indexbxhUSUK = $indexmusic->indexbxhUSUK();
		foreach ($bxh as $result) {
			
		}
		// $sql = "SELECT
		// 					baihat.TenBaihat,
		// 					baihat.idBaihat,
		// 					chitietbaihat.idChitietbaihat,
		// 					chitietbaihat.imageBaihat,
		// 					chitietbaihat.LuottaiBaihat
		// 					FROM
		// 					baihat
		// 					INNER JOIN chitietbaihat ON chitietbaihat.idBaihat = baihat.idBaihat
		// 					WHERE
		// 					baihat.idQuocgia = 1
		// 					ORDER BY
		// 					chitietbaihat.LuottaiBaihat DESC
						
		// 					";
		// $daatabse = mysqli_query($connect, $sql);

	 ?>
	 <div class="container">
	 	 <div class="row">
		 	<div class="col-sm-8" style="min-height: 1000px">
		 		<h3 style="padding:5px; text-align: center; font-weight:bold; border-radius: 5px; color: white; background: linear-gradient(#383838,#212121);box-shadow: 0 0 1px 1px;border: 1px solid gray">Bảng xếp hạng nhạc <?= $result['TenQuocgia'] ?></h3>
				  <ul class="list-group">
					 
					  <?php 
					  $i = 1;
					  foreach ($bxh as $result): ?>

					  	 <li class="list-group-item"><span style="color:white;font-size: 20px;font-weight: bold"><div style="width: 35px;height: 38px;float: left;"><?= $i; $i =$i +1; ?>- </div></span><a href="sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>idQg=<?= $result['idQuocgia'] ?>"><img src="../img/<?= $result['imageBaihat'] ?>" alt="" style="width:50px; height: 50px;border:1px solid black; box-shadow: 0 0 3px 1px #afacac;float: left"></a><a href="sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=<?= $result['idQuocgia'] ?>" class="singbxh"><?= $result['TenBaihat'] ?></a><div class="divluotnghe" style="color: #cccccc;font-size: 15px;float: right">Lượt nghe: <?= number_format($result['LuotngheBaihat']) ?></div><div class="divcasi" ><a href="detail_singer.php?idsinger=<?= $result['idCasi'] ?>&&idQg=<?= $result['idQuocgia'] ?>" style="margin-left: 10px;margin-right: 10px;font-weight: bold;font-size: 15px;"><?= $result['HotenCasi'] ?></a></div>
					 	 </li>
					  <?php endforeach ?>
					   
					
					</ul>
		 	</div>
		 	<?php if($idQg == 1){?>
					<div class="col-sm-4 noidungtrai1" style="left:23px;top: 19px;border: 0px;height: auto;box-shadow: 0 0 0 0!important">
				<a href="bxh.php?idQg=2" style="text-decoration: none"><h3>Bảng xếp hạng nhạc Âu-Mỹ</h3></a>
		 		<div class="list-group">
		 			<?php foreach ($indexbxhVN as $result): ?>
		 				    <a href="sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=2" class="list-group-item list-group-item-action lstbxh"><img src="../img/<?= $result['imageBaihat'] ?>" alt="" > <?= $result['TenBaihat'] ?></a>
				  
		 			<?php endforeach ?>
				  
			  	</div>
			</div> 
		 <?php	} ?>
		 <?php if($idQg == 2){?>
					<div class="col-sm-4 noidungtrai1" style="left:23px;top: 19px;border: 0px;height: auto;box-shadow: 0 0 0 0!important">
				<a href="bxh.php?idQg=1" style="text-decoration: none"><h3>Bảng xếp hạng nhạc Việt Nam</h3></a>
		 		<div class="list-group">
		 			<?php foreach ($indexbxhUSUK as $result): ?>
		 				    <a href="sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=1" class="list-group-item list-group-item-action lstbxh"><img src="../img/<?= $result['imageBaihat'] ?>" alt="" > <?= $result['TenBaihat'] ?></a>
				  
		 			<?php endforeach ?>
				  
			  	</div>
			</div> 
		 <?php	} ?>
		 	
		 </div>
	 </div>
	 </div> <!-- Hết container4-->
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
					<a id="back-to-top" href="#" class="btn btn-danger btn-lg back-to-top" role="button" title="Nhấn để về đầu trang" data-toggle="tooltip" data-placement="left" style="background: linear-gradient(#1d769e,#266582);border:1px solid blue;border-radius: 5px"><span class="glyphicon glyphicon-chevron-up"></span></a>
				</div>
			</div><!-- Hết Footer -->
	</div> <!-- Hết jumbotron-->
	
	 <script src="../js/jquery.min.js"></script>  
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/backtop.js"></script>

</body>
</html>


