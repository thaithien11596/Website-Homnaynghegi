<div class="content-left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
		}if($tam=='them'){
			include('modules/quanlychitietalbum/them.php');
		}if($tam=='sua'){
			include('modules/quanlychitietalbum/sua.php');
		}
	 ?>
</div>
<div class="content-right">
	<?php
		include('modules/quanlychitietalbum/lietke.php');
	?>
</div>