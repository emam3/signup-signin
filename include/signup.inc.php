<?php
include 'daba.inc.php' ;
if (isset($_POST['submit'])) {

  $uid = $_POST['userid'];
  $email = $_POST['email'];
  $pw = $_POST['password'];
  if(empty($uid) || empty($email) || empty($pw)) {
    header ("Location:../index.php?fillallfields".$uid."&email=".$email."&pw=".$pw);
    exit();
  } else {
    $sql = "SELECT user_name FROM users WHERE user_name=?" ;
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location:../index.php?sqlerror");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt,"s",$uid);
      mysqli_execute($stmt);
      mysqli_stmt_store_result($stmt);
    $result = mysqli_stmt_num_rows($stmt);
    if($result > 0) {
      header("Location:../index.php?takeanotheruid&email=".$email);
      exit();
    } else {
      $sql = "insert into users(user_name,Email,password) values(?,?,?)";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location:../index.php?sqlerror");
        exit();
      } else {
        mysqli_stmt_bind_param($stmt,"sss",$uid,$email,$pw);
        mysqli_execute($stmt);
        header("Location:../index.php?dn");
    }
    }
  }

}
} else {
  header("Location:../index.php");
}
 ?>
