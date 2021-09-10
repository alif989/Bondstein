

<!DOCTYPE html>  
<html>  
     <head>  
          <title>PHP Login Registration Form with md5() Password Encryption</title>  
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
     </head>  
     <body>  
          <br /><br />  
          <div class="container" style="width:500px;">  
               <h3 align="center">PHP Login Registration Form with md5() Password Encryption</h3>  
               <br />  
               <h3 align="center">Register</h3>  
                <br />  
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Username Category</label>  
                     <input type="text" name="UserCategory" class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="register" value="Register" class="btn btn-info" />  
                       
                     <br />  
                     <p align="center"><a href="login.php?action=login">Login</a></p>  
                </form> 
          </div>  
     </body>  
</html>  

<?php 
$connect = mysqli_connect("localhost", "root", "", "test");  
session_start();  
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);   
           $UserCategory = mysqli_real_escape_string($connect, $_POST["UserCategory"]);  
           $password = md5($password);  
           $query = "INSERT INTO users (username, password, UserCategory ) VALUES('$username', '$password',
           '$UserCategory')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }  
      }  
 } 