
<?php
$conn = mysqli_connect("localhost", "root", "database", "sim");
mysqli_query($conn, 'SET NAMES utf8');
$nickname = $_GET['nickname'];
$sql = "select * from membership_info where nickname ='$nickname'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if($row != null){
        echo "<script> alert ('사용 중인 닉네임입니다!');</script>";
} else {
    echo "<Script> alert ('사용 가능한 닉네임입니다!');</script>";
}
 ?>
