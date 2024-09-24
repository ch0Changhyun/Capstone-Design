<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
</head>
<body>
  <h1>Login 페이지</h1>
    <form method ="post" action ="login_funtion.php">
    <p>E-mail : <input type = "text" name = "Email" placeholder= "Email"></p>
    <p>비밀번호 : <input type = "password" name= "password" placeholder="pw"></p>
    <p><input type = submit value = "로그인"></p>
    </form>
    <form method = "post" action = "./regist/regist.php">
        <input type = submit value = "회원가입">
    </form>
    <p class="forgetIdPw"><a href="forget_IdPw.php">가입된 E-mail/PW 찾기</a></p>
</body>
</html>
