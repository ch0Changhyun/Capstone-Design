<?php
header("Content-Type: text/html; charset= UTF-8");
session_start();
$conn = mysqli_connect("localhost", "root", "database", "sim");
$Email = $_POST['Email'];
$password = $_POST['password'];
$sql = "select * from membership_info where Email ='$Email' and PW ='$password'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if($row != null){
    $_SESSION['nickname'] = $row['nickname'];
        echo "<script> location.replace('main.php');</script>";
} else {
    echo "<Script> alert ('로그인 실패!'); location.replace('login.php');</script>";
}
 ?>
