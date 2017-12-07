<script type="text/javascript">
function kt(){
	HotenCasi=document.getElementById('HotenCasi').value;
  NgaysinhCasi=document.getElementById('NgaysinhCasi').value;
  QuequanCasi=document.getElementById('QuequanCasi').value;
  GioitinhCasi=document.getElementById('GioitinhCasi').value;
  TieusuCasi=document.getElementById('TieusuCasi').value;
  idQuocgia=document.getElementById('idQuocgia').value;

	if(HotenCasi=='')
	{alert('Nhập HotenCasi bạn ơi');
	return false;}
  if(NgaysinhCasi=='')
  {alert('Nhập NgaysinhCasi bạn ơi');
  return false;}
  if(QuequanCasi=='')
  {alert('Nhập QuequanCasi bạn ơi');
  return false;}
  if(GioitinhCasi=='')
  {alert('Chọn GioitinhCasi bạn ơi');
  return false;}
  if(TieusuCasi=='')
  {alert('Nhập TieusuCasi bạn ơi');
  return false;}
  if(idQuocgia=='')
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
    <td>Ngày Sinh Ca sĩ</td>
    <td><input type="text" name="NgaysinhCasi" id="NgaySinhCasi" value="<?php echo $row['NgaysinhCasi']; ?>" /></td>
  </tr>
  <tr>
    <td>Quê Quán Ca sĩ</td>
    <td><input type="text" name="QuequanCasi" id="QueQuanCasi" value="<?php echo $row['QuequanCasi']; ?>" /></td>
  </tr>
  <tr>
    <td>Giới Tính Ca sĩ</td>
    <td><input type="text" name="GioitinhCasi" id="GioiTinhCasi" value="<?php echo $row['GioitinhCasi']; ?>" /></td>
  </tr>
  <tr>
    <td>Tiểu Sữ Ca sĩ</td>
    <td><input type="text" name="TieusuCasi" id="TieuSuCasi" value="<?php echo $row['TieusuCasi']; ?>" /></td>
  </tr>
  
  <?php //load lấy Id Quốc gia gắn vào combobox
    $sql="select * from quocgia";
    $objStm = $objPdo->query($sql);
    $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>ID QUỐC GIA</td>
    <td><select name="idQuocgia">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data as $row)  
    {
  ?>
    <option><?php echo $row['idQuocgia']?></option>
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