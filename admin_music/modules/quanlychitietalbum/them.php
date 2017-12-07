<script>
function KT(){
	idchitieta=document.getElementById('idchitietAlbum').value;
	luotnghea=document.getElementById('LuotngheAlbum').value;
  ngaydanga=document.getElementById('NgaydangAlbum').value;
  ida=document.getElementById('idAlbum').value;
  idchitietbh=document.getElementById('idChitietbaihat').value;
	//ten=hinhanh['name'];
	//tam=hinhanh['tmp_name'];

	
	if(idchitieta==''){
		alert('Bạn chưa nhập Id Chi Tiết Album');
		return false;
	}
	if(luotnghea==''){
		alert('Bạn chưa nhập Lượt Nghe Album');
		return false;
	}
	if(ngaydanga==''){
		alert('Bạn chưa nhập Ngày Đăng Album');
		return false;
	}if(ida==''){
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
  <tr>
    <td width="48%">ID CHI TIẾT ALBUM</td>
    <td width="52%"><input type="text" name="idchitietAlbum" id="IdchitietAlbum"></td>
  </tr>
  <tr>
    <td>LƯỢT NGHE ALBUM</td>
    <td><input type="text" name="LuotngheAlbum" id="LuotNgheAlbum"></td>
  </tr>
  <tr>
    <td>NGÀY ĐĂNG ALBUM</td>
    <td><input type="text" name="NgaydangAlbum" id="NgayDangAlbum"></td>
  </tr>
 
   <?php //load lấy IdAlbum gắn vào combobox
    $sql_1="select idAlbum from album";
    $objstm = $objPdo->query($sql_1);
    $data_1 = $objstm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>ID ALBUM</td>
    <td><select name="idAlbum">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data_1 as $row_1)  
    {
  ?>
    <option ><?php echo $row_1['idAlbum']?></option>
    <?php } ?>
    </select>
    </td>
  </tr>

  <?php //load lấy IdChitietBaihat gắn vào combobox
    $sql_1="select idChitietbaihat from chitietbaihat";
    $objstm = $objPdo->query($sql_1);
    $data_1 = $objstm->fetchAll(PDO::FETCH_ASSOC);
    
  ?>
  <tr>
    <td>ID CHI TIẾT BÀI HÁT</td>
    <td><select name="idChitietbaihat">
    <?php // tạo vòng lập lấy giá trị cho combobox
  foreach($data_1 as $row_1)  
    {
  ?>
    <option ><?php echo $row_1['idChitietbaihat']?></option>
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
