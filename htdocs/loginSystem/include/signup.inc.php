<?php

if (isset($_POST['submit'])) {

  include_once 'dbh.inc.php';

  $first = mysqli_real_escape_string($conn, $_Post['first']);
  $last = mysqli_real_escape_string($conn, $_Post['last']);
  $email = mysqli_real_escape_string($conn, $_Post['email']);
  $uid = mysqli_real_escape_string($conn, $_Post['uid']);
  $pwd = mysqli_real_escape_string($conn, $_Post['pwd']);

  //Error handlers
  //Check for empty fields
  if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
    // code...
    header('Location: ../signup.php?signup=empty');
    exit();
  }else {
    // code...
    //check if input characters are valid
    if (preg_match("/^[a-zA-Z]")) {
      // code...
    }
  }

} else {
  header('Location: ../signup.php');
  exit();
}
