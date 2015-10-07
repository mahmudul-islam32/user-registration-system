<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
    <title>Bootstrap 101 Template</title>

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
          
         <div class="content">
      
      
        
      </div>
         <div class="footer"></div>
         
    </body>



<?php 

require('config.php');



if(isset($_POST['password']) && ($_POST['username']) && ($_POST['Email']) && ($_POST['firstname']) &&($_POST['lastname']) && ($_POST['age']) && ($_POST['contact']) &&($_POST['sex'])&& ($_POST['contactaddress']) ) {
    
    
   
    
    $password=$_POST['password'];
    $Email=$_POST['Email'];
     $username=$_POST['username'];
    $Fname=mysql_escape_string($_POST['firstname']);
    $Lname=mysql_escape_string($_POST['lastname']);
     $age=mysql_escape_string($_POST['age']);
     $contact=mysql_escape_string($_POST['contact']);
     $gender=mysql_escape_string($_POST['sex']);
     $address=mysql_escape_string($_POST['contactaddress']);
    $password=mysql_escape_string($password);
    $Email=mysql_escape_string($Email);
    $username=mysql_escape_string( $username);
    $password=md5($password);
    
    
        
    $checkuname=mysql_query(" SELECT * FROM `user` WHERE `username`='$username' OR `Email`='$Email'");
    
    if(mysql_num_rows($checkuname)>0){
    
        echo'sorry this users already exists';
        exit();
    
    
    
    }
    
    //$query="INSERT INTO user (Userid,Fname,Lname,password,Email,username) VALUES (NULL,'$Fname', '$Lname','$password','$Email','$username')" ;
   mysql_query(" INSERT INTO `user`(`Userid`, `Fname`, `Lname`, `Email`, `username`, `password`,`age`,`contact`,`gender`,`address`) VALUES (NULL,'$Fname','$Lname','$Email','$username','$password','$age','$contact','$gender','$address')")or die(mysql_error());
    
    die("congrats your account has created");
    
}
else{
      
    echo 'make registration';
}


    









?>






