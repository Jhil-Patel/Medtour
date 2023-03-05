<?php

if(isset($_POST['insert']))
{
    $con=mysqli_connect('localhost','root','','medtour');
    if($con)
    {
        echo "Connected";
    }

    $himg=$_FILES['him']['name'];

    $sql="INSERT INTO `img_pr`(`HImg`) VALUES ('$himg')";

    if(mysqli_query($con,$sql))
    {
        move_uploaded_file($_FILES['him']['tmp_name'], "$himg");
        echo 'Insert Successful';     
    }
    else
    {
        echo 'Insert Unsuccessful';
    }
}
?>
<?php
    $sql="SELECT * FROM `img_pr`";
    $result = mysqli_query($con, $sql)
    $output = "";
    while($row=msqli_fetch_array($sql))
    {
        $output .= "<img src='".$row['him']."' class='my-3' style='width:400px;height:400px;'>";
    }
    ?>