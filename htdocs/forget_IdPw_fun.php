<?php
$conn = mysqli_connect("localhost", "root", "database", "sim");
$username = $_POST['username'];
$userphone = $_POST['userphone'];
$sql = "select * from membership_info where user_name ='$username' && phone ='$userphone'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
if($row["user_name"] == $username){
    echo "<script> alert('회원님의 E-mail는 ".$row['Email']."이고 비밀번호는 ".$row['PW']."입니다.'); location.replace('login.php'); </script>";
} else {
    echo "<script> alert('해당 계정의 정보가 없습니다.'); history.back(); </script>";
}
?>
