<?php
session_start();

?>
<!DOCTYPE html>  
<html>  
<head>  

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>  
body, html 
{
    height: 100%;
    margin: 0;
}
.btn
{
  background-color: #289b95;
  color: white;
  width:20;
  padding: 8px;
  pointer:cursor;

}
.header{margin:-9px -9px 0px;background-image:linear-gradient(145deg,#ffffff,#ffffff);color:red;text-align:center;padding:8px;}  
  

.footer{margin:-8px;clear:both;background-image:linear-gradient(145deg,#000000,#000000);color:white;text-align:center;padding:10px;}  

.bg {
    
    background-image: url("./b1.png");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
.msg {
    margin: 00px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}


 </style>  
</head>  
<body> 
<body>


</div>
<div>
<div class="header">  
<?php if (isset($_SESSION['message'])): ?>
  <div class="msg">
    <?php 
      echo $_SESSION['message']; 
      unset($_SESSION['message']);
    ?>
  </div>
<?php endif ?>
<div></div>
<img src="./logo.png" align="left" widtg="50" height="40";>

<div class="input-append" align="right">

<a type="button" href="./login.php" class="btn btn-black btn-md " role="button">Login</a>
  
  <a type="button" href="./business.php" class="btn btn-black btn-md " role="button">Business</a>
           

   <a type="button" href="consumer.php" class="btn btn-info btn-md " role="button">Consumer</a>

 <a type="button" href="dashboard.php" class="btn btn-info btn-md " role="button">Dashboard</a></div>

</div>

</div>
<div class="bg"></div>
   
 <div class="footer">  
  <p>Powered by Caritor Solutions</p>
</div>   
</body>
</html>


