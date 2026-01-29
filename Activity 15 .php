<form method ="post">
    username<input type="text" name="un"></br>
    passwor<input type="password" name="pw"></br>
            <input type="submit" name="su" value="SIGN UP">
</form>
<?php
 $c=mysqli_connect("localhost","root","");
  mysqli_query($c,"CREATE  DATABASE IF NOT EXISTS IP ");
  mysqli_query($c,"USE IP");
  mysqli_query($c,"CREATE TABLE IF NOT EXISTS USERS (username varchar(20),passwor varchar(20))");
  if(isset($_POST['su']))
    mysqli_query($c,"INSERT INTO USERS(username,passwor) VALUES ('{$_POST['un']}','{$_POST['pw']}')");
  ?>xx