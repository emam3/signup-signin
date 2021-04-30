<?php
include 'daba.inc.php' ;
if($conn) {
  echo "tmm";
}
$uid = $_POST['userid'];
$pw = $_POST['password'];
if(empty($uid) || empty($pw)) {
  header ("Location:../index.php?fillallfields".$uid."&email=".$email."&pw=".$pw);
  exit();
} else {
  $sql = "SELECT * FROM users WHERE user_name=? AND password=?;";
  $stmt = mysqli_stmt_init($conn);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    header("Location:../index.php?sqlerror");
    exit();
  } else {
    mysqli_stmt_bind_param($stmt,"ss",$uid,$pw);
    mysqli_execute($stmt);
    mysqli_stmt_store_result($stmt);
  $result = mysqli_stmt_num_rows($stmt);
  if($result == 1) {
    header("Location:../index.php?welcome!");
    /*header("Location:../index.php?takeanotheruid&email=".$email);
    exit();*/
  } else {
    header("Location:../index.php?wrongpw");

  }
}
}
?>
