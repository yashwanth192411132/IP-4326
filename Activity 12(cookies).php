<form method="post">
<label>UserName:<input type = "text" name="un"></label></br>
<label>Password:<input type = "password" name="pw"></label></br>
<button type="submit" name="submi">Submit</button>
</form>
<?php 
if(isset($_POST["submi"])){
setcookie("username",$_POST['un'],time()+600);
setcookie("password",$_POST['pw'],time()+600);
}
echo "welcome ".$_COOKIE['username'].$_COOKIE['password'];
?>