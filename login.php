<?php
if(isset($_POST['insert']))
{
    $utype=$_POST['category'];
    $uname=$_POST['nm'];
    $upass=$_POST['pswd'];
    echo $utype."</br>";
    echo $uname,$upass."</br>";
    
    $con=mysql_connect('localhost','root','','medtour');
    if($con)
    {
        echo "connection successful";
        $sql = "SELECT `UType`,`UName`,`UPass` FROM `registration` WHERE `UName`='$uname'";
  
   $result = mysql_query($sql,$con);
//   echo "Query Successful";
  

   while($row = mysql_fetch_assoc($result))
   {    
        $utyp=$row['UType'];
       $name=$row['UName'];
       $pass=$row['UPass'];
   }  
       echo $typ."</br>";
   echo $name,$pass."</br>";
   echo "I am checking data";   
   
   

          if($utype==$typ)
          {
            if($uname==$name)
            {
                if($pass==$upass)
                {
                  $sql3="INSERT INTO `login` VALUES ('$typ','$name','$pass')";
                  if(mysql_query($sql3,$con))
                  {
                   

echo "<script>alert('login successfuly');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='home.html';</script>");
}
else 
{
    echo "<script>alert('Something is wrong pl login again');</script>";
  echo ("<script LANGUAGE='JavaScript'>window. location. href='registration.html';</script>");
}


                  }
                  else
                  {
                //    header("location:adminloginform.htm"); 
                  }
                }
            }
             
           
         
                
            mysql_close($con);
            
        
    }
}
?>