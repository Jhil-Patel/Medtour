<?php

if(isset($_POST['insert']))
{
    $conn=mysqli_connect('localhost','root','','medtour');
    $username=$_POST['uname'];
    $password=$_POST['pass'];

}
?>