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

		
        <div>
            <ul class="nav navbar-nav">
                <li > <a href="userhome.php"> Home </a> </li>
               
                <li class="active"> <a href="display.php"> Display all books </a> </li>
                
				
				

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




$result = mysqli_query($con," select * from book ") or die("Error " . mysql_error());


?>
<table class="table table-bordered" style="font-family:aerial;font-size:15">
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
		echo "<td height='10'> $data[0] </td> ";
		echo "<td height='10'> $data[1] </td> ";
		echo "<td height='10'> $data[2] </td> ";
		echo "<td height='10'> $data[3] </td> ";
		echo "<td height='10'> $data[4] </td> ";
		echo "<td height='10'> $data[5] </td> ";
		echo "<td height='10'> $data[6] </td> ";
		echo "<td height='10'> <form  method='post' action='reserve.php'> <button class='btn btn-default' name='btn' type='submit' value='".$data[0]."'>Reserve</button> </form></td>";
		echo "<td height='10'> <form  method='post' action=''> <button class='btn btn-default' name='btn' type='submit' value='".$data[0]."'>Borrow</button> </form></td>";
		
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