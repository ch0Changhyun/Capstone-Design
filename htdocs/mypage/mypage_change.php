<?php include("../layout/header.php") ?>
<?php
    if(!isset($_SESSION['nickname']) || !isset($_SESSION['nickname'])){
        echo "<script>alert('비회원입니다!');";
        echo "window.location.href=\"../login.php\";</script>";
    }

    $conn = mysqli_connect('localhost', "root", "database", "sim");
    $nickname = $_SESSION['nickname'];
    $sql = "SELECT * FROM membership_info WHERE nickname='$nickname'";
    $res = mysqli_fetch_array(mysqli_query($conn, $sql));
?>

<h1> 기존 정보 </h2>
  <div class=middle>
      <table>
          <tr>
              <th>닉네임</th>
              <td><?=$res['nickname']?></td>
          </tr>
          <tr>
              <th>이름</th>
              <td><?=$res['user_name']?></td>
          </tr>
          <tr>
              <th>전화번호</th>
              <td><?=$res['phone']?></td>
          </tr>
          <tr>
              <th>Email</th>
              <td><?=$res['Email']?></td>
          </tr>
          <tr>
              <th>생년월일</th>
              <td><?=$res['Birth']?></td>
          </tr>
          <tr>
              <th>성별(남-0 여자-1)</th>
              <td><?=$res['sex']?></td>
          </tr>
      </table>
  </div>
  <br></br>
  <h2>수정 정보 입력</h2>
  <div id="regist_wrap" class="wrap">
      <div>
          <form action="./mypage_change_ok.php" method="post" name="regiform" id="regist_form" class="form" onsubmit="return sendit2()">
              <p><input type="text" name="useremail" id="useremail" placeholder="E-mail"><input type="button" value="중복검사" onclick="checkemail();" /></p>
              <p><input type="text" name="userphone" id="userphone" placeholder="Phone Ex) 01012345678"></p>
              <p><input type="text" name="username" id="username" placeholder="Name"></p>
              <p><input type="text" name="birth" id="birth" placeholder="생년월일 Ex)19990101"></p>
              <p><input type="number" name="sex" id="sex" placeholder="성별 Ex)남 : 0 여자 : 1"></p>
              <p><input type="password" name="userpw" id="userpw" placeholder="Password"></p>
              <p><input type="submit" value="수정" class="signup_btn"></p>
          </form>
      </div>
  </div>

  <script src="../regist/regist.js"></script>

  <script>
    function checkemail(){
    var useremail = document.getElementById("useremail").value;
     if(useremail)
      {
          url = "./checkemail.php?useremail="+useremail;
             window.open(url,"chkid","width=300,height=100");
      }else{
           alert("이메일 입력하세요");
           }
          }
  </script>

<?php include("../layout/footer.php") ?>
