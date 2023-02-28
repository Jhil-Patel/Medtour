<?php

if(isset($_POST['insert']))
{
    $conn=mysqli_connect('localhost','root','','medtour');
    // mysql_select_db("medtour");
    if($conn)
    {
        echo "Connected";
    }
    $utype=$_POST['category'];
    $uname=$_POST['nm'];
    $upass=$_POST['pswd'];
    $ufname=$_POST['fname'];
    $uaddr=$_POST['addr'];
    $uemail=$_POST['email'];
    $uphone=$_POST['phone'];
    $usecque=$_POST['secque'];
    $usecans=$_POST['secans'];
    
    // echo $utype,$uname,$usecans;
    
    $sql="INSERT INTO `registration`(`UType`, `UName`, `UPass`, `UFname`, `UAddr`, `UEmail`, `UPhone`, `USecQue`, `USecAns`) VALUES ('$utype','$uname','$upass','$ufname','$uaddr','$uemail','$uphone','$usecque','$usecans')";
    
    if(mysqli_query($conn,$sql))
    {
        echo "Insert Sucessful..!!!";
        // header('Location:home.html');        
    }
    else
    {
        echo "Insert Fail....";
    }
}
mysqli_close($conn);

?>