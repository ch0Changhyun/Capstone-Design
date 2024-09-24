<?php include("layout/header.php") ?>
<?php
//var_dump($_POST);
$conn = mysqli_connect("localhost", "root", "database", "sim");
$nickname=$_SESSION['nickname'];
$title = $_POST['title'];
$content = $_POST['content'];
$big = $_POST['big_area'];
$small = $_POST['small_area'];

$imgfile = $_FILES['fileToUpload'];

if(isset($imgfile)){
    $dir = "image/";
    $file_name = basename($imgfile['name']);
    $tmp_name = $imgfile['tmp_name'];
    $res = move_uploaded_file($tmp_name, $dir.$file_name);
}

if($res){
    $sql = "INSERT INTO board_summary (nickname, title, main_image, big_area, small_area, create_date, views) VALUES ('$nickname', '$title', '$file_name', '$big', '$small', NOW(), 0)";
    $sql2 = "INSERT INTO board (nickname, title, serve_image1, serve_image2, serve_image3, serve_image4, serve_image5, content) VALUES ('$nickname', '$title', '$file_name', NULL, NULL, NULL, NULL, '$content')";
} else{
    $sql = "INSERT INTO board_summary (nickname, title, main_image, big_area, small_area, create_date, views) VALUES ('$nickname', '$title', '', '$big', '$small', NOW(), 0)";
    $sql2 = "INSERT INTO board (nickname, title, serve_image1, serve_image2, serve_image3, serve_image4, serve_image5, content) VALUES ('$nickname', '$title', '', '', '', '', '', '$content')";
}
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);

if($result && $result2){
    echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.replace('main.php');</script>";

} else{
   echo "<script>
    alert('글쓰기에 실패했습니다.');
    history.back();</script>";
}
?>
<?php include("layout/footer.php") ?>
