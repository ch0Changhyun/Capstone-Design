<?php include("../layout/header.php") ?>

<?php
if(!isset($_SESSION['nickname']) || !isset($_SESSION['nickname'])){
    echo "<script>alert('비회원입니다!');";
    echo "window.location.href=\"../login.php\";</script>";
}

  $conn = mysqli_connect('localhost', "root", "database", "sim");
  $nickname = $_SESSION['nickname'];
	$plan_date = $_GET['plan_date'];
  $sql = "SELECT * FROM schedule WHERE nickname='$nickname' and plan_date = '$plan_date'";
  $res = mysqli_fetch_array(mysqli_query($conn, $sql));
 ?>

 <form action="./myschedule_change_ok.php?plan_date=<?php echo $res['plan_date']; ?>" method="post">
   <p>날짜 : <input type="text" name="plan_date2" value="<?php echo $res['plan_date']; ?> " placeholder="예정일 Ex)19990101"></p>
   <p>기존 지역 : <?php echo $res['big_area']; ?> | <?php echo $res['small_area']; ?></p>
   <p>수정할 지역</p>
   <select onchange="categoryChange(this)" name = "big_area">
     <option><?php echo $res['big_area']; ?></option>
     <option value="서울특별시">서울특별시</option>
     <option value="경기도">경기도</option>
     <option value="강원도">강원도</option>
     <option value="충청남도">충청남도</option>
     <option value="경상남도">경상남도</option>
   </select>

   <select id="area" name = "small_area">
   <option><?php echo $res['small_area']; ?></option>
   </select>

   <br>일정 내용</br>
   <textarea name="content" rows="10" cols="60" required><?php echo $res['content']; ?></textarea>
    <button type="submit">글 수정</button>
 </form>

 <script>
 function categoryChange(cho) {
    var good_a = ["강남구", "서초구", "마초구"];
    var good_b = ["남양주시", "가평군", "화성시"];
    var good_c = ["원주시", "춘천시", "속초시"];
    var good_d = ["서산시", "태안군", "논산시"];
    var good_e = ["거제시", "김해시", "고성군"];
    var target = document.getElementById("area");

    if(cho.value == "서울특별시") var d = good_a;
    else if(cho.value == "경기도") var d = good_b;
    else if(cho.value == "강원도") var d = good_c;
   else if(cho.value == "충청남도") var d = good_d;
   else if(cho.value == "경상남도") var d = good_e;

    target.options.length = 0;

    for (x in d) {
       var opt = document.createElement("option");
       opt.value = d[x];
       opt.innerHTML = d[x];
       target.appendChild(opt);
    }
 }
 </script>

 <?php include("../layout/footer.php") ?>
