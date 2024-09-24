<?php include("../layout/header.php") ?>
<?php
$conn = mysqli_connect("localhost", "root", "database", "sim");
mysqli_query($conn, 'SET NAMES utf8');
$email = $_GET['useremail'];
$sql = "SELECT * from membership_info where Email ='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if($row != null){
        echo "<script> alert ('사용 중인 이메일입니다!');</script>";
} else {
    echo "<Script> alert ('사용 가능한 이메일입니다!');</script>";
}
 ?>
