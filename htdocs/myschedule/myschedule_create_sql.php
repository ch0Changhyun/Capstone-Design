<?php include("../layout/header.php") ?>
<?php
if(!isset($_SESSION['nickname']) || !isset($_SESSION['nickname'])){
    echo "<script>alert('비회원입니다!');";
    echo "window.location.href=\"../login.php\";</script>";
}
$conn = mysqli_connect("localhost", "root", "database", "sim");
mysqli_query($conn, 'SET NAMES utf8');
$nickname = $_SESSION['nickname'];
$plan_date = $_POST['plan_date'];
$big_area = $_POST['big_area'];
$small_area = $_POST['small_area'];
$content = $_POST['content'];
$sql = "insert into schedule(nickname, plan_date, big_area, small_area, content) values('$nickname', '$plan_date', '$big_area', '$small_area', '$content')";
$result = mysqli_query($conn, $sql);
echo "<script>alert ('일정 생성 완료'); location.href='./myschedule.php';</script>";
?>

<?php include("../layout/footer.php") ?>
