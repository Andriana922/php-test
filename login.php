<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Login</title>
</head>
<body>
<?php
require('server.php');
require('includes/validationFunc.php');
session_start();
if (isset($_POST['log in'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($db,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($db,$password);
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($db,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
         }else{
	echo "<div class='form'>
<h3>Error logging you in</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<br>
<input name="submit" type="submit" value="Login" />
</form>

</div>
<?php } ?>
</body>
</html>
