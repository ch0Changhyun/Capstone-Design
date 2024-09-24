<?php include("../layout/header.php") ?>

<h2>게시물을 클릭하면 수정, 삭제할 수 있습니다.</h2>

<body>
    <table class ="list">
        <thead>
            <tr>
                <th width = "300">| 제목 |</th>
                <th width = "150">| 이미지 |</th>
                <th width = "150">| 지역 |</th>
                <th width = "200">| 작성일 |</th>
                <th width = "100">| 조회수 |</th>
            </tr>
        </thead>
        <?php
            $conn = mysqli_connect("localhost", "root", "database", "sim");
            mysqli_query($conn, 'SET NAMES utf8');
            $nickname = $_SESSION['nickname'];
            $sql = "SELECT * FROM board_summary where nickname = '$nickname' ORDER BY create_date DESC";
            $result = mysqli_query($conn, $sql);
            while ($boardSummary = mysqli_fetch_array($result)) {

        ?>
            <tbody>
                <tr>
                    <td width="300"><a href="./myboard_change.php?title=<?php echo $boardSummary['title']?>"><?php echo $boardSummary['title']?></a></td>;
                    <td width="150"><img src =""><?php echo $boardSummary['main_image'];?></td>
                    <td width="150"><?php echo $boardSummary['big_area'].'/'.$boardSummary['small_area']?></td>
                    <td width="200"><?php echo $boardSummary['create_date']; ?></td>
                    <td width="100"><?php echo $boardSummary['views']; ?></td>
                </tr>
            </tbody>
        <?php }?>
    </table>

</body>


<?php include("../layout/footer.php") ?>
