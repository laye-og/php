<?php 
include_once('connect_db.php');
if(isset($_POST['submit'])){
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$sid=$_POST['staff_id'];
$postal=$_POST['postal_address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$user=$_POST['username'];
$pas=$_POST['password'];
$sql1=$con->query("SELECT * FROM pharmacist WHERE username='$user'")or die(mysql_error());
 while ($result=$sql1->fetch()) {
if($result>0){
$message="<font color=blue>sorry the username entered already exists</font>";
 }else{
$sql=$con->query("INSERT INTO pharmacist(first_name,last_name,staff_id,postal_address,phone,email,username,password,date)
VALUES('$fname','$lname','$sid','$postal','$phone','$email','$user','$pas',NOW())");

if($sql>0) {header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/admin_pharmacist.php");
}else{
$message1="<font color=red>Registration Failed, Try again</font>";
}
	}}}
	 ?>