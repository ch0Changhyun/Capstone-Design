<?php
// <?php
// $mysqli = mysqli_connect("example.com", "user", "password", "database");
// $result = mysqli_query($mysqli, "SELECT 'Please do not use the deprecated mysql extension for new development. ' AS _msg FROM DUAL");
// $row = mysqli_fetch_assoc($result);
// echo $row['_msg'];

$connn = mysqli_connect("localhost", "root", "111111", "opentutorials");
mysqli_query($connn,
  "INSERT INTO topic
    (title, description, created)
    VALUE(
      'mysql',
      'mysql is ...',
      NOW()
    )
  ");
 ?>
