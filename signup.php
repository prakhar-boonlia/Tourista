<?php
$conn = mysqli_connect("localhost","root","","Project");
if(!$conn)
{
    die("Connection Failed =  ".mysqli_connect_error());
}
    $name = $_POST['uname'];
    $email = $_POST['uemail'];
    $pass = $_POST['upass'];
    $cmd = "INSERT INTO customer_details(name,email,password) values('$name','$email','$pass')";
    echo "<br>".$cmd;
    mysqli_query($conn,$cmd);
    echo "<script>alert('Sign up successful');</script>";
    header('location:index.html');
?>