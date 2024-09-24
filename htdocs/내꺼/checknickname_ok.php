<?php
    $conn = mysqli_connect("localhost", "root", "111111", "sim") or die('데이터베이스가 없습니다.');

    $nickname = $_GET['nickname'];
    $sql = "select nickname from membership_info where nickname='$nickname'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    echo isset($data['nickname']) ? "X" : "O";
?>
