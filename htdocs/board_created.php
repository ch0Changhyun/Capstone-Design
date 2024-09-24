<?php include("layout/header.php") ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>생성 페이지</title>
</head>
<body>
<h1>게시판 생성</h1>
    <form action ="board_created_func.php" method ="POST" enctype="multipart/form-data">
        <p><input type="text" name="title" rows = "1" cols="100" placeholder = "제목" required></p>
        <textarea name="content" rows = "10" cols="100" placeholder = "내용" required></textarea><br>
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
        <br>
        <input type="file" name="fileToUpload"><br/>
        <div class = "writeBtn">
        <input type = "submit" value="작성" name = "submit"> &nbsp;
        <input type = "button" value="작성 취소" onclick="history.back()">
        </div>
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
</body>
</html>
<?php include("layout/footer.php") ?>
