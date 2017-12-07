
<script type="text/javascript">
function kt(){
	idcs=document.getElementById('idCasi').value; 
	hotencs=document.getElementById('HotenCasi').value;
  ngaysinhcs=document.getElementById('NgaysinhCasi').value;
  quequancs=document.getElementById('QuequanCasi').value;
  gioitinhcs=document.getElementById('GioitinhCasi').value;
  tieusucs=document.getElementById('TieusuCasi').value;
  idqg=document.getElementById('idQuocgia').value;
 
	if (idcs=='')
     {
         alert('Nhập mã bạn ơi'); return false; 
     }if (hotencs=='')
     {
         alert('Nhập HotenCasi bạn ơi'); return false; 
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
    <td>ID Ca sĩ</td>
    <td><input type="text" name="idCasi"  id="IdCasi" size="28px"/></td>
  </tr>
   <tr>
    <td>Ho Tên Ca sĩ</td>
    <td><input type="text" name="HotenCasi" id="HoTenCasi" size="28px"/></td>
  </tr>
  <tr>
    <td>Ngày Sinh Ca sĩ</td>
    <td><input type="text" name="NgaysinhCasi" id="NgaySinhCasi" size="28px"/></td>
  </tr>
  <tr>
    <td>Quê Quán Ca sĩ</td>
    <td><input type="text" name="QuequanCasi" id="QueQuanCasi" size="28px"/></td>
  </tr>
  <tr>
    <td>Giới Tính Ca sĩ</td>
    <td><input type="text" name="GioitinhCasi" id="GioiTinhCasi" size="28px"/></td>
  </tr>
  <tr>
    <td>Tiểu Sữ Ca sĩ</td>
    <td><input type="text" name="TieusuCasi" id="TieuSuCasi" size="28px"/></td>
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

   
  <tr>
    <td colspan="2"><div align="center">
      <button name="them" value="Thêm" onclick="return confirm('Bạn có chắc chắn Thêm Thông Tin Ca Sĩ nhập vào chứ')">Thêm Thông Tin Ca Sĩ</button>
          </div></td>
  </tr>
</table>
</form>
