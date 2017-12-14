<div class="container containerjbs">
		<?php 

								foreach ($data as $result)  { 
								
									// echo '<pre>';
									// print_r($result);
										// if($result['idChitietbaihat'] = $result['idCasi'] ){
										?>
								
													<div class="jumbotron jbstr" style="border-color: #FF5722">
														<h4 class="display-3" style="float: left;">Lời bài hát: <?= $result['TenBaihat'] ?></h4>
														<h4 class="display-3" style="float:right;">Lượt nghe: <?= $result['LuotngheBaihat'] ?></h4>
														<p class="lbh"><?= $result['LoiBaihat'] ?></p>
												<!-- 		<a href="singer_form.php">Báo lỗi</a>
														<a href="singer_form.php">Góp ý lyrics</a> -->
								
													</div>
										<?php				
								 } 
						 ?>
	</div>