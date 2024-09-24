<?php include("../layout/header.php") ?>

<?php
    if(!isset($_SESSION['nickname']) || !isset($_SESSION['nickname'])){
        echo "<script>alert('비회원입니다!');";
        echo "window.location.href=\"../login.php\";</script>";
    }

    $conn = mysqli_connect('localhost', "root", "database", "sim");
    $plan_date = $_GET['plan_date'];
    $sql = "SELECT * FROM schedule WHERE nickname='$nickname' and plan_date = '$plan_date'";
    $res = mysqli_fetch_array(mysqli_query($conn, $sql));
?>

<p>날짜 : <?php echo $res['plan_date']; ?></p>
<p>지역 : <?php echo $res['big_area']; ?> | <?php echo $res['small_area']; ?></p>
<p>일정 내용</p>
<p><?php echo nl2br($res['content']); ?></p>

<!-- 목록, 수정, 삭제 -->
<div id="bo_ser">
  <ul>
    <li><a href="./myschedule_change.php?plan_date=<?php echo $res['plan_date']; ?>">[수정]</a></li>
    <li><a href="./myschedule_delete_spl.php?plan_date=<?php echo $res['plan_date']; ?>">[삭제]</a></li>
  </ul>
</div>



<?php include("../layout/footer.php") ?>
