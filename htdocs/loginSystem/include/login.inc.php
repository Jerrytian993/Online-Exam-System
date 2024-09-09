<?php

if (isset($_POST'submit'])) {
  // code...
  include 'dbh.inc.php';
  $uid = mysqli_real_escape_string($conn, $_POST['uid']);
  $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
  //error handlers
  //check if input is Empty
  if (empty($uid || empty($pwd)) {
    // code...
  }else {
    $sql = "SELECT * FROM users WHERE user_uid = 'uid'";
    $result = mysqli_query($conn, $sql)
    $resultCheck = my
  }

}else {
  header("Location: ../index.php?login=error");
  exit();
}
