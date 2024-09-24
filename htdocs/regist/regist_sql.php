
<?php
$conn = mysqli_connect("localhost", "root", "database", "sim");
mysqli_query($conn, 'SET NAMES utf8');
$nickname = $_POST['nickname'];
$email = $_POST['useremail'];
$tel = $_POST['userphone'];
$name = $_POST['username'];
$birth = $_POST['birth'];
$sex = $_POST['sex'];
$password = $_POST['userpw'];
$sql = "insert into membership_info values('$nickname', '$name', '$tel', '$email', '$birth', '$sex', '$password')";
$result = mysqli_query($conn, $sql);
echo "<script>alert ('회원가입 완료'); location.href='../login.php';</script>";
?>
