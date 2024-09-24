<?php include("../layout/header.php") ?>
<?php
if(!isset($_SESSION['nickname']) || !isset($_SESSION['nickname'])){
    echo "<script>alert('비회원입니다!');";
    echo "window.location.href=\"../login.php\";</script>";
}
    $conn = mysqli_connect('localhost', "root", "database", "sim");
    $nickname = $_SESSION['nickname'];
    $title = $_GET['title'];
    $sql = "DELETE FROM board_summary WHERE nickname = '$nickname' and title = '$title'";
    $result = mysqli_query($conn, $sql);
    if($result){
    echo "<script>alert ('게시글 삭제 완료'); location.href='./myboard.php';</script>";
  }
?>
<?php include("../layout/footer.php") ?>
