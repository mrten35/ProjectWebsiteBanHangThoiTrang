<?php 

include_once '../model/User.php';
function insertUser($user){
    $servername = "localhost:4306";
    $username = "root";
    $password = "";
    $dbname="thweb";
    $txt_name=$user->get_tenkh();
    $txt_email=$user->get_email();
    $txt_account=$user->get_tendangnhap();
    $txt_password=$user->get_password();
    $txt_phone=$user->get_sdt();
    $rdg_sex=$user->get_sex();
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $stmt = $conn->prepare("INSERT INTO user (tenkh, email, tendangnhap, password,sdt,gioitinh)
        VALUES (:tenkh, :email, :tendangnhap,:password,:sdt, :gioitinh)");
        $stmt->bindParam(':tenkh', $txt_name);
        $stmt->bindParam(':email', $txt_email);
        $stmt->bindParam(':tendangnhap', $txt_account);
        $stmt->bindParam(':password', $txt_password);
        $stmt->bindParam(':sdt', $txt_phone);
        $stmt->bindParam(':gioitinh',$rdg_sex);
        $stmt->execute();
        echo'<script>
        window.alert("Tạo tài khoản thành công");
        </script>';
        header("Location: ../view/dangnhap.php");
    } catch(PDOException $e) {
        echo $sql. "<br>" . $e->getMessage();
      }finally{
        $conn = null;
    }
}
/*
$txt_name=$_POST["txt_name"];
$txt_email=$_POST["txt_email"];
$txt_account=$_POST["txt_account"];
$txt_password=md5($_POST["txt_password"]);
$txt_phone=$_POST["txt_phone"];
$rdg_sex=$_POST["rdg_sex"];
$user=new User($txt_name,$txt_email,$txt_account,$txt_password,$txt_phone,$rdg_sex);
insertUser($user);*/

function getUserByEmail($email){
    $servername = "localhost:4306";
    $username = "root";
    $password = "";
    $dbname="thweb";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $stmt = $conn->prepare("SELECT email FROM  user where email=:email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user;
    } catch(PDOException $e) {
        echo "Đăng ký thất bại" . $e->getMessage();
      }finally{
        $conn = null;
    }
}

function getUserByAcount($tendangnhap){
    $servername = "localhost:4306";
    $username = "root";
    $password = "";
    $dbname="thweb";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $stmt = $conn->prepare("SELECT tendangnhap FROM  user where tendangnhap=:tendangnhap");
        $stmt->bindParam(':tendangnhap', $tendangnhap);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user;
    } catch(PDOException $e) {
        echo "Đăng ký thất bại" . $e->getMessage();
      }finally{
        $conn = null;
    }
}

if (count($_POST) > 0) {
    $txt_name=$_POST["txt_name"];
    $txt_email=$_POST["txt_email"];
    $txt_account=$_POST["txt_account"];
    $txt_password=md5($_POST["txt_password"]);
    $txt_phone=$_POST["txt_phone"];
    $rdg_sex=$_POST["rdg_sex"];
    $user=getUserByEmail($txt_email);

   
    $user=getUserByAcount($txt_account);
    if(isset($user['tendangnhap'])) {
        echo'<script>
        window.alert("Tên đăng nhập đã tồn tại! Đăng ký thất bại");
        window.history.back();
        </script>';
        die();
       
    }else{
        $user=new User($txt_name,$txt_email,$txt_account,$txt_password,$txt_phone,$rdg_sex);
        insertUser($user);
    }
}



/*
    $email = $_POST["txt_email"]; 
    $regex = "/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/";
    if ( preg_match( $regex, $email )){
        echo $email . " đăng ký thành công.";
        header("Location: ../view/dangnhap.php");
    }else {
        echo $email . "Email không hợp lệ.";
        echo "<a href='../view/dangky.php'>Vui lòng thử lại</a>";
    }*/
?>
