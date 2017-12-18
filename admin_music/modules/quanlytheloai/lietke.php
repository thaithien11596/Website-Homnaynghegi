
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
<div style="font-size:30px;color:blue;float: right">QUẢN LÝ THÔNG TIN THỂ LOẠI</div>
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
  
  $sql="select * from theloai limit $trang1,7"; // trang1 (vị trí thể loại hiện tại) , lấy 7 thể loại
  $objStm = $objPdo->query($sql);
  $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
  
  //-------//đếm số dòng có trong thể loại -> tương ứng đếm số thể loại
  $sql_sql="SELECT count(*) FROM theloai";
  $result = $objPdo->query($sql_sql);
  $row = $result->fetch(PDO::FETCH_NUM);
  $a=ceil($row[0]/7);
  for($b=1;$b<=$a;$b++){
    echo '<a href="index.php?quanly=quanlytheloai&ac=them&trang='.$b.'" style="text-decoration:none;">'.' '. $b .' '.'</a>'; 
  }
  echo '<br>'.'TỔNG THỂ LOẠI LÀ: '.$row[0];
  // ---------------------------- tìm kiếm thể loại
  if(isset($_POST['sub-timkiem'])){
  $tentk=$_POST['timkiem'];
  $sql_tk="select * from theloai where TenTheloai like'%$tentk%'";
  $objStmtk = $objPdo->query($sql_tk);
  $datatk = $objStmtk->fetchAll(PDO::FETCH_ASSOC);
        foreach($datatk as $rowtk)
        { 
      $m=$rowtk['TenTheloai'];
      if($tentk=='$m'){
        echo '<script>alert("Không tìm thấy Tên Thể loại")</script>';
      }else{
  ?>
    <BR /><hr /><p style="color:black; background:pink" align="center">THỂ LOẠI TÌM KIẾM:</p>
  <table width="100%" border="1">
      <tr align="center">
        
        <td>Id Thể Loại</td>
        <td>Tên Thể Loại</td>
        
        <td colspan="2">Quản lý</td>
      </tr>
      
      <tr align="center">
        
        <td><?php echo $rowtk['idTheloai'] ?></td>
        <td><?php echo $rowtk['TenTheloai'] ?></td>
        
        
        <td><a href="index.php?quanly=quanlytheloai&ac=sua&id=<?php echo $rowtk['idTheloai'] ?>"><img src="background/edit1.png" style="width:50px;height:50px"/></a></td>
        <td><a href="modules/quanlytheloai/xuly.php?id=<?php echo $rowtk['idTheloai'];?>" onclick="return confirm('Bạn có chắc xóa Thể loại <?php echo $rowtk['idTheloai']?> chứ')"><img src="background/delete.jpg" style="width:50px;height:50px"/></a></td>
        
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
<p style="width:200px;color:blue;size:20px;font-style:inherit;float:left"> TRANG HIỆN TẠI LÀ: <?php echo $get_trang?></p>
<form action="" method="post" style="float:right">
    Nhập Tên Thể Loại:<input type="text" name="timkiem" />
    <input type="submit" name="sub-timkiem" value="Tìm Kiếm" />
</form>
   
<table width="100%" border="1">
  <tr class="firstrow" align="center" >
    <td>Id Thể Loại</td>
    <td>Tên Thể Loại</td> 
    <td>Sửa</td>
    <td>Xoá</td>
   
  </tr>
  <?php
    foreach($data as $row)
  { 
  ?>
  <tr align="center">
    <td><?php echo $row['idTheloai'] ?></td>
    <td><?php echo $row['TenTheloai'] ?></td>
   
    <td ><a href="index.php?quanly=quanlytheloai&ac=sua&id=<?php echo $row['idTheloai'] ?>"><img src="background/edit1.png" style="width:50px;height:50px"/></a></td>
    
    <td ><a href="modules/quanlytheloai/xuly.php?id=<?php echo $row['idTheloai'];?>" onclick="return confirm('Bạn có chắc xóa Thể loại thứ <?php echo $row['idTheloai']?> chứ')"><img src="background/delete.jpg" style="width:50px;height:50px"/></a></td>
    
  </tr>
  <?php 
   } 
   ?>
</table>
<BR /><HR />

