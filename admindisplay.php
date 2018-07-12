<?php

session_start();

require_once("php/connect.php");




$uid = $_SESSION['uid'];
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

		<!-- Menu  Left -->
        <div>
            <ul class="nav navbar-nav">
                <li class="active"> <a href="home.php"> Home </a> </li>
                <li  > <a href="create.php"> Add Book </a> </li>
    
                <li > <a href="delete.php"> Delete  Book</a> </li>
                <li > <a href="search.php"> Search Book </a> </li>
                
				
				

            </ul>


            <!-- Menu  right -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo "admin"; ?><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="php/logout.php">Log-Out</a></li>

                    </ul>
                </li>

            </ul>


        </div>

	</div>

</nav>
<?php




$result = mysqli_query($con," select * from book ") or die("Error " . mysql_error());


?>
<table class="table table-bordered">
	<tr>
		<th> Book ID</th>
		<th> Book Title</th>
		<th> Author ID</th>
		<th> Library ID</th>	
		<th> ISBN </th>
		<th> Publisher </th>
		<th> Publication Date </th>
		
	<tr>
	<?php
	$f=0;
	while($data=mysqli_fetch_Array($result))
	{
		$f=1;
		echo "<tr>";
		echo "<td> $data[0] </td> ";
		echo "<td> $data[1] </td> ";
		echo "<td> $data[2] </td> ";
		echo "<td> $data[3] </td> ";
		echo "<td> $data[4] </td> ";
		echo "<td> $data[5] </td> ";
		echo "<td> $data[6] </td> ";
		echo "<td> <form  method='post' action='update.php'> <button class='btn btn-default' name='btn' type='submit' value='".$data[0]."'>&nbsp;<span class='glyphicon glyphicon-pencil'></span>&nbsp;</button> </form></td>";
		
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