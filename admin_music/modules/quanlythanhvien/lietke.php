
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
<div style="font-size:30px;color:blue;float: right">QUẢN LÝ THÔNG TIN THÀNH VIÊN</div>
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
        $trang1=($get_trang*25)-25;
    }
    
    $sql="select * from thanhvien limit $trang1,25"; // trang1 (vị trí thành viên hiện tại) , lấy 25 thành viên
    $objStm = $objPdo->query($sql);
    $data = $objStm->fetchAll(PDO::FETCH_ASSOC);
    
    //-------//đếm số dòng có trong thành viên -> tương ứng đếm số thành viên
    $sql_sql="SELECT count(*) FROM thanhvien";
    $result = $objPdo->query($sql_sql);
    $row = $result->fetch(PDO::FETCH_NUM);
    $a=ceil($row[0]/25);
    for($b=1;$b<=$a;$b++){
        echo '<a href="index.php?quanly=quanlythanhvien&ac=them&trang='.$b.'" style="text-decoration:none;">'.' '. $b .' '.'</a>'; 
    }
    echo '<br>'.'TỔNG THÀNH VIÊN LÀ: '.$row[0];
    // ---------------------------- tìm kiếm sp
    if(isset($_POST['sub-timkiem'])){
    $matk=$_POST['timkiem'];
    $sql_tk="select * from thanhvien where HotenThanhvien like '%$matk%'";
    $objStmtk = $objPdo->query($sql_tk);
    $datatk = $objStmtk->fetchAll(PDO::FETCH_ASSOC);
        foreach($datatk as $rowtk)
        { 
            $m=$rowtk['HotenThanhvien'];
            if($matk=='$m'){
                echo '<script>alert("Không tìm thấy Tên Thành viên")</script>';
            }else{
    ?>
    <BR /><hr /><p style="color:#000;background:pink" align="center">THÀNH VIÊN TÌM KIẾM:</p>
    <table width="100%" border="1">
      <tr align="center" style="background:#0040FF;color:#CEF6F5">
        
        <td>Id Thành viên</td>
        <td>Username</td>
        <td>Password</td>
        <td>Họ Tên Thành viên</td>
        <td>Giới Tính Thành viên</td>
        <td>Số Điện Thoại Thành viên</td> 
        <td>Địa Chỉ Thành viên</td>
        <td>Ngày Sinh Thành viên</td>
        <td>Trạng Thái HĐ</td>
        <td>Email Thành viên</td>
        
        <td colspan="2">Quản lý</td>
      </tr>
      
      <tr align="center">
        
        <td><?php echo $rowtk['idThanhvien'] ?></td>
        <td><?php echo $rowtk['username'] ?></td>
        <td><?php echo $rowtk['password'] ?></td>
        <td><?php echo $rowtk['HotenThanhvien'] ?></td>
        <td><?php echo $rowtk['GioitinhThanhvien'] ?></td> 
        <td><?php echo $rowtk['SdtThanhvien'] ?></td>
        <td><?php echo $rowtk['DiachiThanhvien'] ?></td> 
        <td><?php echo $rowtk['NgaysinhThanhvien'] ?></td> 
        <td><?php echo $rowtk['TrangthaiHD'] ?></td>
        <td><?php echo $rowtk['EmailThanhvien'] ?></td>   
        
        <td><a href="index.php?quanly=quanlythanhvien&ac=sua&id=<?php echo $rowtk['idThanhvien'] ?>"><img src="background/edit1.png" style="width:50px;height:50px"/></a></td>

      </tr>
      <?php 
            } 
        }
    ?>
    </table>
    <p style="background:pink;height:20px"></p>
    <?php } ?>
    <!-- END CODE TÌM KIẾM -->
     <br />
<p style="width:200px;color:#00F;size:20px;font-style:inherit;float:left"> TRANG HIỆN TẠI LÀ: <?php echo $get_trang?></p>
<form action="" method="post" style="float:right">
        Nhập Tên Thành viên:<input type="text" name="timkiem" />
    <input type="submit" name="sub-timkiem" value="Tìm Kiếm Thành Viên" />
</form>
   
<table width="100%" border="1">
  <tr class="firstrow" align="center">
    <td>Id Thành viên</td>
    <td>Username</td>
    <td>Password</td>
    <td>Họ Tên Thành viên</td> 
    <td>Giới Tính Thành viên</td>
    <td>Số Điện Thoại Thành viên</td>
    <td>Địa Chỉ Thành viên</td>
    <td>Ngày Sinh Thành viên</td>
    <td>Trạng Thái Hoạt Động</td>
    <td>Email Thành viên</td>
    <td>Sữa</td>
   
  </tr>
  <?php
    foreach($data as $row)
    { 
  ?>
  <tr align="center">
    <td><?php echo $row['idThanhvien'] ?></td>
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['password'] ?></td>
    <td><?php echo $row['HotenThanhvien'] ?></td>
    <td><?php echo $row['GioitinhThanhvien'] ?></td>
    <td><?php echo $row['SdtThanhvien'] ?></td>
    <td><?php echo $row['DiachiThanhvien'] ?></td>
    <td><?php echo $row['NgaysinhThanhvien'] ?></td>
    <td><?php echo $row['TrangthaiHD'] ?></td>
    <td><?php echo $row['EmailThanhvien'] ?></td>

    
    <td><a href="index.php?quanly=quanlythanhvien&ac=sua&id=<?php echo $row['idThanhvien'] ?>"><img src="background/edit1.png" style="width:50px;height:50px"/></a></td>
    
  </tr>
  <?php 
   } 
   ?>
</table>
<BR /><HR />

