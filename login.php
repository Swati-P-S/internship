<!doctype html>  
<html>  
<head>  
<title>Login</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 100px; 
    margin-left: 80px;  
    background-image: url("./b5.jpg");
    height:50%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;

    color: palevioletred;  
    font-family: "serif";  
    font-size: 100%  
      
}  
        
h1 
{  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
        h3 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}

 </style>  
</head>  
<body>
  

     <h1>LOGIN PAGE</h1> 


<form action="" method="POST">  <h3>
<label class="control-label" for=""><h3>Username</h3></label>
                  <input type="text" class="form-control" placeholder="Username" name="name">
 <br><br>
<label class="control-label" for=""><h3>email</h3></label>
                  <input type="text" class="form-control" placeholder="email" name="email">  
                  <br><br>
<label class="control-label" for=""><h3>Password</h3></label>
                  <input type="text" class="form-control" placeholder="Password" name="password">   
<input type="submit" value="Login" name="submit" /> 

</form>  </body>  
</html>
<?php  
if(isset($_POST["submit"])){ 
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['name'];  
    $email=$_POST['email'];  
   $pass=$_POST['pass'];  
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('Registration') or die("cannot select DB");  
  
    $query=mysql_query("insert into admin_user(name,email,password) values('$name','$email','$password')"); 
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    { 
        $dbusername=$row['name'];  
    $dbusername=$row['email'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
  
    header("Location: member.php");  
    }  
    } 
    else 
    {  
    echo "Invalid username or password!";  
    }  
  
} else {  

 echo  " <br> <br>All fields are required!";
}  
}  
?>  
  