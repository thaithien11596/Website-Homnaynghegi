
 <style>
 .firstrow{
   background:#0040FF;
   color:#CEF6F5;
   text-align:center;
   }
  a{
    text-decoration:none}

 a:hover{
   color:blue;
   }
 </style>
<div style="font-size:30px;color:blue;float: right">QUẢN LÝ THÔNG TIN ALBUM</div>
<div style="color: blue; float: left;"> SỐ TRANG:</div>
<?php 
  
  if(isset($_GET['trang'])){
    $get_trang=$_GET['trang'];
  }else{
    $get_trang='';
  }
  if($get_trang=='' || $get_trang==1)
  {
    $trang1=0;
  }else{
    $trang1=($get_trang*7)-7;
  }
  
  $sql="select * from album limit $trang1,7"; // trang1 (vị trí album hiện tại) , lấy 7 album
  $objStm = $objPdo->query($sql);
  $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
  
  //-------//đếm số dòng có trong album -> tương ứng đếm số album
  $sql_sql="SELECT count(*) FROM album";
  $result = $objPdo->query($sql_sql);
  $row = $result->fetch(PDO::FETCH_NUM);
  $a=ceil($row[0]/7);
  for($b=1;$b<=$a;$b++){
    echo '<a href="index.php?quanly=quanlyalbum&ac=them&trang='.$b.'" style="text-decoration:none;">'.' '. $b .' '.'</a>'; 
  }
  echo '<br>'.'TỔNG ALBUM LÀ: '.$row[0];
  // ---------------------------- tìm kiếm album
  if(isset($_POST['sub-timkiem'])){
  $tentk=$_POST['timkiem'];
  $sql_tk="select * from album where TenAlbum like '%$tentk%'";
  $objStmtk = $objPdo->query($sql_tk);
  $datatk = $objStmtk->fetchAll(PDO::FETCH_ASSOC);
        foreach($datatk as $rowtk)
        { 
      $m=$rowtk['TenAlbum'];
      if($tentk=='$m'){
        echo '<script>alert("Không tìm thấy Tên Album")</script>';
      }else{
  ?>
    <BR /><hr /><p style="color:#000;background:pink " align="center">ALBUM TÌM KIẾM:</p>
  <table width="100%" border="1">
      <tr align="center" style="background:#0040FF;color:#CEF6F5">
        
        <td>Id Album</td>
        <td>Tên Album</td>
        <td>Image Album</td>
        <td>Lượt Nghe Album</td>
        <td>Ngày Đăng Album</td>
        <td>Id Quốc Gia</td>
                
        <td colspan="2">Quản lý</td>
      </tr>
      
      <tr align="center">
        
        <td><?php echo $rowtk['idAlbum'] ?></td>
        <td><?php echo $rowtk['TenAlbum'] ?></td>
        <td><img src="../img/<?php echo $rowtk['imageAlbum'] ?>" style="height: 70px"/></td>
        <td><?php echo $rowtk['LuotngheAlbum'] ?></td>
        <td><?php echo $rowtk['NgaydangAlbum'] ?></td>
        <td><?php echo $rowtk['idQuocgia'] ?></td>
        
        
        <td><a href="index.php?quanly=quanlyalbum&ac=sua&id=<?php echo $rowtk['idAlbum'] ?>"><img src="background/edit1.png" style="width:50px;height:50px"/></a></td>
        <td><a href="modules/quanlyalbum/xuly.php?id=<?php echo $rowtk['idAlbum'];?>" onclick="return confirm('Bạn có chắc xóa Album <?php echo $rowtk['idAlbum']?> chứ')"><img src="background/delete.jpg" style="width:50px;height:50px"/></a></td>
        
      </tr>
      <?php 
          } 
    }
  ?>
  </table>
  <p style="background:pink;height:40px"></p>
  <?php } ?>
    <!---END CODE TÌM KIẾM -->
     <br />
<p style="width:200px;color:blue;size:20px;font-style:inherit;float:left"> TRANG HIỆN TẠI LÀ: <?php echo $get_trang?></p>
<form action="" method="post" style="float:right">
    Nhập Tên Album:<input type="text" name="timkiem" />
    <input type="submit" name="sub-timkiem" value="Tìm Kiếm" />
</form>
   
<table width="100%" border="1">
  <tr class="firstrow" align="center" >
    <td>Id Album</td>
    <td>Tên Album</td>
    <td>Image Album</td>
    <td>Lượt Nghe Album</td>
    <td>Ngày Đăng Album</td>
    <td>Id Quốc Gia</td>
    <td>Sửa</td>
    <td>Xoá</td>
   
  </tr>
  <?php
    foreach($data as $row)
  { 
  ?>
  <tr align="center">
    <td><?php echo $row['idAlbum'] ?></td>
    <td><?php echo $row['TenAlbum'] ?></td>
    <td><img src="../img/<?php echo $row['imageAlbum'] ?>" style="height: 70px"/></td>
    <td><?php echo $row['LuotngheAlbum'] ?></td>
    <td><?php echo $row['NgaydangAlbum'] ?></td>
    <td><?php echo $row['idQuocgia'] ?></td>
   
    <td ><a href="index.php?quanly=quanlyalbum&ac=sua&id=<?php echo $row['idAlbum'] ?>"><img src="background/edit1.png" style="width:50px;height:50px"/></a></td>
    
    <td ><a href="modules/quanlyalbum/xuly.php?id=<?php echo $row['idAlbum'];?>" onclick="return confirm('Bạn có chắc xóa Album thứ<?php echo $row['idAlbum']?> chứ')"><img src="background/delete.jpg" style="width:50px;height:50px"/></a></td>
    
  </tr>
  <?php 
   } 
   ?>
</table>
<BR /><HR />

