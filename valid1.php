<?php 
$username="root";
$password="";
$hostname="localhost";
$dbhandle=mysql_connect($hostname,$username,$password) or die("could not connect to database");
$selec=mysql_select_db("logindb",$dbhandle);

if($_POST)
{
$user=$_POST['user'];
$pass=$_POST['pass'];
$query=mysql_query("select * from login where username='$user'");
if(mysql_num_rows($query)>0)
{
echo 'Username already exist';
}

else
{
mysql_query("Insert into login(username,password) values('$user','$pass')");
header("location:index.php");

}
}
mysql_close();
?>
<html>
<head>
<style>

div {
    background-color:#909497  ;
}
</style></head>
<body background="1.jpg">            
<h1 style="font-family:Courier New;color:white;"><u><center>LOGIN FORM</center></u></h1>
<div style="border-style:solid;border-color:black;width:7cm;height:4cm;margin-left:11cm;margin-top:1cm;">
<form action="registration.php" method="post">
<table style="font-family:cursive;color:white;"> 

<tr><td>Username:</td><td><input type="text" name="user"></td></tr></br></br>
<tr><td>Password:</td>
<td><input type="password" name="pass"/></td></tr>
<center><tr><td><input type="submit" value="submit"></td></tr></table>

</form>
</div></body></html>
