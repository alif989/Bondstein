<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:home.php?action=login");  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title> PHP Login Registration Form with md5() Password Encryption</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">PHP Login Registration Form with md5() Password Encryption</h3>  
                <br />  
                <?php  
             
                echo '<h1>Welcome - '.$_SESSION["username"].'</h1>';  
                echo '<label><a href="logout.php">Logout</a></label>'; 


                $sql = new mysqli ("localhost", "root", "", "test"); //EDIT with your parameters for DB
                $sql -> set_charset ( 'utf8' );

                if ($sql->connect_errno) {
                    printf("Connect failed: %s\n", $sql->connect_error);
                    exit();
                }


               $user = $_SESSION['username']; 
               
               $q = "SELECT UserCategory FROM users WHERE username = '$user'";
               if ($result = $sql->query($q)) {
                    while ($row = $result->fetch_assoc()) {
                         $userCategorry  = $row['UserCategory']; 
                    }
                    if( $userCategorry == 'Admin' || $userCategorry == 'admin' ) {
                         echo '<br/>';
                         echo '<a href="register.php">Register</a>';  
                    }
               }
             
  
               
                ?>  
           </div>  
      </body>  
 </html>