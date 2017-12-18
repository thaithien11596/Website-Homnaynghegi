<script>
function KT(){

  imagebh=document.getElementById('imageBaihat').value;
  luotnghebh=document.getElementById('LuotngheBaihat').value;
  luottaibh=document.getElementById('LuottaiBaihat').value;
  linkbh=document.getElementById('LinkBaihat').value;
  idbh=document.getElementById('idBaihat').value;
  idcs=document.getElementById('idCasi').value;
  idtl=document.getElementById('idTheloai').value;
  
  
  if(imagebh==''){
    alert('Bạn chưa chọn Hình ảnh Bài hát');
    return false;
  }if(luotnghebh==''){
    alert('Bạn chưa nhập Lượt Nghe Bài hát');
    return false;
  }if(luottaibh==''){
    alert('Bạn chưa nhập Lượt Tải Bài hát');
    return false;
  }if(linkbh==''){
    alert('Bạn chưa nhập Link Bài hát');
    return false;
  }
  if(idbh==''){
    alert('Bạn chưa nhập Id Bài hát');
    return false;
  }
  if(idcs==''){
    alert('Bạn chưa nhập Id Ca sĩ');
    return false;
  }
  if(idtl==''){
    alert('Bạn chưa nhập Id Thể Loại');
    return false;
  }
  return true;
}

</script>
<form action="modules/quanlychitietbaihat/xuly.php" method="post" enctype="multipart/form-data" onsubmit="return KT()">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">THÊM CHI TIẾT BÀI HÁT</div></td>
  </tr>
  
  <tr>
    <td>Image Bài Hát</td>
    <td><input type="file" name="imageBaihat"></td>
  </tr>
  <tr>
    <td>Lượt Nghe Bài Hát </td>
    <td><input type="text" name="LuotngheBaihat" id="LuotNgheBaiHat" value="0"></td>
  </tr>
   <tr>
    <td>Lượt Tải Bài Hát </td>
    <td><input type="text" name="LuottaiBaihat" id="LuotTaiBaiHat" value="0"></td>
  </tr>
   <tr>
    <td>Link Bài Hát </td>
    <td><input type="file" name="LinkBaihat" id="LinkBaiHat"></td>
  </tr>
 
  <?php //load lấy Id Quốc gia gắn vào combobox
    $sql="select * from baihat";
    $objStm = $objPdo->query($sql);
    $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>Tên Bài Hát</td>
    <td>
      <select name="IdBaihat">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data as $row)  
    {// echo $row['idQuocgia'];
  ?>
    <option value="<?php echo $row['idBaihat'] ?>"><?php echo $row['TenBaihat']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>

  <?php //load lấy Id Quốc gia gắn vào combobox
    $sql="select * from casi";
    $objStm = $objPdo->query($sql);
    $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>Tên Ca sĩ</td>
    <td>
      <select name="IdCasi">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data as $row)  
    {// echo $row['idQuocgia'];
  ?>
    <option value="<?php echo $row['idCasi'] ?>"><?php echo $row['HotenCasi']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>

  <?php //load lấy Id Quốc gia gắn vào combobox
    $sql="select * from theloai";
    $objStm = $objPdo->query($sql);
    $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>Tên Thể Loại</td>
    <td>
      <select name="IdTheloai">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data as $row)  
    {// echo $row['idQuocgia'];
  ?>
    <option value="<?php echo $row['idTheloai'] ?>"><?php echo $row['TenTheloai']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>

  <tr>
    <td colspan="2"><div align="center">
      <button name="them" value="thêm" onclick="return confirm('Bạn có chắc chắn Thêm Thông Tin Chi Tiết Bài Hát nhập vào chứ')">Thêm Thông Tin Chi Tiết Bài Hát</button>
    </div></td>
  </tr>

</table>
</form>
