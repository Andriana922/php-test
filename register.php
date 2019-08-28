<!DOCTYPE html>
<html>
<meta charset="utf-8">
</head>
<body>
<?php
require('server.php');
require('includes/validationFunc.php')
if (isset($_POST['register'])){
	$username = stripslashes($_POST['username']);
	$username = mysqli_real_escape_string($db,$username); 
	$email = stripslashes($_POST['email']);
	$email = mysqli_real_escape_string($db,$email);
	$password = stripslashes($_POST['password']);
	$password = mysqli_real_escape_string($db,$password);
	
        $query =  "INSERT INTO `users` (username, password, email)
VALUES ('$username', '".md5($password)."', '$email')";
        $result = mysqli_query($db,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="register.php" method="post">
<input type="text" name="username" placeholder="Username" method="post" />
<input type="email" name="email" placeholder="Email" method="post"/>
<input type="password" name="password" placeholder="Password"  method="post"/>
<input type="password" name="password" placeholder="Repeat Password"  method="post"/>

<input type="submit" name="submit" value="Register" method="post"/>
</form>
</div>

</body>
</html>
