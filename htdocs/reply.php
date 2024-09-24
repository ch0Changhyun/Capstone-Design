<?php if(isset($_SESSION['nickname'])){?>
<form action ="reply1apply.php" method="post" target="reply1">
    <legend>댓글 작성란</legend>
    <!--<input type ="hidden" value="<php echo $row>-->
        <textarea type="text">
        <input type="hidden" value="<?php echo $_SESSION['nickname'];?>">
        <input type="submit" value="댓글 작성">
</form>
<?php }?>

<iframe name ="reply1"></iframe>
<?php
$conn = mysqli_connect("localhost", "root", "database", "sim");
$sql = "SELECT * FROM reply WHERE title = $title and nickname = $nickname ORDER BY reply.replynum DESC LIMIT 5";
$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($result)){
    echo $row['nickname']." ".now()."<br>".str_replace("<",);
}