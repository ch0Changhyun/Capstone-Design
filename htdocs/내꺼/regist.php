<head>

</head>
<body>
    <div id="regist_wrap" class="wrap">
        <div>
            <h1>Regist Form</h1>
            <form action="regist_ok.php" method="post" name="regiform" id="regist_form" class="form" onsubmit="return sendit()">
                <p><input type="text" name="nickname" id="nickname" placeholder="nickname">
                <p><input type="text" name="useremail" id="useremail" placeholder="E-mail"></p>
                <p><input type="text" name="userphone" id="userphone" placeholder="Phone Ex) 010-1234-5678"></p>
                <p><input type="text" name="username" id="username" placeholder="Name"></p>
                <p><input type="text" name="born" id="born" placeholder="생년월일 Ex)19990101"></p>
                <p><input type="number" name="sex" id="sex" placeholder="성별 Ex)남 : 0 여자 : 1"></p>
                <p><input type="password" name="userpw" id="userpw" placeholder="Password"></p>
                <p><input type="password" name="userpw_ch" id="userpw_ch" placeholder="Password Check"></p>
                <p><input type="submit" value="Sign Up" class="signup_btn"></p>
            </form>
        </div>
    </div>
    <script src="./regist.js"></script>
</body>
