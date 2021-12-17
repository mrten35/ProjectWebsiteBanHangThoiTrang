<?php
    include_once '../model/User.php';
    function getUserByEmail($email){
        $servername = "localhost:4306";
        $username = "root";
        $password = "";
        $dbname="thweb";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $stmt = $conn->prepare("SELECT email, password FROM  user where email=:email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            return $user;
        } catch(PDOException $e) {
            echo "Đăng nhập thất bại" . $e->getMessage();
          }finally{
            $conn = null;
        }
    }
    function UpdatePasswordByEmail($email,$newpassword){
        $servername = "localhost:4306";
        $username = "root";
        $password = "";
        $dbname="thweb";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $stmt = $conn->prepare("UPDATE  user set password=:newpass where email=:email");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':newpass', $newpassword);
            return $stmt->execute();
        } catch(PDOException $e) {
            echo "Đăng nhập thất bại" . $e->getMessage();
          }finally{
            $conn = null;
        }
    }
    if (count($_POST) > 0) {
        $username = $_POST["txt_username"];
        $passwd = md5($_POST["txt_password"]);
        $newpasswd = md5($_POST["txt_newpassword"]);        
        $user=getUserByEmail($username);
        if($username == $user['email'] && $passwd == $user['password']) {
            UpdatePasswordByEmail($username,$newpasswd);
            echo'<script>
            window.alert("Email hoặc mật khẩu không tồn tại! Đăng nhập thất bại");
            </script>';
           header("Location: ../view/dangnhap.php");
           
        }
    }
?>