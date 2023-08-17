<?php
 include 'dbconnect.php';
    
    
    
    $result = mysqli_query($conn, "select * from userinfo");
    
   while($row=mysqli_fetch_array($result))
   {
       echo $row['name'] . " " . $row['email']. "<br>";
   }
    
   // $query = "INSERT INTO user info (name, email, password) VALUES ('$name', '$email', '$password')";
    
    //mysqli_query($conn, $query);
    //header('location:final.php');
    
?>
