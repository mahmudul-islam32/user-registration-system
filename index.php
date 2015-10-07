<?php 

$connection = mysql_connect("localhost","root","") or die("couldn't connect server");
mysql_select_db("mahmud",$connection)or die("couldn't connect database");

error_reporting(0);
if($_POST['login.php']){

  if($_POST['username'] && $_POST['password']){
      $username=mysql_real_escape_string($_POST['username']);
      $password=mysql_real_escape_string(hash(" ",$_POST['password']));
       $user=mysql_fetch_array(mysql_query(" SELECT * FROM 'user' WHERE 'Username'='$username'"));
    if($user == '0'){
    
      die("that username doesnt exist!!try making <i>$username</i>today!!<a href='login.php'>&1arr;back</a>");
    
    }
    if($user['password'] != $password){
    die("incorrect password!<a href='login.php'>Back</a>");
    
    
    }
    $salt=hash("",rand() . rand(). rand());
    setcookie("c_user",hash("",$username),time() + 24 * 60 *60, "/");
    setcookie("c_salt",$salt,time() + 24*60*60,"/");
    $userid = $user['Userid'];
    mysql_query("UPDATE 'user' SET 'Salt'='$salt' WHERE 'Userid'='$userid'");
    die("you are now logged in as $username!!");
  
  
  
  }




}


?>



