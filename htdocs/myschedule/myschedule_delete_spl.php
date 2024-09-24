<?php include("../layout/header.php") ?>
<?php
if(!isset($_SESSION['nickname']) || !isset($_SESSION['nickname'])){
    echo "<script>alert('비회원입니다!');";
    echo "window.location.href=\"../login.php\";</script>";
}
    $conn = mysqli_connect('localhost', "root", "database", "sim");
    $nickname = $_SESSION['nickname'];
    $plan_date = $_GET['plan_date'];
    $sql = "DELETE FROM schedule WHERE nickname = '$nickname' and plan_date = '$plan_date'";
    $result = mysqli_query($conn, $sql);
    if($result){
    echo "<script>alert ('일정 삭제 완료'); location.href='./myschedule.php';</script>";
  }
?>
<?php include("../layout/footer.php") ?>
