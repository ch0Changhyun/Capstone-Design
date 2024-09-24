<?php include("../layout/header.php") ?>

<p>한 날짜에는 1개의 일정만 생성 가능합니다.</p>
<p>내용 변경 시 수정 기능을 사용해주세요.</p>

<form action="./myschedule_create_sql.php" method="post" name="scheduleform" id="schedule_form" class="form" onsubmit="return sendit3()">
  <select onchange="categoryChange(this)" name = "big_area">
    <option>특별시/도</option>
    <option value="서울특별시">서울특별시</option>
    <option value="경기도">경기도</option>
    <option value="강원도">강원도</option>
    <option value="충청남도">충청남도</option>
    <option value="경상남도">경상남도</option>
  </select>

  <select id="area" name = "small_area">
  <option>구/시/군</option>
  </select>

    <p>날짜 : <input type="text" name="plan_date" id="plan_date" placeholder="예정일 Ex)19990101"></p>
    <p>일정 내용</p>
    <p><textarea rows="10" cols="60" name="content"></textarea></p>
    <p><input type="submit" value="일정 생성" class="signup_btn"></p>
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
