<?
session_start();
include('config.php');
$firstname=$_POST["firstname"];
$lastname=$_POST["lastname"];
$contactno=$_POST["contactno"];
$gender=$_POST["gender"];
$type=$_POST["type"];
$email=$_POST["email"];
$homeaddress=$_POST["homeaddress"];
$pincode=$_POST["pincode"];
$state=$_POST["state"];
$cname=$_POST["cname"];
$ccontact=$_POST["ccontact"];
$website=$_POST["website"];
$caddress=$_POST["caddress"];
$cpincode=$_POST["cpincode"];
$cstate=$_POST["cstate"];
$latitude=$_POST["latitude"];
$longitude=$_POST["longitude"];

$query=mysqli_query($conn, "insert into business (firstname,lastname,contactno,gender,type,email,homeaddress,pincode,state,cname,ccontact,website,caddress,cpincode,cstate,latitude,longitude) values 
	('$firstname','$lastname','$contactno','$gender','$type','$email','$homeaddress','$pincode','$state','$cname','$ccontact','$website','$caddress','$cpincode','$cstate','$latitude','$longitude')");

$_SESSION['message']="Thank you for registering with us,our Admin will contact you shortly";
header("Location: index2.php");   
?>