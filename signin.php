<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="sign-up-form">
<img src="user-Icon.png">
<h1>Please Login</h1>
<form action="loginhelp.php" method="POST">
<input type="email"    class="input-box"  name="email"            placeholder="Your Email"       required="required">
<input type="password" class="input-box"  name="password"         placeholder="password"         required="required">
<button type="submit" class="input-box dec">Login</button>
<p>New User? <a href="signup.php">Sign Up</a></p>
</form>            
    
</body>
</html>