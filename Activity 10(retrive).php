<?php 
 $con=mysqli_connect("localhost","root","");
 mysqli_query($con,"USE IP");
 $r=mysqli_query($con,"SELECT username,passwor FROM USERS");
 while($row=mysqli_fetch_assoc($r))
    echo $row['username']."<br>";
    echo $row['passwor'];
?>