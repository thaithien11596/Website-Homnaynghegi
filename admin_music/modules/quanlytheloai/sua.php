<script type="text/javascript">
function kt(){
    TenTheloai=document.getElementById('TenTheloai').value;
    
  if(TenTheloai=='')
  {alert('Nhập TenTheloai bạn ơi');
  return false;}
  return true;
}
</script>
<?php
  // code sửa
  $idTheloai=$_GET['id']; // nhận giá trị id bên lietke.php và sử lí
  $sql="select * from theloai where idTheloai='$idTheloai'";
  $objStm = $objPdo->query($sql);
  $data = $objStm->fetchAll(PDO::FETCH_ASSOC); 
?>
<?php 
 foreach($data as $row) {
 ?>
<form action="modules/quanlytheloai/xuly.php?id=<?php echo $row['idTheloai'] ?>" method="post" enctype="multipart/form-data" onsubmit="return kt();">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">SỮA THÔNG TIN THỂ LOẠI</div></td>
  </tr>
 
  <tr>
    <td>ID Thể Loại</td>
    <td><input type="text" name="idTheloai" value="<?php echo $row['idTheloai']; ?>" disabled/></td>
  </tr>
  <tr>
    <td>Tên Thể Loại</td>
    <td><input type="text" name="TenTheloai" id="TenTheLoai" value="<?php echo $row['TenTheloai']; ?>" /></td>
  </tr>
  
  
   <td colspan="2"><div align="center">
      <button name="sua" value="Sửa" onclick="return confirm('Bạn có chắc chọn Sữa Thông Tin Thể Loại hiện tại chứ')">Sửa Thông Tin Thể Loại</button>
    </div></td>
  </tr>
</table>
</form>
<?php 
  }
  ?>