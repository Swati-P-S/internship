 <?php
include('config.php');

$uid=$_GET["uid"];
$conn = new mysqli($host, $user, $password,$database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "DELETE FROM business WHERE uid= '$uid'";

if ($conn->query($sql) === TRUE) {
   // echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("Location: dashboard.php");
?> 