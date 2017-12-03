 <?php 
        $error = "";
        if(isset($_POST['smlogin'])){
            if(empty($_POST['username']) || empty($_POST['password'])){              
               // header("Location:index.html");
                $error = "Tài khoản hoặc mật khẩu không được để trống";

            }
            // if(empty($_POST['password']))  {    }
            else {
                $user = $_POST["username"];
                echo $user;
                $pass =$_POST["password"];
                $connect = mysqli_connect('localhost', 'root', '', 'music_database');
                if(!($connect)){
                    die('Can not connect database');
                }
                $sql = "SELECT
                    *
                    FROM
                    admin
                    WHERE
                    admin.`user` = '$user' AND
                    admin.`pass` = '$pass'";
                $result = mysqli_query($connect,$sql);
                $rows = mysqli_num_rows($result);
                if($rows == 1){
                    header("Location:index1.html");
                }
                else {
                    $error = "Tài khoản hoặc mật khẩu không đúng";
                }
                
                mysqli_close($connect);
             }
            
        }


 ?>