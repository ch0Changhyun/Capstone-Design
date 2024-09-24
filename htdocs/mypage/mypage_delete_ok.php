<?php include("../layout/header.php") ?>
<?php
    if(!isset($_SESSION['nickname']) || !isset($_SESSION['nickname'])){
        echo "<script>alert('비회원입니다!');";
        echo "window.location.href=\"../login.php\";</script>";
    }

    $conn = mysqli_connect('localhost', "root", "database", "sim");
    $nickname = $_SESSION['nickname'];
    $useremail = $_POST['useremail'];
    $userpw = $_POST['userpw'];
    $sql = "DELETE FROM membership_info WHERE nickname = '$nickname' and Email = '$useremail' and PW = '$userpw'";
    $result = mysqli_query($conn, $sql);
    if($result){
    echo "<script>alert ('회원 탈퇴 완료'); location.href='../login.php';</script>";
  } else {
    echo "<script>alert ('회원 탈퇴 실패'); location.href='../login.php';</script>";
  }
?>
<?php include("../layout/footer.php") ?>
