<?php
include 'include/daba.inc.php';
?>
<html>
<head>
<title>N site</title>
<link rel="stylesheet" type="text/css" href="include/style.css">

</head>

<body>

  <div class="navbar">
  <img src="tools/logoo.png">
  <form action="include/login.inc.php" method="post">
  <input class="uidlog" type="text" name="userid" placeholder="   type your username">
  <input class="passlog" type="password" name="password" placeholder="   type your password">
  <button class="btnlog" type="submit" name="submit">LOGIN</button>
  </form>
</div>

  <br><br><br><br><br>

  <div class="signupdiv">
  <form class="signupform" action="include/signup.inc.php" method="post">
<input type="text" name="userid" placeholder=" type your username">
<br>
<input type="text" name="email" placeholder=" type your email">
<br>
<input type="password" name="password" placeholder=" type your password">
<br>
<button class="btnup" type="submit" name="submit">SIGNUP</button>
  </form>
</div>



</body>
</html>