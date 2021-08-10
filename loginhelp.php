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


$email     = $_POST['email'];
$pass      = $_POST['password'];

$data = $email;
$data2 = $pass;

if($email == $data && $pass == $data2){
    header('location:loginsuccessful.php');
}
else{
    echo"Error while login";

}
mysqli_query ($connection, $data, $data2);

?>