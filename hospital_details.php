<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Details </title>

</head>
<body>
    <form action="hpedit.php" method="POST">
    <table>
        <caption>Hospital Details</caption>
        
        <tr>
            <td>Hospital Code :</td>
            <td><input type="text" name="hcode"></td>
        </tr>
        <tr>
            <td>Hospital Name :</td>
            <td><input type="text" name="hname" placeholder="Hospital Name" required></td>
        </tr>
        <tr>
            <td>Hospital Address :</td>
            <td><input type="type" name="haddr" placeholder="Hospital Address" required></td>
        </tr>
        <tr>
            <td>Country:</td>
            <td><input type="text" name="hcountry" placeholder="Country" required></td>
        </tr>
        <tr>
            <td>Contact no. :</td>
            <td><input type="number" name="hcont" placeholder="Contact No." required></td>
        </tr>
        <tr>
            <td>Facilities :</td>
            <td><input type="checkbox" name="fac[]" value="Private Rooms">Private Rooms</td>
            <td><input type="checkbox" name="fac[]" value="Cafeteria/Restaurant">Cafeteria/Restaurant</td>
            <td><input type="checkbox" name="fac[]" value="Pharmacy">Pharmacy</td>
            <td><input type="checkbox" name="fac[]" value="Ambulance Facility">Ambulance Facility</td>
            <td><input type="checkbox" name="fac[]" value="Internet Connection">Internet Connection</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="checkbox" name="fac[]" value="Money Exchange">Money Exchange</td>
            <td><input type="checkbox" name="fac[]" value="Transportation service">Transportation services</td>
            <td><input type="checkbox" name="fac[]" value="Flight arrangement">Flight arrangement</td>
            <td><input type="checkbox" name="fac[]" value="Visa arrangement">Visa arrangement</td>
        </tr>
        <tr>
            <td>Contact Person Name:</td>
            <td><input type="text" name="hcontnm" placeholder="Contact Person Name" required></td>
        </tr>
        <tr>
            <td>Contact Person:</td>
            <td><input type="number" name="hcontper" placeholder="Mobile no." required></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="insert" value="Submit"></td>
        </tr>
    </table>
    <?php

if(isset($_POST['insert']))
{
    $con=mysqli_connect('localhost','root','','medtour');
    if($con)
    {
        echo "Connected";
    }

    $hcode=$_POST['hcode'];
    $hname=$_POST['hname'];
    $haddr=$_POST['haddr'];
    $hcountry=$_POST['hcountry'];
    $hcont=$_POST['hcont'];
    $hfac=$_POST['fac'];
    $hfacs=implode(", ",$hfac);
    $hcontnm=$_POST['hcontnm'];
    $hcontper=$_POST['hcontper'];
    
    // echo $hcode,$hname,$hcont,$hfacs;
    
    $sql="INSERT INTO `hospital details`(`HCode`, `HName`, `HAddr`, `HCountry`, `HCont`, `HFac`, `HContPName`, `HContPer`) VALUES ('$hcode','$hname','$haddr','$hcountry','$hcont','$hfacs','$hcontnm','$hcontper')";
    
    if(mysqli_query($con,$sql))
    {
        echo 'Insert Successful';     
    }
    else
    {
        echo 'Insert Unsuccessful';
    }
    
}
?>
    </form>
    <?php
    
    mysqli_close($con);
?>
    <a href="hpedit.php">Edit</a>
</body>
</html>
