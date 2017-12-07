<script type="text/javascript">
function kt(){
  TenAlbum=document.getElementById('TenAlbum').value;
    
  if(TenAlbum=='')
  {alert('Nhập TenAlbum bạn ơi');
  return false;}
  return true;
}
</script>
<?php
  // code sửa
  $idAlbum=$_GET['id']; // nhận giá trị id bên lietke.php và sử lí
  $sql="select * from album where idAlbum='$idAlbum'";
  $objStm = $objPdo->query($sql);
  $data = $objStm->fetchAll(PDO::FETCH_ASSOC); 
?>
<?php 
 foreach($data as $row) {
 ?>
<form action="modules/quanlyalbum/xuly.php?id=<?php echo $row['idAlbum'] ?>" method="post" enctype="multipart/form-data" onsubmit="return kt();">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">SỮA THÔNG TIN ALBUM</div></td>
  </tr>
 
  <tr>
    <td>ID Album</td>
    <td><input type="text" name="idAlbum" value="<?php echo $row['idAlbum']; ?>" disabled/></td>
  </tr>
  <tr>
    <td>Tên Album</td>
    <td><input type="text" name="TenAlbum" id="Ten_Album" value="<?php echo $row['TenAlbum']; ?>" /></td>
  </tr>
  
  
   <td colspan="2"><div align="center">
      <button name="sua" value="Sửa" onclick="return confirm('Bạn có chắc chọn Sữa Thông Tin Album hiện tại chứ')">Sửa Thông Tin Album</button>
    </div></td>
  </tr>
</table>
</form>
<?php 
  }
  ?>