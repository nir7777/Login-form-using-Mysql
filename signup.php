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
        <h1>Sign Up Now</h1>
        <form action="signuphelp.php" method="POST">
            <input type="text"     class="input-box"  name="fname"            placeholder="First Name"       required="required">
            <input type="text"     class="input-box"  name="lname"            placeholder="Last Name"        required="required">
            <input type="email"    class="input-box"  name="email"            placeholder="Your Email"       required="required">
            <input type="password" class="input-box"  name="password"         placeholder="password"         required="required">
            <input type="password" class="input-box"  name="confirm_password" placeholder="Confirm Password" required="required">
            <p><span><input type="checkbox"></span> I agree to terms of services</p>
            <button type="submit" class="signup-btn">Sign Up</button>
            <hr>
            <p class="or">OR</p>
            <button type="button" class="twitter-btn">Login with Twitter</button>
            <p>Do you have an account ? <a href="signin.php">Sign In</a></p>
        </form>
    </div>

</body>
</html>