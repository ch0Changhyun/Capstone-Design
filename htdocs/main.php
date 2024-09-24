<?php include("layout/header.php") ?>

<body>
    <h1>게시판 목록</h1><a href="board_created.php"><button>글 생성</button></a>
    <table class ="list">
        <thead>
            <tr>
                <th width = "100">| 작성자 |</th>
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
            $sql = "SELECT * FROM board_summary  ORDER BY create_date DESC";
            $result = mysqli_query($conn, $sql);
            while ($boardSummary = mysqli_fetch_array($result)) {

        ?>
            <tbody>
                <tr>
                    <td width="100"><?php echo $boardSummary['nickname']; ?></td>
                    <td width="300"><a href="view.php?title=<?php echo $boardSummary['title']?> & nickname=<?php echo $boardSummary['nickname'];?>">
                    <?php echo $boardSummary['title']?></a></td>;
                    <td width="150"><img src =""><?php echo $boardSummary['main_image'];?></td>
                    <td width="150"><?php echo $boardSummary['big_area'].'/'.$boardSummary['small_area']?></td>
                    <td width="200"><?php echo $boardSummary['create_date']; ?></td>
                    <td width="100"><?php echo $boardSummary['views']; ?></td>
                </tr>
            </tbody>
        <?php }?>
    </table>

</body>


<?php include("layout/footer.php") ?>
