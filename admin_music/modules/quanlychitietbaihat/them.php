<script>
function KT(){
  idchitiettbh=document.getElementById('idChitietbaihat').value;
  imagebh=document.getElementById('imageBaihat').value;
  ngaydangbh=document.getElementById('NgaydangBaihat').value;
  luotnghebh=document.getElementById('LuotngheBaihat').value;
  luottaibh=document.getElementById('LuottaiBaihat').value;
  linkbh=document.getElementById('LinkBaihat').value;
  idbh=document.getElementById('idBaihat').value;
  idcs=document.getElementById('idCasi').value;
  idtl=document.getElementById('idTheloai').value;
  //ten=hinhanh['name'];
  //tam=hinhanh['tmp_name'];
  
  
  if(idchitietbh==''){
    alert('Bạn chưa nhập Id Chi Tiết Bài hát');
    return false;
  }
  if(imagebh==''){
    alert('Bạn chưa chọn Hình ảnh Bài hát');
    return false;
  }
  if(ngaydangbh==''){
    alert('Bạn chưa nhập Ngày Đăng Bài hát');
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
    <td width="48%">ID Chi Tiết Bài Hát</td>
    <td width="52%"><input type="text" name="idChitietbaihat" id="IdChiTietBaihat"></td>
  </tr>
  <tr>
    <td>Image Bài Hát</td>
    <td><input type="text" name="imageBaihat" id="ImageBaiHat"></td>
  </tr>
  <tr>
    <td>Ngày Đăng Bài Hát </td>
    <td><input type="text" name="NgaydangBaihat" id="NgayDangBaiHat"></td>
  </tr>
   <tr>
    <td>Lượt Nghe Bài Hát </td>
    <td><input type="text" name="LuotngheBaihat" id="NgayDangBaiHat"></td>
  </tr>
   <tr>
    <td>Lượt Tải Bài Hát </td>
    <td><input type="text" name="LuottaiBaihat" id="NgayDangBaiHat"></td>
  </tr>
   <tr>
    <td>Link Bài Hát </td>
    <td><input type="text" name="LinkBaihat" id="NgayDangBaiHat"></td>
  </tr>
 
  <?php //load lấy Id Bài hát gắn vào combobox
    $sql="select * from baihat";
    $objStm = $objPdo->query($sql);
    $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>ID BÀI HÁT</td>
    <td><select name="idBaihat">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data as $row)  
    {
  ?>
    <option><?php echo $row['idBaihat']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>
  
  <?php //load lấy Id Ca sĩ gắn vào combobox
    $sql="select * from casi";
    $objStm = $objPdo->query($sql);
    $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>

  <tr>
    <td>ID CA SĨ</td>
    <td><select name="idCasi">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data as $row)  
    {
  ?>
    <option><?php echo $row['idCasi']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>

  <?php //load lấy Id Thể loại gắn vào combobox
    $sql="select * from theloai";
    $objStm = $objPdo->query($sql);
    $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>

  <tr>
    <td>ID THỂ LOẠI</td>
    <td><select name="idTheloai">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data as $row)  
    {
  ?>
    <option><?php echo $row['idTheloai']?></option>
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
