<?php include("../layout/header.php") ?>
<?php
if(!isset($_SESSION['nickname']) || !isset($_SESSION['nickname'])){
    echo "<script>alert('비회원입니다!');";
    echo "window.location.href=\"../login.php\";</script>";
}
    $conn = mysqli_connect('localhost', "root", "database", "sim");
    $nickname = $_SESSION['nickname'];
    $title = $_GET['title'];
    $changetitle = $_POST['changetitle'];
    $big_area = $_POST['big_area'];
    $small_area = $_POST['small_area'];
    $content = $_POST['content'];

    $sql1 = "UPDATE board_summary SET title='$changetitle',
    big_area='$big_area', small_area='$small_area'
    where nickname = '$nickname' and title = '$title'";
    $sql2 = "UPDATE board SET title='$changetitle', content='$content'
    where nickname = '$nickname' and title = '$title'";
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    echo "<script>alert ('게시물 수정 완료'); location.href='./myboard.php';</script>";

?>
<?php include("./layout/footer.php") ?>
