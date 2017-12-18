<script type="text/javascript">
function kt(){
	  HotenNhacsi=document.getElementById('HotenNhacsi').value;
    ImageNhacsi=document.getElementById('ImageNhacsi').value;
  	NgaysinhNhacsi=document.getElementById('NgaysinhNhacsi').value;
  	QuequanNhacsi=document.getElementById('QuequanNhacsi').value;
  	TieusuNhacsi=document.getElementById('TieusuNhacsi').value;
  	idQuocgia=document.getElementById('idQuocgia').value;

	if(HotenNhacsi=='')
	{alert('Nhập HotenNhacsi bạn ơi');
	return false;}
    if(imageNhacsi=='')
    {alert('Chọn ImageNhacsi bạn ơi');
    return false;}
  	if(NgaysinhNhacsi=='')
  	{alert('Nhập NgaysinhNhacsi bạn ơi');
  	return false;}
  	if(QuequanNhacsi=='')
  	{alert('Nhập QuequanNhacsi bạn ơi');
  	return false;}
  	if(TieusuNhacsi=='')
  	{alert('Nhập TieusuNhacsi bạn ơi');
  	return false;}
  	if(idQuocgia=='')
  	{alert('Nhập idQuocgia bạn ơi');
  	return false;}
	return true;
}
</script>
<?php
	// code sửa
	$idNhacsi=$_GET['id']; // nhận giá trị id bên lietke.php và sử lí
	$sql="select * from nhacsi where idNhacsi='$idNhacsi'";
	$objStm = $objPdo->query($sql);
	$data = $objStm->fetchAll(PDO::FETCH_ASSOC); 
?>
<?php	
 foreach($data as $row) {
 ?>
<form action="modules/quanlynhacsi/xuly.php?id=<?php echo $row['idNhacsi'] ?>" method="post" enctype="multipart/form-data" onsubmit="return kt();">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">SỮA THÔNG TIN NHẠC SĨ</div></td>
  </tr>
 
  <tr>
    <td>ID Nhạc sĩ</td>
    <td><input type="text" name="idNhacsi" value="<?php echo $row['idNhacsi']; ?>" disabled/></td>
  </tr>
  <tr>
    <td>Họ tên Nhạc sĩ</td>
    <td><input type="text" name="HotenNhacsi" id="HoTenNhacsi" value="<?php echo $row['HotenNhacsi']; ?>" /></td>
  </tr>
  <tr>
    <td>Image Nhạc sĩ</td>
    <td><input type="file" name="imageNhacsi"></td>
  </tr>
  <tr>
    <td>Ngày Sinh Nhạc sĩ</td>
    <td><input type="text" name="NgaysinhNhacsi" id="NgaySinhNhacsi" value="<?php echo $row['NgaysinhNhacsi']; ?>" /></td>
  </tr>
  <tr>
    <td>Quê Quán Nhạc sĩ</td>
    <td><input type="text" name="QuequanNhacsi" id="QueQuanNhacsi" value="<?php echo $row['QuequanNhacsi']; ?>" /></td>
  </tr>
  <td>Tiểu Sữ Nhạc sĩ</td>
    <td><textarea name="TieusuNhacsi" cols="40" rows="15" id="TieuSuNhacSi"><?php echo $row['TieusuNhacsi'] ?></textarea></td>
  </tr>
  
  <?php //load lấy Id Quốc Gia gắn vào combobox
    $sql="select * from quocgia";
    $objStm = $objPdo->query($sql);
    $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>Tên Quốc Gia</td>
    <td>
      <select name="IdQuocgia">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data as $row)  
    {// echo $row['idQuocgia'];
  ?>
    <option value="<?php echo $row['idQuocgia'] ?>"><?php echo $row['TenQuocgia']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>
  
   <td colspan="2"><div align="center">
      <button name="sua" value="Sửa" onclick="return confirm('Bạn có chắc chọn Sữa Thông Tin Nhạc Sĩ hiện tại chứ')">Sửa Thông Tin Nhac Sĩ</button>
    </div></td>
  </tr>
</table>
</form>
<?php 
  }
  ?>