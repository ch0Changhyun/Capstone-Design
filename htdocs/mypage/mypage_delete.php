<?php include("../layout/header.php") ?>

<h1>회원 탈퇴 페이지</h1>
<h3>회원 탈퇴 시 기존에 있던 데이터들은 모두 사라집니다.<h3>
<p>탈퇴 버튼을 누르면 그 즉시 탈퇴됩니다.</p>
<p>회원 탈퇴 시에 필요한 닉네임/이메일/비밀번호 를 입력해주세요.</p>
<form action="mypage_delete_ok.php" method="post" name="regiform" id="regist_form" class="form" onsubmit="return sendit3()">
    <p><input type="text" name="nickname" id="nickname" placeholder="nickname">
    <p><input type="text" name="useremail" id="useremail" placeholder="E-mail">
    <p><input type="password" name="userpw" id="userpw" placeholder="Password"></p>
    <p><input type="submit" value="탈퇴" class="signup_btn"></p>
</form>

<script src="../regist.js"></script>

<?php include("../layout/footer.php") ?>
