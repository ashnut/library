<?php

    session_start();

    $_SESSION['success']="false";

    require_once("connect.php");

    $name = $_POST['name'];
	$address = $_POST['address'];
    
   
     $mobile = $_POST['mobile'];
  
    $pass = md5($_POST['txtpassword']);
    
   

   if( mysqli_query($con," insert into user(name,address,phone,password) values ('$name','$address','$mobile','$pass') ;"))
   {
	   echo "databse created";
        $_SESSION['success']="true";
        
        mysqli_query($con," insert into userdetails(name) value('$name');") or die (" User registration failed !") ;
        
        $sql = " create table `$name`( 
        name varchar(20),
        lname varchar(20),
        mobile BIGINT(10)unique,
        landline BIGINT(10),
        email varchar(20)primary key,
        public varchar(20))";
        mysqli_query($con,$sql) or die("Somethings Wrong ".mysql_error($con));
        header("Location: ..\home.php");
   }
   else
        echo "<h1> Insert Failed </h1>";

   mysqli_close($con) or die(" Connection failed to close ! ") ;


?>