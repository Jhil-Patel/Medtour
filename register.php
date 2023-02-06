<?php

if(isset($_POST['sub']))
{
$conn=mysqli_connect('localhost','root','','medtour');
if($conn)
{
    echo"connected";
}
$usr=$_POST['urs'];
$pas=$_POST['pas'];
$sql="INSERT INTO `register`(`Username`, `Password`) VALUES ('$usr','$pas')";
if(mysqli_query($conn,$sql))
{
    echo"value entered";
}
else{
    echo"error";
}
}

?>