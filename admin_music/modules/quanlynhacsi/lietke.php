
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
<div style="font-size:30px;color:blue;float: right">QUẢN LÝ THÔNG TIN NHẠC SĨ</div>
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
  
  $sql="select * from nhacsi limit $trang1,7"; // trang1 (vị trí nhạc sĩ hiện tại) , lấy 7 nhạc sĩ
  $objStm = $objPdo->query($sql);
  $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
  
  //-------//đếm số dòng có trong nhạc sĩ -> tương ứng đếm số nhạc sĩ
  $sql_sql="SELECT count(*) FROM nhacsi";
  $result = $objPdo->query($sql_sql);
  $row = $result->fetch(PDO::FETCH_NUM);
  $a=ceil($row[0]/7);
  for($b=1;$b<=$a;$b++){
    echo '<a href="index.php?quanly=quanlynhacsi&ac=them&trang='.$b.'" style="text-decoration:none;">'.' '. $b .' '.'</a>'; 
  }
  echo '<br>'.'TỔNG NHẠC SĨ LÀ: '.$row[0];
  // ---------------------------- tìm kiếm nhạc sĩ
  if(isset($_POST['sub-timkiem'])){
  $tentk=$_POST['timkiem'];
  $sql_tk="select * from nhacsi where HotenNhacsi like '%$tentk%'";
  $objStmtk = $objPdo->query($sql_tk);
  $datatk = $objStmtk->fetchAll(PDO::FETCH_ASSOC);
        foreach($datatk as $rowtk)
        { 
      $m=$rowtk['HotenNhacsi'];
      if($tentk=='$m'){
        echo '<script>alert("Không tìm thấy Tên nhạc sĩ")</script>';
      }else{
  ?>
    <BR /><hr /><p style="color:#000;background:pink " align="center">NHẠC SĨ TÌM KIẾM:</p>
  <table width="100%" border="1">
      <tr align="center" style="background:#0040FF;color:#CEF6F5">
        
        <td>Id Nhạc sĩ</td>
        <td>Họ Tên Nhạc sĩ</td>
        <td>Image Nhạc sĩ</td>
        <td>Ngày Sinh Nhạc sĩ</td>
        <td>Quê Quán Nhạc sĩ</td> 
        <td>Tiểu Sữ Nhạc sĩ</td>
        <td>Id Quốc Gia</td>
        
        <td colspan="2">Quản lý</td>     
      </tr>
      
      <tr align="center">
        
        <td><?php echo $rowtk['idNhacsi'] ?></td>
        <td><?php echo $rowtk['HotenNhacsi'] ?></td>
        <td><img src="../img/<?php echo $rowtk['imageNhacsi'] ?>" style="height: 70px"/></td>
        <td><?php echo $rowtk['NgaysinhNhacsi'] ?></td>
        <td><?php echo $rowtk['QuequanNhacsi'] ?></td>
        <td><?php echo $rowtk['TieusuNhacsi'] ?></td>
        <td><?php echo $rowtk['idQuocgia'] ?></td>  
        
        <td><a href="index.php?quanly=quanlynhacsi&ac=sua&id=<?php echo $rowtk['idNhacsi'] ?>"><img src="background/edit1.png" style="width:50px;height:50px"/></a></td>
        <td><a href="modules/quanlynhacsi/xuly.php?id=<?php echo $rowtk['idNhacsi'];?>" onclick="return confirm('Bạn có chắc xóa Nhạc sĩ <?php echo $rowtk['idNhacsi']?> chứ')"><img src="background/delete.jpg" style="width:50px;height:50px"/></a></td>
        
      </tr>
      <?php 
          } 
    }
  ?>
  </table>
  <p style="background:pink;height:40px"></p>
  <?php } ?>
    <!-- END CODE TÌM KIẾM -->
     <br />
<p style="width:200px;color:#00F;size:20px;font-style:inherit;float:left"> TRANG HIỆN TẠI LÀ: <?php echo $get_trang?></p>
<form action="" method="post" style="float:right">
    Nhập Tên Nhạc sĩ:<input type="text" name="timkiem" />
    <input type="submit" name="sub-timkiem" value="Tìm Kiếm" />
</form>
   
<table width="100%" border="1">
  <tr class="firstrow" align="center" >
    <td>Id Nhạc sĩ</td>
    <td>Họ Tên Nhạc sĩ</td>
    <td>Image Nhạc sĩ</td>
    <td>Ngày Sinh Nhạc sĩ</td>
    <td>Quê Quán Nhạc sĩ</td> 
    <td>Tiểu Sữ Nhạc sĩ</td>
    <td>Id Quốc Gia</td>
    <td>Sửa</td>
    <td>Xoá</td>
   
  </tr>
  <?php
    foreach($data as $row)
  { 
  ?>
  <tr align="center">
    <td><?php echo $row['idNhacsi'] ?></td>
    <td><?php echo $row['HotenNhacsi'] ?></td>
    <td><img src="../img/<?php echo $row['imageNhacsi']?> " style="height: 70px"/></td>
    <td><?php echo $row['NgaysinhNhacsi'] ?></td>
    <td><?php echo $row['QuequanNhacsi'] ?></td>
    <td><?php echo $row['TieusuNhacsi'] ?></td>
    <td><?php echo $row['idQuocgia'] ?></td>

    <td ><a href="index.php?quanly=quanlynhacsi&ac=sua&id=<?php echo $row['idNhacsi'] ?>"><img src="background/edit1.png" style="width:50px;height:50px"/></a></td>
    
    <td ><a href="modules/quanlynhacsi/xuly.php?id=<?php echo $row['idNhacsi'];?>" onclick="return confirm('Bạn có chắc xóa Nhạc Sĩ thứ <?php echo $row['idNhacsi']?> chứ')"><img src="background/delete.jpg" style="width:50px;height:50px"/></a></td>
    
  </tr>
  <?php 
   } 
   ?>
</table>
<BR /><HR />

