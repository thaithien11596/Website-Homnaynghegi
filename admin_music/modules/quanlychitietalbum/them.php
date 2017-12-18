<script>
function KT(){
  ida=document.getElementById('idAlbum').value;
  idchitietbh=document.getElementById('idChitietbaihat').value;
	//ten=hinhanh['name'];
	//tam=hinhanh['tmp_name'];

	
	
	if(ida==''){
    alert('Bạn chưa nhập Id Album');
    return false;}
	if(idchitietbh==''){
		alert('Bạn chưa nhập Id Chi Tiết Bài Hát');
		return false;
	}
	return true;
}

</script>
<form action="modules/quanlychitietalbum/xuly.php" method="post" enctype="multipart/form-data" onsubmit="return KT()">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center" style="color:#CEF6F5; background:#0040FF">THÊM CHI TIẾT ALBUM</div></td>
  </tr>
  <?php //load lấy IdAlbum gắn vào combobox
    $sql="select * from album ";
    $objstm = $objPdo->query($sql);
    $data = $objstm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>TÊN ALBUM</td>
    <td><select name="IdAlbum">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data as $row)  
    {
  ?>
    <option value="<?php echo $row['idAlbum'] ?>" ><?php echo $row['TenAlbum']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>

  <?php //load lấy IdChitietBaihat gắn vào combobox
    $sql="SELECT * FROM chitietbaihat JOIN baihat ON chitietbaihat.idBaihat=baihat.idBaihat";
    $objstm = $objPdo->query($sql);
    $data2 = $objstm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>TÊN BÀI HÁT</td>
    <td><select name="IdChitietbaihat">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data2 as $row)  
    {
  ?>
    <option value="<?php echo $row['idChitietbaihat'] ?>"><?php echo $row ['TenBaihat']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>

  <tr>
    <td colspan="2"><div align="center">
      <button name="them" value="thêm" onclick="return confirm('Bạn có chắc chắn Thông Tin Chi Tiết Album nhập vào không')">Thêm Thông Tin Chi Tiết Album</button>
    </div></td>
  </tr>

</table>
</form>
