<?php
    session_start();

   require_once("connect.php");
    
    $name = $_POST['username'];
    $pass = $_POST['pass'];
	
	echo $name ;
    
    # Validate login credentials
    
    $result = mysqli_query($con," select * from user where name='$name';") or die(" Error ");
    $data = mysqli_fetch_array($result);

    if( $data['name']==$name )
    {
        if($data['password']==md5($pass))
        {
            $_SESSION['uid']=$name;
            header('Location: ..\userhome.php') or die(" Error ");
        }
        
    }
	
        $_SESSION['login_error']=true;
        header("Location: ..\index.php") or die(" Error ");
    mysqli_close($con);
  

?>