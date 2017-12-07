
<script type="text/javascript">
function kt(){
	idns=document.getElementById('idNhacsi').value; 
	hotenns=document.getElementById('HotenNhacsi').value;
  ngaysinhns=document.getElementById('NgaysinhNhacsi').value;
  quequanns=document.getElementById('QuequanNhacsi').value;
  tieusuns=document.getElementById('TieusuNhacsi').value;
  idqg=document.getElementById('idQuocgia').value;
 
	if (idns=='')
     {
         alert('Nhập mã bạn ơi'); return false; 
     }if (hotenns=='')
     {
         alert('Nhập HotenNhacsi bạn ơi'); return false; 
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
    <td>ID Nhạc sĩ</td>
    <td><input type="text" name="idNhacsi"  id="IdNhacsi" size="28px"/></td>
  </tr>
   <tr>
    <td>Ho Tên Nhạc sĩ</td>
    <td><input type="text" name="HotenNhacsi" id="HoTenNhacsi" size="28px"/></td>
  </tr>
  <tr>
    <td>Ngày Sinh Nhạc sĩ</td>
    <td><input type="text" name="NgaysinhNhacsi" id="NgaySinhNhacsi" size="28px"/></td>
  </tr>
  <tr>
    <td>Quê Quán Nhạc sĩ</td>
    <td><input type="text" name="QuequanNhacsi" id="QueQuanNhacsi" size="28px"/></td>
  </tr>
  <tr>
    <td>Tiểu Sữ Nhạc sĩ</td>
    <td><input type="text" name="TieusuNhacsi" id="TieuSuNhacsi" size="28px"/></td>
  </tr>
  <?php //load lấy Id Quốc Gia gắn vào combobox
    $sql="select * from quocgia";
    $objStm = $objPdo->query($sql);
    $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>ID Quốc Gia</td>
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
      <button name="them" value="Thêm" onclick="return confirm('Bạn có chắc chắn Thêm Thông Tin Nhạc Sĩ nhập vào chứ')">Thêm Thông Tin Nhạc Sĩ</button>
      </div>
    </td>
  </tr>
</table>
</form>
