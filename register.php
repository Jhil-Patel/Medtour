<?php

// if(isset($_POST['sub']))
// {
// $conn=mysql_connect('localhost','root','','medtour');
// if($conn)
// {
//     echo"connected";
// }
// $usr=$_POST['urs'];
// $pas=$_POST['pas'];
// $sql="INSERT INTO `Register_pr`(`Uname`, `Upass`) VALUES ('$usr','$pas')";
// if(mysql_query($conn,$sql))
// {
//     echo"value entered";
// }
// else{
//     echo"error";
// }
// }


if(isset($_POST['sub']))
{
    $conn=mysqli_connect('localhost','root','','Medtour');
    if(!$conn)
    {
        echo "Not connected";
    }
    $user=$_POST['urs'];
    $pass=$_POST['pas'];
    $sql="INSERT INTO `Register_pr`(`Uname`, `Upass`) VALUES ('$user','$pass')";
    if(mysqli_query($conn,$sql))
    {
        echo "Value entered";
    }
    else
    {
        echo "Failed to enter value";
    }
}

?>