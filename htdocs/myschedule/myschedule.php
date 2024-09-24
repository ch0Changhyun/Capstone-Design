<?php include("../layout/header.php") ?>

<?php
    if(!isset($_SESSION['nickname']) || !isset($_SESSION['nickname'])){
        echo "<script>alert('비회원입니다!');";
        echo "window.location.href=\"../login.php\";</script>";
    }
?>

<h2> 나의 일정</h2>
<input type="button" value="일정 생성하러 가기" onclick="schedule_create();" />

  <table class ="list">
      <thead>
          <tr>
              <th width = "100"></th>
              <th width = "300">| 날짜 |</th>
              <th width = "300">| 특별시/도 |</th>
              <th width = "300">| 구/시/군 |</th>
          </tr>
      </thead>

      <?php
          $conn = mysqli_connect("localhost", "root", "111111", "sim");
          mysqli_query($conn, 'SET NAMES utf8');
          $sql = "SELECT * FROM schedule where nickname = '$nickname' ORDER BY plan_date DESC";
          $result = mysqli_query($conn, $sql);
          while ($boardSummary = mysqli_fetch_array($result)) {
      ?>
          <tbody>
              <tr>
                  <th width = "100"></th>
                  <td width="300"><a href="./myschedule_read.php?plan_date=<?php echo $boardSummary['plan_date'];?>"><?php echo $boardSummary['plan_date']?></a></td>
                  <td width="300"><?php echo $boardSummary['big_area']; ?></td>
                  <td width="300"><?php echo $boardSummary['small_area']?></td>
              </tr>
          </tbody>
      <?php }?>
  </table>

<script>
  function schedule_create(){
  window.location.href = './myschedule_create.php'
        }
</script>

<?php include("../layout/footer.php") ?>
