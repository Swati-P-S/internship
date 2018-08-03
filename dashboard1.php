<?php
include('config.php');

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

​
<div class="header">
<center><h1>DASHBOARD</h1></center>
<div class="container">

  
  
  <table class="table">

    <thead>

      <tr>

        <th>Name</th>

        <th>Contact No</th>

        <th>Email</th>

        <th>Gender</th>


      </tr>

    </thead>

    <tbody>


<?php
$query=mysqli_query($conn,"SELECT * FROM consumer");

while($fetch = mysqli_fetch_array($query))
{

    ?>
    <tr>
   

    <td> <?php echo $fetch['firstname'];  ?></td>
     <td> <?php echo $fetch['contactno'];  ?></td>

    <td> <?php echo $fetch['email'];  ?></td>
    
    <td> <?php echo $fetch['gender']; 

     ?></td>
    <td> 

    <a href="edit1.php?uid=<?php echo $fetch['uid'];?>"/>
Edit</a>
    </td>
    <td>
    <a href="delete1.php;?>"/>
Delete</a></td><td>
 <a href="active1.php?uid=<?php echo $fetch['uid'];?>"/>
Active</a>
    </td>
 
</tr>
   <?php } ?>


    </tbody>

  </table>

</div>

​</body>

</html>

​

