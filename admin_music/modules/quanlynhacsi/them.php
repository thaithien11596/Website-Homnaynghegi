
<script type="text/javascript">
function kt(){ 
	hotenns=document.getElementById('HotenNhacsi').value;
  imagens=document.getElementById('imageNhacsi').value;
  ngaysinhns=document.getElementById('NgaysinhNhacsi').value;
  quequanns=document.getElementById('QuequanNhacsi').value;
  tieusuns=document.getElementById('TieusuNhacsi').value;
  idqg=document.getElementById('idQuocgia').value;
 
	if (hotenns=='')
     {
         alert('Nhập HotenNhacsi bạn ơi'); return false; 
     }if (imagens=='')
     {
         alert('Chọn ImageNhacsi bạn ơi'); return false; 
     }if (ngaysinhns=='')
     {
         alert('Nhập NgaysinhNhacsi bạn ơi'); return false; 
     }if (quequanns=='')
     {
         alert('Nhập QuequanNhacsi bạn ơi'); return false; 
     }
     if (tieusuns=='')
     {
         alert('Nhập TieusuNhacsi bạn ơi'); return false; 
     }if (idqg=='')
     {
         alert('Nhập idQuocgia bạn ơi'); return false; 
     }

	return true;
}
</script>

<form action="modules/quanlynhacsi/xuly.php" method="post" enctype="multipart/form-data" onSubmit="return kt()"; >
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">THÊM NHẠC SĨ</div></td>
  </tr>
  <tr>
    <td>Ho Tên Nhạc sĩ</td>
    <td><input type="text" name="HotenNhacsi" id="HoTenNhacsi" size="28px"/></td>
  </tr>
  <tr>
    <td>Image Nhạc Sĩ</td>
    <td><input type="file" name="imageNhacsi"></td>
  </tr>
  <tr>
    <td>Ngày Sinh Nhạc sĩ</td>
    <td><input type="date" name="NgaysinhNhacsi" id="NgaySinhNhacsi" size="28px"/></td>
  </tr>
  <tr>
    <td>Quê Quán Nhạc sĩ</td>
    <td><input type="text" name="QuequanNhacsi" id="QueQuanNhacsi" size="28px"/></td>
  </tr>
  <td>Tiểu Sữ Nhạc sĩ</td>
    <td><textarea name="TieusuNhacsi" cols="40" rows="15" id="TieuSuNhacSi"></textarea></td>
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

   
  <tr>
    <td colspan="2"><div align="center">
      <button name="them" value="Thêm" onclick="return confirm('Bạn có chắc chắn Thêm Thông Tin Nhạc Sĩ nhập vào chứ')">Thêm Thông Tin Nhạc Sĩ</button>
      </div>
    </td>
  </tr>
</table>
</form>
