
<?php
echo "string";
// including the database connection file
include_once("config.php");
echo "welcom boss do it<br/>";


if(isset($_POST['update']))
{	


	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	
	$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
	echo $firstname;
	$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
	$contactno = mysqli_real_escape_string($conn, $_POST['contactno']);	
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$type = mysqli_real_escape_string($conn, $_POST['type ']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);	
	$homeaddress= mysqli_real_escape_string($conn, $_POST['homeaddress']);
    $pincode= mysqli_real_escape_string($conn, $_POST['pincode']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $cname= mysqli_real_escape_string($conn, $_POST['cname']);
    $ccontact = mysqli_real_escape_string($conn, $_POST['ccontact']);
	$website= mysqli_real_escape_string($conn, $_POST['website']);
    $caddress = mysqli_real_escape_string($conn, $_POST['caddress']);
    $cpincode= mysqli_real_escape_string($conn, $_POST['cpincode']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $latitude= mysqli_real_escape_string($conn, $_POST['latitude']);
    $longitude= mysqli_real_escape_string($conn, $_POST['longitude']);
	
$result = mysqli_query($conn, "UPDATE business SET firstname='$firstname',lastname='$lastname',contactno='$contactno',gender='$gender',type='$type',email='$email',homeaddress='$homeaddress', pincode='$pincode',state='$state',cname='$cname',ccontact='$ccontact',website='$website',caddress='$caddress',cpincode='$cpincode',cstate='$cstate',latitude='$latitude',longitude='$longitude' WHERE uid=$uid");
		
		//redirectig to the display plastname. In our case, it is index.php
		header("Location: dashboard.php");
}
?>

<?php
//getting uid from url
$uid = $_GET['uid'];



//selecting data associated with this particular uid
$result = mysqli_query($conn, "SELECT * FROM business WHERE uid=$uid");



while($res = mysqli_fetch_array($result))
{
	$firstname = $res['firstname'];
	$lastname = $res['lastname'];
	$contactno = $res['contactno'];
    $gender = $res['gender'];
    $type=$res['type'];
    $email=$res['email'];
    $homeaddress=$res['homeaddress'];
    $pincode=$res['pincode'];
    $state=$res['state'];
    $cname=$res['cname'];
    $ccontact=$res['ccontact'];
    $website=$res['website'];
    $caddress=$res['caddress'];
    $cpincode=$res['cpincode'];
    $cstate=$res['cstate'];
    $latitude=$res['latitude'];
    $longitude=$res['longitude'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>	
	<a href="index2.php">Home</a>

	<div class="container">
  
  <form class="form-horizontal" method="post" action="./update.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="firstname">Firstname:</label>
      <div class="col-sm-10">
        <input type="text" name="firstname" value="<?php echo $firstname;?>">
      </div>
    </div>

   
    <div class="form-group">
      <label class="control-label col-sm-2" for="lastname">Lastname:</label>
      <div class="col-sm-10">
       <input type="text" name="lastname" value="<?php echo $lastname;?>">
      </div>
    </div>
	

 <div class="form-group">
      <label class="control-label col-sm-2" for="contactno">Contact No:</label>
      <div class="col-sm-10">
       <input type="text" name="contactno" value="<?php echo $contactno;?>">
      </div>
    </div>
	

	 <div class="form-group">
      <label class="control-label col-sm-2" for="gender">Gender:</label>
      <div class="col-sm-10">
       <input type="text" name="gender" value="<?php echo $gender;?>">
      </div>
    </div>



     <div class="form-group">
      <label class="control-label col-sm-2" for="type">Type:</label>
      <div class="col-sm-10">
       <input type="text" name="type" value="<?php echo $type;?>">
      </div>
    </div>

	



    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
       <input type="text" name="email" value="<?php echo $email;?>">
      </div>
    </div>

	

    <div class="form-group">
      <label class="control-label col-sm-2" for="homeaddress">Homeaddress:</label>
      <div class="col-sm-10">
       <input type="text" name="homeaddress" value="<?php echo $homeaddress;?>">
      </div>
    </div>

	<div class="form-group">
      <label class="control-label col-sm-2" for="pincode">Pincode:</label>
      <div class="col-sm-10">
      <input type="text" name="pincode" value="<?php echo $pincode;?>">
      </div>
    </div>

	<div class="form-group">
      <label class="control-label col-sm-2" for="state">State:</label>
      <div class="col-sm-10">
      <input type="text" name="state" value="<?php echo $state;?>">      </div>
    </div>

	<div class="form-group">
      <label class="control-label col-sm-2" for="cname">Cname:</label>
      <div class="col-sm-10">
      <input type="text" name="cname" value="<?php echo $cname;?>">      </div>
    </div>

	
<div class="form-group">
      <label class="control-label col-sm-2" for="ccontact">Ccontact:</label>
      <div class="col-sm-10">
      <input type="text" name="ccontact" value="<?php echo $ccontact;?>">     </div>
    </div>

	
<div class="form-group">
      <label class="control-label col-sm-2" for="website">Website:</label>
      <div class="col-sm-10">
      <input type="text" name="website" value="<?php echo $website;?>">     </div>
    </div>

	<div class="form-group">
      <label class="control-label col-sm-2" for="caddress">Caddress:</label>
      <div class="col-sm-10">
      <input type="text" name="caddress" value="<?php echo $caddress;?>">   </div>
    </div>


<div class="form-group">
      <label class="control-label col-sm-2" for="cpincode">Cpincode:</label>
      <div class="col-sm-10">
     <input type="text" name="cpincode" value="<?php echo $cpincode;?>">     </div>
    </div>



<div class="form-group">
      <label class="control-label col-sm-2" for="cstate">Cstate:</label>
      <div class="col-sm-10">
     <input type="text" name="cstate" value="<?php echo $cstate;?>">  </div>
    </div>



<div class="form-group">
      <label class="control-label col-sm-2" for="latitude">Latitude:</label>
      <div class="col-sm-10">
     <input type="text" name="latitude" value="<?php echo $latitude;?>"> </div>
    </div>



<div class="form-group">
      <label class="control-label col-sm-2" for="longitude">Longitude:</label>
      <div class="col-sm-10">
     <input type="text" name="longitude" value="<?php echo $longitude;?>"></div>
    </div>



<div class="form-group">
      <div><input type="hidden" name="uid" value=<?php echo $_GET['uid'];?>></div>
				<div><input type="submit" name="update" value="Update"></div>
    </div>
  

    </div>
    </div>
    </form>
    </div>
    </body>

