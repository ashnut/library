<?php 
session_start();


require_once("php/connect.php");
?>
<html>

<head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<title> Search Book </title>
	
</head>

<body >

<nav class="navbar navbar-inverse">

	<div class="container-fluid">

		
		<div class="navbar-header">
			<a hre="#" class="navbar-brand" /> ABS LIBRARY MANAGEMENT SYSTEM </a>
		</div>

	
        <div>
            <ul class="nav navbar-nav">
                <li > <a href="home.php"> Home </a> </li>
                <li  > <a href="create.php"> Add Book </a> </li>

                <li> <a href="delete.php"> Delete Book</a> </li>
                <li> <a href="adminsearch.php"> Search Book </a> </li>
				<li> <a href="adduser.php"> Add User</a> </li>
    
                <li class="active"> <a href="adminreserve.php"> View Reserved Books</a> </li>
                <li > <a href="admindisplay.php"> Display all books </a> </li>
                
				
				

            </ul>


            
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $_SESSION['uid']; ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="php/logout.php">Log-Out</a></li>

                    </ul>
                </li>

            </ul>


        </div>

	</div>

</nav>
<?php

//echo $_SESSION['uid'];//username

//$var = $_POST['btn'];//book id

//$mydate = date('y/m/d');//current date
//$result = mysqli_query($con," select * from user where name = '$_SESSION[uid]'") or die("Error " . mysql_error());

//$data = mysqli_fetch_Array($result); 
//echo $data[0];//userid

//$book = mysqli_query($con," select * from book where bookid = '$var'") or die("Error " . mysql_error());

//$result1 = mysqli_fetch_Array($book);

//echo $result1[3];//libid

//echo $mydate;//current date
//$reserve = mysqli_query($con," insert into reserve(id,bookid,libid,date) values ('$data[0]','$var','$result1[3]','$mydate') ;");
 
 
$reserveresult = mysqli_query($con," select * from reserve ") or die("Error " . mysql_error());



	

?>

<table class="table table-bordered" style="font-family:aerial;font-size:15">
	<tr>
		<th> Reserve ID</th>
		<th> User ID</th>
		<th> Book ID</th>
		<th> Library ID</th>	
		
		<th> Reserve Date </th>
		
	<tr>
	
	<?php
	$f=0;
	while($datareserve=mysqli_fetch_Array($reserveresult))
	{
		$f=1;
		echo "<tr>";
		echo "<td> $datareserve[0] </td> ";
		echo "<td> $datareserve[1] </td> ";
		echo "<td> $datareserve[2] </td> ";
		echo "<td> $datareserve[3] </td> ";
		echo "<td> $datareserve[4] </td> ";
		
		echo "</tr>";
	}
	?></table><?php
if($f==0)
{
echo "could not find the book";
}
mysqli_close($con);


 
?>





</body>

</html>