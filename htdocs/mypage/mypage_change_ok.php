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

    $useremail = $_POST['useremail'];
    $userphone = $_POST['userphone'];
    $username = $_POST['username'];
    $birth = $_POST['birth'];
    $sex = $_POST['sex'];
    $userpw = $_POST['userpw'];

    if($useremail==NULL){
      $useremail = $res['Email'];
    }
    if($userphone==NULL){
      $userphone = $res['userphone'];
    }
    if($username==NULL){
      $username = $res['user_name'];
    }
    if($birth==NULL){
      $birth = $res['Birth'];
    }
    if($sex==NULL){
      $sex = $res['sex'];
    }
    if($userpw==NULL){
      $userpw = $res['PW'];
    }

    $sql2 = "UPDATE membership_info SET Email='$useremail',
    phone='$userphone', user_name='$username', Birth='$birth', sex='$sex', PW ='$userpw'
    where nickname = '$nickname'";
    $result = mysqli_query($conn, $sql2);
    if($result){
    echo "<script>alert ('회원정보 수정 완료'); location.href='./mypage.php';</script>";
  }
?>
<?php include("../layout/footer.php") ?>
