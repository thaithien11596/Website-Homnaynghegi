<?php 
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang chủ-Homnaynghegi.tk</title>
	<link href='https://fonts.googleapis.com/css?family=Crimson+Text' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=0.5, minimum-scale=0.5, user-scalable=no; target-densityDpi=device-dpi" />
	<link rel="shortcut icon" type="image/x-icon" href="img/logo.jpg" style="border-radius: 50%" />
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css" >
	
</head>
<style>
	 @media(max-width: 768px){  .col-sm-4.noidungtrai1{
        display: none;}}
</style>
<body style=" font-family: 'Crimson+Text';font-size: 16px">
	<canvas id="canvas" style="position: fixed;"></canvas>
	
<script>

</script>
		<?php 
			
			include ("config/config.php");

			include (ROOT."/include/function.php");
			spl_autoload_register("loadClass");

			$music=new indexMusic();
			$indexVNMusic=$music->indexVNMusic();
			$indexbxhVN=$music->indexbxhVN();
			$indexRandMusic=$music->indexRandMusic();
			$indexbxhUSUK=$music->indexbxhUSUK();
			$indexbhNew=$music->indexbhNew();
			$indexMenuSing=$music->indexMenuSing();
			$bxhQg=$music->indexbxhQg();
			$getCasi=$music->indexgetCasi();
			$indexgetNhacsi=$music->indexgetNhacsi();			
			$indexAlbum=$music->indexAlbum();			

		 ?>
		<nav class="navbar navbar-inverse navbar1">
		  <div class="container container1">
		    <div class="navbar-header header1">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menutop">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand" href="index.php" title="Homnaynghegi.tk là website nghe nhạc trực tuyến, kết nối những người có cùng sở thích thành một cộng đồng rộng lớn, trong môi trường lành mạnh và thân thiện">Homnaynghegi.tk</a>
		    </div>
		    <div class="collapse navbar-collapse" id="menutop">
		      <ul class="nav navbar-nav menutop1 ">
		        <li class="active"><a href="index.php">Trang chủ</a></li>
		        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bảng xếp hạng<b class="caret"></b></a>
			          <ul class="dropdown-menu dropdownmenu" style="z-index: 999999999">
			          	<?php foreach ($bxhQg as $result): ?>
			          		 <li style="text-align: center"><a href="include/bxh.php?idQg=<?= $result['idQuocgia'] ?>"><?= $result['TenQuocgia'] ?></a></li>
			          	<?php endforeach ?>
			           
			          
			          </ul>

		        	</li>
		        <form class="navbar-form navbar-left formsearch1" method="get" action="include/searchSing.php" >
		      <div class="input-group">
		        <input type="text" class="form-control" placeholder="Nhập nội dung cần tìm" name="search">
		        <div class="input-group-btn">
		          <button class="btn btn-default" type="submit">
		            <i class="glyphicon glyphicon-search icons"></i>
		          </button>
		        </div>
		      </div>
		    </form>
		      </ul>
		      <ul class="nav navbar-nav navbar-right dangnhap" >
		      	<?php 
		      		if(isset($_SESSION['user'])){?>
						 <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?= $_SESSION['user'] ?><b class="caret"></b></a>
			          <ul class="dropdown-menu dropdownmenu">
			            <li><a href="include/info-user.php">Thông tin</a></li>
			            <li><a href="#">Playlist</a></li>
			            <li><a href="include/process_signout.php"><span class="glyphicon glyphicon-off" style="color:#bbb2b2"></span> Đăng xuất</a></li>
			          </ul>

		        	</li>
				<?php
		      		}else {?>
		      			<li class="li1"><a href="include/signin-form.php"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>
		        <li class="li2"><a href="include/signup-form.php"><span class="glyphicon glyphicon-log-in"></span> Đăng kí</a></li>
		      	<?php	}
		      	 ?>
		        
		      </ul>
		    </div>
		  </div><!-- hết container 1 -->
	 	</nav><!-- hết navbar -->

		<nav class="navbar navbar-inverse navbar2">
		    <div class="container container2">
			    <div class="collapse navbar-collapse">
			      <ul class="nav navbar-nav menutop2">
			        <li><a href="index.php" >Hôm nay nghe gì ?</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Bài hát<b class="caret"></b></a>
			          <ul class="dropdown-menu dropdownmenu" style="z-index: 999999999;float: left;">
			        <!--     <li><a href="include/menu_VN?trangVN=1">Việt Nam</a></li>
			            <li><a href="include/menu_USUK.php?trangUSUK=1">Âu Mỹ</a></li> -->
						<?php foreach ($indexMenuSing as $result): ?>
			          		 <li style="text-align: center"><a href="include/menuSing.php?trang=1&&idQg=<?= $result['idQuocgia'] ?>&&idTl=<?= $result['idTheloai'] ?>"><?= $result['TenTheloai'] ?></a></li>
			          	<?php endforeach ?>
			           
			          </ul>

		        	</li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Album<b class="caret"></b></a>
			          <ul class="dropdown-menu dropdownmenu" style="z-index: 999999999;float: left;">
			        <!--     <li><a href="include/menu_VN?trangVN=1">Việt Nam</a></li>
			            <li><a href="include/menu_USUK.php?trangUSUK=1">Âu Mỹ</a></li> -->
						<?php foreach ($indexAlbum as $result): ?>
			          		 <li style="text-align: center"><a href="include/menuAlbum.php?trang=1&&idQg=<?= $result['idQuocgia'] ?>"><?= $result['TenQuocgia'] ?></a></li>
			          	<?php endforeach ?>
			           
			          </ul>

		        	</li>
			        <li class="disabled"><a href="#">Video</a></li>
			         <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ca sĩ<b class="caret"></b></a>
			          <ul class="dropdown-menu dropdownmenu" style="z-index: 999999999">
			          	<?php foreach ($getCasi as $result): ?>
			          		 <li style="text-align: center"><a href="include/singerForm.php?idQg=<?= $result['idQuocgia'] ?>&&trangsinger=1"><?= $result['TenQuocgia'] ?></a></li>
			          	<?php endforeach ?>
			            <!-- <li><a href="include/singerForm.php?idQg=1&&trangsinger=1">Việt Nam</a></li>
			            <li><a href="include/singerFormUSUK.php?trangsingerUSUK=1">Âu Mỹ</a></li> -->
			          	
			          </ul>

		        	</li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ca khúc mới<b class="caret"></b></a>
			          <ul class="dropdown-menu dropdownmenu" style="z-index: 999999999">
			        <!--     <li><a href="include/menu_VN?trangVN=1">Việt Nam</a></li>
			            <li><a href="include/menu_USUK.php?trangUSUK=1">Âu Mỹ</a></li> -->
						<?php foreach ($indexMenuSing as $result): ?>
			          		 <li style="text-align: center"><a href="include/menunewSong.php?trang=1&&idQg=<?= $result['idQuocgia'] ?>&&idTl=<?= $result['idTheloai'] ?>"><?= $result['TenTheloai'] ?></a></li>
			          	<?php endforeach ?>
			           
			          </ul>

		        	</li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nhạc sĩ<b class="caret"></b></a>
			          <ul class="dropdown-menu dropdownmenu" style="z-index: 999999999">
			        <!--     <li><a href="include/menu_VN?trangVN=1">Việt Nam</a></li>
			            <li><a href="include/menu_USUK.php?trangUSUK=1">Âu Mỹ</a></li> -->
						<?php foreach ($indexgetNhacsi as $result): ?>
			          		 <li style="text-align: center"><a href="include/nhacsiForm.php?trangNhacsi=1&&idQg=<?= $result['idQuocgia'] ?>"><?= $result['TenQuocgia'] ?></a></li>
			          	<?php endforeach ?>
			           
			          </ul>

		        	</li>
			        <li class="upload disabled"><a href="#">
		          		<span class="glyphicon glyphicon-cloud-upload iconupload ">Upload</span>
		          	</a></li>
		     	 </ul>
	      
	    		</div><!-- /.navbar-collapse -->
	    	</div><!-- Hết container2-->
		</nav> 
		
		<div class="container container3">
			<div class="row">
				<div class="col-sm-8">
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
									<!-- 	<ol class="carousel-indicators">
											<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
											<li data-target="#carousel-example-generic" data-slide-to="1"></li>
											<li data-target="#carousel-example-generic" data-slide-to="2"></li>
										</ol> -->
										<div class="carousel-inner slideanh" role="listbox">
											<div class="item active">
												<a href="include/sing-form.php?idBh=7&&idQg=1"><img class="d-block w-100" src="img/slide4.jpg" alt="First slide"></a>
											</div>
											<div class="item">
												<a href="include/sing-form.php?idBh=6&&idQg=1"><img class="d-block w-100" src="img/slide2.jpg" alt="First slide"></a>
											</div>
											<div class="item">
												<a href="include/sing-form.php?idBh=5&&idQg=1"><img class="d-block w-100" src="img/slide3.jpg" alt="Second slide"></a>
											</div>
											<!-- <div class="item">
												<a href="#"><img class="d-block w-100" src="img/slide1.jpg" alt="Third slide"></a>
											</div> -->
										</div>
										<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
											<span class="icon-prev" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
											<span class="icon-next" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>	
				</div> <!-- Hết col -->
				<div class="col-sm-4 noidungtrai1">
					<a href="include/menuAlbum.php?trang=1&&idQg=1"><img src="img/chude4.jpg" alt="Image chủ đề" style="width: 100%"></a>
					<a href="include/menuAlbum.php?trang=1&&idQg=2"><img src="img/chude5.jpg" alt="Image chủ đề" style="width: 100%"></a>
					<a href="include/menuAlbum.php?trang=1&&idQg=2"><img src="img/chude6.jpg" alt="Image chủ đề" style="width: 100%"></a>
				</div>
			</div> <!-- Hết row -->
		</div> <!-- Hết container3-->

		<div class="container container4">
			<div class="noidungbh">
				<div class="baihatnb">
					<a href="include/menuSing.php?trang=1&&idQg=1&&idTl=1" id="#1">Nhạc Việt được nghe nhiều nhất<span class="glyphicon glyphicon-menu-right menuright"></span></a>
					<p style="color: #e6e6e6; font-size: 16px" class="pbaihat">Tuyển tập các ca khúc Việt được yêu thích nhất.</p>
					
				</div> <!-- Hết bài hát nổi bật-->
				
					<div class="row row1">

						<div class="col-sm-8 colbhnoibat">
								
								<?php 
											
											foreach ($indexVNMusic as $result) {
											//while ($result = mysqli_fetch_assoc($database)){
											// echo '<pre>';
											// print_r($result);
											// echo $dem = count_array($result);?>
			
													<div class="col-sm-3 col-xs-3 noidungnoibat">
													<a href="include/sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=<?= $result['idQuocgia'] ?>">
														<div class="card">
															<img class="card-img-top" src="img/<?= $result['imageBaihat'] ?>" alt="Card image cap" style="width: 100%">
															<span class="glyphicon glyphicon-play iconplay" ></span>
															<div class="fade1"><span class="glyphicon glyphicon-headphones"> </span> <?= number_format($result['LuotngheBaihat']) ?></div>
															<div class="card-block">
																<h4 class="card-title"><a href="include/detail_singer.php?idsinger=<?= $result['idCasi'] ?>&&idQg=<?= $result['idQuocgia'] ?>"><?= $result['HotenCasi'] ?></a></h4>
															</div>
														</div>
													</a>
													</div>

											<?php
											}
											
									 ?>							
								
						
					</div> <!-- Hết col-sm-8 -->
						<div class="col-sm-4  noidungtrai2">
							<a href="include/bxh.php?idQg=1"><p>Bảng xếp hạng nhạc Việt</p></a>
														
								<div class="list-group lstbxh">
									<?php 
										foreach ($indexbxhVN as $result) {

										//while ($result1 = mysqli_fetch_assoc($database1)) { ?>
										    <a href="include/sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=<?= $result['idQuocgia'] ?>" class="list-group-item list-group-item-action lstbxh"><img src="img/<?= $result['imageBaihat'] ?>" alt="" style="width: 40px"> <?= $result['TenBaihat'] ?></a>
									<?php
										}

									 ?>
								

								</div>
									
						
					</div>
			</div>	<!-- Hêt row1 -->
		
			
			<div class="baihatnb">
					<a href="include/menuSing.php?trang=1&&idQg=1&&idTl=1" id= "id4">Hôm nay nghe gì?<span class="glyphicon glyphicon-menu-right menuright"></span></a>
					<p style="color: #e6e6e6;font-size: 16px" class="pbaihat">Tuyển tập các ca khúc ngẫu nhiên hay nhất.</p>
				</div>
				
				<div class="row row2">
					<div class="col-sm-8 colbhnghenhieu">
						<?php 
							foreach ($indexRandMusic as $result) {
							//while ($result2 = mysqli_fetch_assoc($database2)) {?>
							    <div class="col-sm-3 col-xs-3 noidungnoibat">
								<a href="include/sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=<?= $result['idQuocgia'] ?>">
									<div class="card">
										<img class="card-img-top" src="img/<?= $result['imageBaihat'] ?>" alt="Card image cap" style="width: 100%">
										<span class="glyphicon glyphicon-play iconplay" ></span>
										<div class="fade1"><span class="glyphicon glyphicon-headphones"></span> <?= number_format($result['LuotngheBaihat']) ?></div>
										<div class="card-block">
											<h4 class="card-title"><a href="include/detail_singer.php?idsinger=<?= $result['idCasi'] ?>&&idQg=<?= $result['idQuocgia'] ?>"><?= $result['HotenCasi'] ?></a></h4>
										</div>
									</div>
								</a>
							</div>
							<?php
							}

						 ?>
							
						
					</div> <!-- Hết col-sm-8 nghenhieutrongtuan-->
					<div class="col-sm-4  noidungtrai2">
							<a href="include/bxh.php?idQg=2"><p>Bảng xếp hạng nhạc Âu Mỹ</p></a>
														
								<div class="list-group lstbxh">
									<?php 
										foreach ($indexbxhUSUK as $result) {

										//while ($result1 = mysqli_fetch_assoc($database1)) { ?>
										    <a href="include/sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=<?= $result['idQuocgia'] ?>" class="list-group-item list-group-item-action lstbxh"><img src="img/<?= $result['imageBaihat'] ?>" alt="" style="width: 40px"> <?= $result['TenBaihat'] ?></a>
									<?php
										}

									 ?>
								

								</div>
									
						
					</div>
			</div>	<!-- Hêt row2 -->
			
			<div class="row row3">
				<div class="col-sm-8" style="padding-right: 0px">
					<div class="nhacvietmoi">
						<a href="include/menunewSong.php?trang=1&&idQg=1&&idTl=1">Nhạc Việt mới<span class="glyphicon glyphicon-menu-right menuright"></span>					
						</a>
						<p style="color: #e6e6e6;font-size: 16px" class="pbaihat">Tuyển tập các ca khúc mới nhất.</p>
					</div> <!-- Hết bài hát nổi bật-->
						
						<?php 
							foreach ($indexbhNew as $result) {?>
							<div class="col-sm-6 col-xs-6 col6nhacvietmoileft ">
								<div class="col-sm-3 col3nhacvietmoiright">
									<a href="#">
										<img class="card-img-top" src="img/<?= $result['imageBaihat'] ?>" alt="Card image cap" style="width: 100%; border: 1px solid white;box-shadow: 0 0 1px 1px white">
									</a>
									
								</div>
								<div class="col-sm-9 col9nhacvietmoi">
									<ul>
										<li><a href="include/sing-form.php?idBh=<?= $result['idChitietbaihat'] ?>&&idQg=<?= $result['idQuocgia'] ?>"><?= $result['TenBaihat'] ?></a></li>
										<li class="casi"><a href="include/detail_singer.php?idsinger=<?= $result['idCasi'] ?>&&idQg=<?= $result['idQuocgia'] ?>"><?= $result['HotenCasi'] ?></a></li>
									</ul>
									
								</div>
									
							</div>
						<?php }
						 ?>
					
				

				</div> <!-- Hết col-sm-8 nhacvietmoi-->
				<div class="col-sm-4 noidungtrai4">
					
				</div><!-- Hết noidungtrai4-->
			</div>
		</div> <!-- Hết nội dung bài hát-->
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
							  <p style="font-size: 18px;"><span class="	glyphicon glyphicon-pencil"></span> Mọi ý kiến đóng góp website vui lòng Email về thaithien11596@gmail.com hoặc SĐT: 0906929906</p>
						    
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
		
		<script src="js/jquery.min.js"></script>	
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="js/backtop.js"></script>
		<script src="js/snow.js"></script>
		

	
	
</body>
</html>