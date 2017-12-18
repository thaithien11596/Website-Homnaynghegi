<script type="text/javascript">
function kt(){
	HoTenCasi=document.getElementById('HotenCasi').value;
  ImageCasi=document.getElementById('imageCasi').value;
  NgaySinhCasi=document.getElementById('NgaysinhCasi').value;
  QueQuanCasi=document.getElementById('QuequanCasi').value;
  GioiTinhCasi=document.getElementById('GioitinhCasi').value;
  TieuSuCasi=document.getElementById('TieusuCasi').value;
  IdQuocgia=document.getElementById('idQuocgia').value;

	if(HoTenCasi=='')
	{alert('Nhập HotenCasi bạn ơi');
	return false;}
  if(ImageCasi=='')
  {alert('Nhập ImageCasi bạn ơi');
  return false;}
  if(NgaySinhCasi=='')
  {alert('Nhập NgaysinhCasi bạn ơi');
  return false;}
  if(QueQuanCasi=='')
  {alert('Nhập QuequanCasi bạn ơi');
  return false;}
  if(GioiTinhCasi=='')
  {alert('Chọn GioitinhCasi bạn ơi');
  return false;}
  if(TieuSuCasi=='')
  {alert('Nhập TieusuCasi bạn ơi');
  return false;}
  if(IdQuocgia=='')
  {alert('Nhập idQuocgia bạn ơi');
  return false;}
	return true;
}
</script>
<?php
	// code sửa
	$idCasi=$_GET['id']; // nhận giá trị id bên lietke.php và sử lí
	$sql="select * from casi where idCasi='$idCasi'";
	$objStm = $objPdo->query($sql);
	$data = $objStm->fetchAll(PDO::FETCH_ASSOC); 
?>
<?php	
 foreach($data as $row) {
 ?>
<form action="modules/quanlycasi/xuly.php?id=<?php echo $row['idCasi'] ?>" method="post" enctype="multipart/form-data" onsubmit="return kt();">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">SỮA THÔNG TIN CA SĨ</div></td>
  </tr>
 
  <tr>
    <td>ID Ca sĩ</td>
    <td><input type="text" name="idCasi" value="<?php echo $row['idCasi']; ?>" disabled/></td>
  </tr>
  <tr>
    <td>Họ tên Ca sĩ</td>
    <td><input type="text" name="HotenCasi" id="HoTenCasi" value="<?php echo $row['HotenCasi']; ?>" /></td>
  </tr>
  <tr>
    <td>Hình Ảnh Ca sĩ</td>
    <td><input type="file" name="imageCasi" value="<?php echo $row['imageCasi'] ?>" id='ImageCasi'/></td>
  </tr>
  <tr>
    <td>Ngày Sinh Ca sĩ</td>
    <td><input type="date" name="NgaysinhCasi" id="NgaySinhCasi" value="<?php echo $row['NgaysinhCasi']; ?>" /></td>
  </tr>
  <tr>
    <td>Quê Quán Ca sĩ</td>
    <td><input type="text" name="QuequanCasi" id="QueQuanCasi" value="<?php echo $row['QuequanCasi']; ?>" /></td>
  </tr>
  <tr>
    <td>Giới Tính Ca sĩ</td>
    <td><input type="text" name="GioitinhCasi" id="GioiTinhCasi" value="<?php echo $row['GioitinhCasi']; ?>" /></td>
  </tr>
  </tr>
  <td>Tiểu Sữ Ca sĩ</td>
    <td><textarea name="TieusuCasi" cols="40" rows="15" id="TieuSuCaSi"><?php echo $row['TieusuCasi'] ?></textarea></td>
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
      <button name="sua" value="Sửa" onclick="return confirm('Bạn có chắc chọn Sữa Thông Tin Ca Sĩ hiện tại chứ')">Sửa Thông Tin Ca Sĩ</button>
    </div></td>
  </tr>
</table>
</form>
<?php 
  }
  ?>