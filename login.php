<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <title>login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="style.css" rel="stylesheet">

    
  </head>
     <body>
         <div class="header"></div>
         <div class="menu">
             <ul>
                 <li><a href="index.html">Home</a></li>
                 <li><a href="register.html">Register</a></li>
                 <li><a href="login.html">login</a></li>
                 <li><a href="logout.html">logout</a></li>
             
             
             </ul>
         
         
         </div>
         <div class="content"></div>
         <div class="footer"></div>
         
        
         
         
         
         
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>




<?php 

require ('config.php');



if (isset($_POST['password']) && ($_POST['username']) ) {
    $username=mysql_escape_string($_POST['username']); 
    $password=mysql_escape_string($_POST['password']);
    
    $password=md5($password);
    
    
    
    $check=mysql_query(" SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'");
    
   if(mysql_num_rows($check)>0){
   
   echo'hey '.$username.' you now logged in';
       exit();
   
   }else{
   
   echo'wrong information';
   
   }
    
}

?>


