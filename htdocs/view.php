<?php include("layout/header.php") ?>
<?php
if(!isset($_SESSION['nickname'])){
    echo" <script>location.replace('login.html');</script>";
  }

$conn = mysqli_connect("localhost", "root", "database", "sim");
$nickname = $_GET['nickname'];
$title=$_GET['title'];

$sql1 = "SELECT * FROM board WHERE nickname = '$nickname' and title= '$title';";
$result1 = mysqli_query($conn, $sql1);
$data = mysqli_fetch_array($result1);

$sql2 ="UPDATE board_summary SET views = views+1 WHERE nickname = '$nickname' and title= '$title'";
$result2 = mysqli_query($conn, $sql2);

?>

<body>
        <div class ="container">
            <table class ="table table-bordered">
                <tbody>
                    <tr>
                        <th>제목 : </th>
                        <td><?php echo $data['title']?></td>
                    </tr>
                        <th>작성자 : </th>
                        <td><?php echo $data['nickname']?></td>
                    </tr>
                    <tr>
                        <th>내용 : </th>
                        <td><?php echo $data['content']?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>
<?php include("layout/footer.php") ?>
