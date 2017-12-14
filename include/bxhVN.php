<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<style>
	
	.list-group-item a {text-decoration: none; color: #cccccc}
	.list-group-item a:hover {text-decoration: none; color: white}
	.list-group-item{background: linear-gradient(#211f1f,#080808);}
	ul.list-group.col4lgt {color: white;font-size: 19px;}
	.divcasi{width:auto;}
	.singbxh{margin-left: 10px;margin-right: 10px;font-weight: bold;font-size: 20px;}
	@media(max-width:1200px){
		ul.list-group.col4lgt {color: white;font-size: 16px;}
		.singbxh{margin-left: 10px;margin-right: 10px;font-weight: bold;font-size: 18px}	
	}
	@media(max-width:576px){
		.divluotnghe{display: none}
	}


</style>
<body>
	<?php 
	include('header1.php');
		include ("../config/config.php");
		include (ROOT."/include/function.php");
		spl_autoload_register("loadClass");

		$music=new Music();
		$data=$music->bxhVN();
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
		 	<div class="col-sm-8">
		 		<h3 style="padding:5px; text-align: center; font-weight:bold; border-radius: 5px; color: white; background: linear-gradient(#383838,#212121);border: 1px solid gray;box-shadow: 0 0 1px 1px;">Bảng xếp hạng nhạc Việt</h3>
				  <ul class="list-group">
					 
					  <?php 
					  $i = 1;
					  foreach ($data as $result): ?>

					  	 <li class="list-group-item"><span style="color:white;font-size: 20px;font-weight: bold"><div style="width: 35px;height: 38px;float: left;"><?= $i; $i =$i +1; ?>- </div></span><a href="sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=1"><img src="../img/<?= $result['imageBaihat'] ?>" alt="" style="width:50px; height: 50px;border:1px solid black; box-shadow: 0 0 3px 1px #afacac;float: left"></a><a href="sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=1" class="singbxh"><?= $result['TenBaihat'] ?></a><div class="divluotnghe" style="color: #cccccc;font-size: 15px;float: right">Lượt nghe: <?= number_format($result['LuotngheBaihat']) ?></div><div class="divcasi" ><a href="#" style="margin-left: 10px;margin-right: 10px;font-weight: bold;font-size: 15px;"><?= $result['HotenCasi'] ?></a></div>
					 	 </li>
					  <?php endforeach ?>
					   
					
					</ul>
		 	</div>
		 	<div class="col-sm-4 col4bxhUSUK">
		 		<h3 style="padding:5px; text-align: center; font-weight:bold; border-radius: 5px; color: white; background: linear-gradient(#383838,#212121);">Có thể bạn muốn nghe</h3>
		 		<div class="list-group">
				    <a href="#" class="list-group-item active">First item</a>
				    <a href="#" class="list-group-item">Second item</a>
				    <a href="#" class="list-group-item">Third item</a>
			  	</div>
		 	</div>
		 </div> <!-- Hết row-->

	 </div>
	 </div> <!-- Hết container4-->
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
	
	 <script src="../js/jquery.min.js"></script>  
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>
</html>


