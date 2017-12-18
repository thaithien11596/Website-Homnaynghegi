
<script type="text/javascript">
function kt(){
  tena=document.getElementById('TenAlbum').value;
  imagea=document.getElementById('imageAlbum').value;
  luotnghea=document.getElementById('LuotngheAlbum').value;
  ngaydanga=document.getElementById('NgaydangAlbum').value;
  idqg=document.getElementById('idQuocgia').value;
  if (tena=='')
     {
         alert('Nhập TenAlbum bạn ơi'); return false; 
     }if (imagea=='')
     {
         alert('Chọn ImageAlbum bạn ơi'); return false; 
     }
     if (luotnghea=='')
     {
         alert('Nhập LuotNgheAlbum bạn ơi'); return false; 
     }
     if (ngaydanga=='')
     {
         alert('Nhập NgayDangAlbum bạn ơi'); return false; 
     }
     if (idqg=='')
     {
         alert('Chọn IdQuocGia bạn ơi'); return false; 
     }

  return true;
}
</script>

<form action="modules/quanlyalbum/xuly.php" method="post" enctype="multipart/form-data" onSubmit="return kt()"; >
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">THÊM ALBUM</div></td>
  </tr>
  <tr>
    <td>Tên Album</td>
    <td><input type="text" name="TenAlbum" id="Ten_Album" size="35px"/></td>
  </tr>
  <tr>
    <td>Image Album</td>
    <td><input type="file" name="imageAlbum"/></td>
  </tr>
  <tr>
    <td>Lượt Nghe Album</td>
    <td><input type="text" name="LuotngheAlbum" id="LuotNgheAlbum" value="0" size="35px"/></td>
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
      <button name="them" value="Thêm" onclick="return confirm('Bạn có chắc chắc Thêm Thông Tin Album nhập vào chứ')">Thêm Thông Tin Album</button>
          </div></td>
  </tr>
</table>
</form>
