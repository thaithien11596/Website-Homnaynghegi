
<script type="text/javascript">
function kt(){
	hotencs=document.getElementById('HotenCasi').value;
  imagecs=document.getElementById('imageCasi').value;
  ngaysinhcs=document.getElementById('NgaysinhCasi').value;
  quequancs=document.getElementById('QuequanCasi').value;
  gioitinhcs=document.getElementById('GioitinhCasi').value;
  tieusucs=document.getElementById('TieusuCasi').value;
  idqg=document.getElementById('idQuocgia').value;
 
	if (hotencs=='')
     {
         alert('Nhập HotenCasi bạn ơi'); return false;
      }if (imagecs=='')
     {
         alert('Chọn ImageCasi bạn ơi'); return false;     
     }if (ngaysinhcs=='')
     {
         alert('Nhập NgaysinhCasi bạn ơi'); return false; 
     }if (quequancs=='')
     {
         alert('Nhập QuequanCasi bạn ơi'); return false; 
     }
     if (gioitinhcs=='')
     {
         alert('Nhập GioitinhCasi bạn ơi'); return false; 
     }
     if (tieusucs=='')
     {
         alert('Nhập TieusuCasi bạn ơi'); return false; 
     }if (idqg=='')
     {
         alert('Nhập idQuocgia bạn ơi'); return false; 
     }

	return true;
}
</script>

<form action="modules/quanlycasi/xuly.php" method="post" enctype="multipart/form-data" onSubmit="return kt()"; >
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">THÊM CA SĨ</div></td>
  </tr>
   <tr>
    <td>Ho Tên Ca sĩ</td>
    <td><input type="text" name="HotenCasi" id="HoTenCasi" size="35px"/></td>
  </tr>
  <tr>
    <td>Image Ca Sĩ</td>
    <td><input type="file" name="imageCasi"></td>
  </tr>
  <tr>
    <td>Ngày Sinh Ca sĩ</td>
    <td><input type="date" name="NgaysinhCasi" id="NgaySinhCasi" /></td>
  </tr>
  <tr>
    <td>Quê Quán Ca sĩ</td>
    <td><input type="text" name="QuequanCasi" id="QueQuanCasi" size="35px"/></td>
  </tr>
  <tr>
    <td>Giới Tính Ca sĩ</td>
    <td><input type="text" name="GioitinhCasi" id="GioiTinhCasi" size="35px"/></td>
  </tr>
  <td>Tiểu Sữ Ca sĩ</td>
    <td><textarea name="TieusuCasi" cols="40" rows="15" id="TieuSuCaSi"></textarea></td>
  </tr>
  <?php //load lấy Id Quốc gia gắn vào combobox
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

   
  <tr>
    <td colspan="2"><div align="center">
      <button name="them" value="Thêm" onclick="return confirm('Bạn có chắc chắn Thêm Thông Tin Ca Sĩ nhập vào chứ')">Thêm Thông Tin Ca Sĩ</button>
          </div></td>
  </tr>
</table>
</form>
