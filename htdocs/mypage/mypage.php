<?php include("../layout/header.php") ?>
<?php
    if(!isset($_SESSION['nickname']) || !isset($_SESSION['nickname'])){
        echo "<script>alert('비회원입니다!');";
        echo "window.location.href=\"./login.php\";</script>";
    }

    $conn = mysqli_connect('localhost', "root", "database", "sim");
    $nickname = $_SESSION['nickname'];
    $sql = "SELECT * FROM membership_info WHERE nickname='$nickname'";
    $res = mysqli_fetch_array(mysqli_query($conn, $sql));
?>

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
<input type="button" value="수정" onclick="info_change();" /><input type="button" value="탈퇴" onclick="info_delete();" />

<script>
  function info_change(){
  window.location.href = './mypage_change.php'
        }
  function info_delete(){
  window.location.href = './mypage_delete.php'
        }
</script>
<?php include("../layout/footer.php") ?>
