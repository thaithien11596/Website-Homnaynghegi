
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="viewport" content="width=device-width">
    <title></title>
    
  
</head>
<style>
  .col-sm-4.col4{min-height: 100px}
  .col-sm-8.col8{min-height: 100px}
 .col-sm-8.col8{top: 80px}
 .ul1{color:white;list-style: none;font-size: 18px;float: right} 
    @media(max-width: 1200px){

        
    }
     @media(max-width: 992px){

        .col-sm-8.col8{top: 0px}
        .ul1{float: left}
    }
      @media(max-width: 768px){
    
        .col-sm-8.col8{top: 0px;min-height: 200px}
        .ul1{float: left: }
       
    }
   
</style>
<body>
    <?php include('header1.php');
    if(isset($_GET['idAlbum'])){$idAlbum=$_GET['idAlbum'];}
             $music=new Music();
            $randAlbum=$music->randAlbum();
            $album=$music->album($idAlbum);
            foreach ($album as $result) {
                
            }
    ?>
    <div class="container" style="min-height: 600px">
        <div class="row">
            <div class="col-sm-8">
                  <div class="col-sm-4 col4" style="padding-right: 0px;">
                    <img src="../img/<?= $result['imageAlbum'] ?>" style="width: 150px;height: 150px;border: 1px solid white;box-shadow: 0 0 3px 1px;float: left" alt="">
               
            </div>
            <div class="col-sm-8 col8">
                <ul style="color: white;list-style: none;font-size: 18px;float: left;">
                    
                    <li ><p>&nbsp;<?= $result['TenAlbum'] ?></p></li>
                    <li ><p>&nbsp;Người đăng: Homnaynghegi</p></li>
                </ul>
                <ul class="ul1" >
                    <li style="left: 10px"><p><span class="glyphicon glyphicon-headphones"> </span> <?= number_format($result['LuotngheAlbum']) ?></p></li>
                    <li><p><span class="glyphicon glyphicon-pushpin"> </span> <?= $result['NgaydangAlbum'] ?></p></li>
                </ul>
            </div>
            <div class="row">
                
        <div class="col-sm-12" style="padding-right: 0px">
           <div style="margin:12px auto;">

    <!-- Insert to your webpage where you want to display the audio player -->
    <div id="amazingaudioplayer-1" style="display:block;position:relative;width:100%;height:auto;margin:0px auto 0px;">
        <ul class="amazingaudioplayer-audios" style="display:none;">
       
            <?php foreach ($album as $result):

                $singNumber = $result['LuotngheAlbum'] +1 ;
                 $datasingNumber = $music->upsingAlbum($singNumber,$idAlbum);   
             ?>


                 <a href="albumSing.php?id=5"><li data-artist="" data-title="<?= $result['TenBaihat'] ?>" data-album="" data-info="" data-image="" data-duration="252" ">
                <div class="amazingaudioplayer-source" data-src="../<?= $result['LinkBaihat'] ?>" data-type="audio/mpeg" />
            </li></a>7
            <?php endforeach ?>
        </ul>
        <div class="amazingaudioplayer-engine" style="display:none;"><a href="http://amazingaudioplayer.com" title="mp3 player for website">mp3 player for website</a></div>
    </div> <!-- Hết amazing -->
    <!-- End of body section HTML codes -->

    </div>

            </div>

             </div>
             <div class="row">
               <div class="col-sm-12" style="padding-right: 0px">
                 <div class="jumbotron" style="font-size: 18px;margin-top: 10px;">
          
            <div class="row">
              <div class="col-sm-12">Lời bài hát: Coming Soon </div>
            
            </div>
            
          </div>
               </div>
             </div>
            </div> <!-- Hết col8-->
               
           <div class="col-sm-4  noidungtrai2">
                            <p>Abum</p>
                                                        
                                <div class="list-group lstbxh">
                                    <?php 
                                        foreach ($randAlbum as $result) {

                                        //while ($result1 = mysqli_fetch_assoc($database1)) { ?>
                                            <a href="albumSing.php?idAlbum=<?= $result['idAlbum'] ?>" class="list-group-item list-group-item-action lstbxh"><img src="../img/<?= $result['imageAlbum'] ?>" alt="" style="width: 40px"> <?= $result['TenAlbum'] ?></a>
                                    <?php
                                        }

                                     ?>
                                

                                </div>
                                    
                        
            </div> <!-- Hết col4 noidungtrai-->

       
    
       </div> <!-- Hết row-->
    </div> <!-- Hết container-->
    
<div class="jumbotron jbt">
                <div class="container container5">
                    <h3>Thông tin</h3>
                    <hr class="m-y-md">
                    <div class="row">
                        <div class="col-sm-6">
                        <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo" style="background: linear-gradient(#981414,#6f1616);">Giới thiệu</button>
                        
                            <div id="demo" class="collapse" style="text-align: justify;">
                                <p style="font-size: 18px;">Website nghe nhạc trực tuyến homnaynghegi.tk nhằm mục đích mang âm nhạc đến với gần với tất cả mọi người hay những người yêu nhạc thông qua mạng Internet.</p>
                          </div>
                          <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo4" style="background: linear-gradient(#981414,#6f1616);">FAQs</button>
                        
                            <div id="demo4" class="collapse" style="text-align: justify;">
                                <p style="font-size: 18px;">Coming Soon</p>
                          </div>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo1" style="background: linear-gradient(#981414,#6f1616);">Hỗ trợ</button>
                        
                            <div id="demo1" class="collapse colp" style="margin-top: 5px;text-align: justify;">
                              <p style="font-size: 18px"><span class="glyphicon glyphicon-map-marker"></span> Việt Nam, HCM City</p>
                              <p style="font-size: 18px"><span class="  glyphicon glyphicon-earphone"></span> 0906929906</p>
                              <p style="font-size: 18px"><span class="glyphicon glyphicon-envelope"></span> thaithien11596@gmail.com</p>
                          </div>
                            <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#demo2" style="background: linear-gradient(#981414,#6f1616);">Góp ý</button>
                        
                            <div id="demo2" class="collapse colp" style="margin-top: 5px">
                              <p style="font-size: 18px;"><span class=" glyphicon glyphicon-pencil"></span> Mọi ý kiến đóng góp website vui lòng Email về thaithien11596@gmail.com hoặc SĐT: 0906929906</p>
                            
                          </div>

                    </div>
                    
                    

                    </div>
                    
                      
                </div><!-- Hết container5-->
                 <div class="footer">
                <div class="container container6">
                    <p>Copyright &copy;2017 by Homnaynghegi.tk</p>
                    <p class="pleft">Designed by BanhMi3T</p>
                    <a id="back-to-top" href="#" class="btn btn-danger btn-lg back-to-top" role="button" title="Nhấn để về đầu trang" data-toggle="tooltip" data-placement="left" style="background: linear-gradient(#1d769e,#266582);border:1px solid blue;border-radius: 5px"><span class="glyphicon glyphicon-chevron-up"></span></a>
                </div>
            </div><!-- Hết Footer -->
    </div> <!-- Hết jumbotron-->


   <!-- Insert to your webpage before the </head> -->
    <script src="albumSing/audioplayerengine/jquery.js"></script>
    <script src="albumSing/audioplayerengine/amazingaudioplayer.js"></script>
    <link rel="stylesheet" type="text/css" href="albumSing/audioplayerengine/initaudioplayer-1.css">
    <script src="albumSing/audioplayerengine/initaudioplayer-1.js"></script>
    <!-- End of head section HTML codes -->

    <script>
        var a = document.getElementById('mylist').getElementsByTagName('li');

for(var i = 0; i < a.length; i++){
      a[i].onclick = function(){
            alert(this.innerHTML);
      }
}
    </script>
    <!-- End of head section HTML codes -->

</body>
</html>