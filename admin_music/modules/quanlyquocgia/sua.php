<script type="text/javascript">
function kt(){
	  TenQuocgia=document.getElementById('TenQuocgia').value;
  	
	if(TenQuocgia=='')
	{alert('Nhập TenQuocgia bạn ơi');
	return false;}
	return true;
}
</script>
<?php
	// code sửa
	$idQuocgia=$_GET['id']; // nhận giá trị id bên lietke.php và sử lí
	$sql="select * from quocgia where idQuocgia='$idQuocgia'";
	$objStm = $objPdo->query($sql);
	$data = $objStm->fetchAll(PDO::FETCH_ASSOC); 
?>
<?php	
 foreach($data as $row) {
 ?>
<form action="modules/quanlyquocgia/xuly.php?id=<?php echo $row['idQuocgia'] ?>" method="post" enctype="multipart/form-data" onsubmit="return kt();">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">SỬA THÔNG TIN QUỐC GIA</div></td>
  </tr>
 
  <tr>
    <td>ID Quốc Gia</td>
    <td><input type="text" name="idQuocgia" value="<?php echo $row['idQuocgia']; ?>" disabled/></td>
  </tr>
  <tr>
    <td>Tên Quốc Gia</td>
    <td><input type="text" name="TenQuocgia" id="TenQuocGia" value="<?php echo $row['TenQuocgia']; ?>" /></td>
  </tr>
  
  
   <td colspan="2"><div align="center">
      <button name="sua" value="Sửa" onclick="return confirm('Bạn có chắc chọn Sữa Thông Tin Quốc Gia hiện tại chứ')">Sửa Thông Tin Quốc Gia</button>
    </div></td>
  </tr>
</table>
</form>
<?php 
  }
  ?>