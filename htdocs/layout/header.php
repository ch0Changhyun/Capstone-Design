<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<!--navigation-->
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Trip</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../main.php">홈</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../myboard/myboard.php">나의 게시판 관리</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../schedule/schedule.php">전국 계획</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../myschedule/myschedule.php">나의 일정</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../mypage/mypage.php">마이페이지</a>
                </li>
            </ul>
            <nav class="navbar navbar-light bg-light">
                <form class="container-fluid justify-content-start">
                  <?php header("Content-Type: text/html; charset= UTF-8");
                     session_start(); ?>
                     <?php if((isset($_SESSION['nickname'])) )  {
                         $nickname = $_SESSION['nickname'];
                         ?>
                     <!--<li class="nav-item">-->
                     <li style="list-style: none;">
                       <?php echo " $nickname 님 &nbsp;"; ?>
                     </li>
                     <?php } ?>
                  <a class="btn btn-sm btn-outline-secondary" type="button" href ="../logout.php">로그아웃</a>
                </form>
            </nav>
        </div>
    </div>
</nav>
