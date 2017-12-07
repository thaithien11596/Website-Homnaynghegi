<div class="content-left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
		}if($tam=='them'){
			include('modules/quanlybaihat/them.php');
		}if($tam=='sua'){
			include('modules/quanlybaihat/sua.php');
		}
	 ?>
</div>
<div class="content-right">
	<?php
		include('modules/quanlybaihat/lietke.php');
	?>
</div>
 