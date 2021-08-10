<?php

$connection = mysqli_connect('localhost','root');
if($connection)
{
    echo "Connection is established";
}
else
{
    echo"Connection Failed";
}

mysqli_select_db($connection,'confirmation');

$firstname = $_POST['fname'];
$lastname  = $_POST['lname'];
$email     = $_POST['email'];
$pass      = $_POST['password'];

$data = "insert into user_info (FirstName, LastName,  Email, Password) values('$firstname','$lastname','$email','$pass')";

mysqli_query ($connection,$data);
header('location:signupsuccessful.php');

?>