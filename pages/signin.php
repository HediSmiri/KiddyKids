<?php

    $req = mysql_connect('localhost','root','');
    mysql_select_db('miniprojet',$req);
    if (isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "
            SELECT email , pass
            FROM `user`
            WHERE email = '".$email."'
            AND pass = '".$pass."'
            ";


        $req = mysql_query($sql,$req) ;
        $valid = 0 ;
        while ($row = mysql_fetch_array($req)) {
            if (($row[0] == $email) and($row[1] == $pass))
                $valid = 1;
         }

         if ($valid == 1){
             $res = 'Connected';
         }else
            $res = 'not connected';
          
         mysql_free_result($req);
    }

    mysql_close();
?>


<!DOCTYPE html>
<html>
<head>
	<title>signin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/signin.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <form action="" method="POST">
  <div class="cont">
    <div class="form sign-in">
        <h1><?php if (!empty($res)) echo $res ; ?></h1>
      <h2>Sign In</h2>
      <label>
        <span>Email Address</span>
        <input type="email" name="email">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="password">
      </label>
      <input type="submit" class="submit" name="submit" value="signin">
      <p class="forgot-pass">Forgot Password ?</p>

      <div class="social-media">
        <ul>
          <li><img src="../img/sign/facebook.png"></li>
          <li><img src="../img/sign/twitter.png"></li>
          <li><img src="../img/sign/linkedin.png"></li>
          <li><img src="../img/sign/instagram.png"></li>
        </ul>
      </div>
    </div>
  </form>
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of new opportunities!</p>
        </div>
        <div class="img-text m-in">
          <h2>One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input type="text">
        </label>
        <label>
          <span>Email</span>
          <input type="email">
        </label>
        <label>
          <span>Password</span>
          <input type="password">
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password">
        </label>
        <button type="button" class="submit">  <a href="../index.html">Sign Up</a></button>
      </div>
    </div>
  </div>
<script type="text/javascript" src="../js/signin.js"></script>
</body>
</html>