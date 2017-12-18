<div class="content-left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{	
			$tam='';
		}if($tam=='sua'){
			include('modules/quanlythanhvien/sua.php');
		}
    ?>
</div>
<div class="content-right">
	<?php
		include('modules/quanlythanhvien/lietke.php');
	?>
</div>