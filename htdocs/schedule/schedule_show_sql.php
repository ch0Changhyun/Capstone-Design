<?php include("../layout/header.php") ?>


<?php
    if(!isset($_SESSION['nickname']) || !isset($_SESSION['nickname'])){
        echo "<script>alert('비회원입니다!');";
        echo "window.location.href=\"./login.php\";</script>";
    }

    $conn = mysqli_connect('localhost', "root", "111111", "sim");
    $plan_date_star = $_POST['plan_date_star'];
    $plan_date_end = $_POST['plan_date_end'];
    $big_area = $_POST['big_area'];
    $small_area = $_POST['small_area'];
    if($small_area == '전체'){
      $sql = "SELECT * FROM schedule WHERE plan_date between $plan_date_star and $plan_date_end
      and  big_area='$big_area' ORDER BY plan_date";
    } else{
    $sql = "SELECT * FROM schedule WHERE plan_date between  $plan_date_star and $plan_date_end
    and big_area='$big_area' and small_area = '$small_area' ORDER BY plan_date";
  }
    $result = mysqli_query($conn, $sql);
    $total = mysqli_num_rows($result);
?>
<p><?php echo $plan_date_star; ?> ~ <?php echo $plan_date_end; ?></p>
<p><?php echo $big_area; ?> | <?php echo $small_area; ?></p>
<p> 총 여행 예정 수 : <?php echo $total; ?></p>
<table class ="list">
  <thead>
      <tr>
        <th width = "300">| 날짜 |</th>
     </tr>
 </thead>
<?php while ($res = mysqli_fetch_array($result)){ ?>
<tbody>
    <tr>
        <td width="300"><?php echo $res['plan_date']?></a></td>
    </tr>
</tbody>
<?php }?>
</table>

<?php include("../layout/footer.php") ?>
