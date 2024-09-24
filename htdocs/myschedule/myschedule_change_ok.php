<?php include("../layout/header.php") ?>
<?php
if(!isset($_SESSION['nickname']) || !isset($_SESSION['nickname'])){
    echo "<script>alert('비회원입니다!');";
    echo "window.location.href=\"../login.php\";</script>";
}
    $conn = mysqli_connect('localhost', "root", "database", "sim");
    $nickname = $_SESSION['nickname'];
    $plan_date1 = $_GET['plan_date'];
    $plan_date2 = $_POST['plan_date2'];
    $big_area = $_POST['big_area'];
    $small_area = $_POST['small_area'];
    $content = $_POST['content'];

    $sql2 = "UPDATE schedule SET plan_date='$plan_date2',
    big_area='$big_area', small_area='$small_area', content='$content'
    where nickname = '$nickname' and plan_date = '$plan_date1'";
    $result = mysqli_query($conn, $sql2);

    echo "<script>alert ('일정 수정 완료'); location.href='./myschedule.php';</script>";

?>
<?php include("../layout/footer.php") ?>
