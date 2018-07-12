<?php 
	session_start();
	require_once("connect.php");
	
	$uid = $_SESSION['uid'];
	
	# Extract Form values
	$bookname = $_POST['bookname'];
	$authid = $_POST['authid'];
	$libid = $_POST['libid'];
	$isbn = $_POST['isbn'];
	$publisher = $_POST['publisher'];
	$pubdate = $_POST['pubdate'];
	
	#echo $fname . $lname . $mobile . $landline . $email . $public;
	
	if( mysqli_query($con," insert into book(title,authid,libid,isbn,publisher,pubdate) values('$bookname','$authid',$libid,$isbn,'$publisher','$pubdate')"))
	{
		
			
			
		$_SESSION['insert_success']=1;
		header("Location: ..\create.php");
	}
	else
	{
		$_SESSION['insert_success']=0;
		header("Location: ..\create.php");
	}	
	mysqli_close($con);
?>