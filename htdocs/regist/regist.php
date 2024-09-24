<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <title>회원가입</title>
</head>
<body>
    <div id="regist_wrap" class="wrap">
        <div>
            <h1>Regist Form</h1>
            <form action="./regist_sql.php" method="post" name="regiform" id="regist_form" class="form" onsubmit="return sendit()">
                <p><input type="text" name="nickname" id="nickname" placeholder="nickname"><input type="button" value="중복검사" onclick="checknick();" /></p>
                <p><input type="text" name="useremail" id="useremail" placeholder="E-mail"></p>
                <p><input type="text" name="userphone" id="userphone" placeholder="Phone Ex) 01012345678"></p>
                <p><input type="text" name="username" id="username" placeholder="Name"></p>
                <p><input type="text" name="birth" id="birth" placeholder="생년월일 Ex)19990101"></p>
                <p><input type="number" name="sex" id="sex" placeholder="성별 Ex)남 : 0 여자 : 1"></p>
                <p><input type="password" name="userpw" id="userpw" placeholder="Password"></p>
                <p><input type="password" name="userpw_ch" id="userpw_ch" placeholder="Password Check"></p>
                <p><input type="submit" value="Sign Up" class="signup_btn"></p><input type = reset value="다시 작성">
            </form>
        </div>
    </div>
    <a href='../login.php'>로그인으로 이동</a>
    <script src="./regist.js"></script>
    <!--닉네임 중복 검사-->
    <script>
      function checknick(){
	    var nickname = document.getElementById("nickname").value;
	     if(nickname)
	      {
		        url = "./checknick.php?nickname="+nickname;
			         window.open(url,"chkid","width=300,height=100");
		    }else{
			       alert("아이디를 입력하세요");
		         }
	          }
    </script>

</body>
