<?php
    session_start();

    if(!isset($_POST['btn']))
            {
                    header("location: home.php");
            }
	$var = $_POST['btn'];
	$_SESSION['btn']=$var;
	$uid = $_SESSION['uid'];
	
	require_once("php/connect.php");
	
	
	$res = mysqli_query($con," select * from book where bookid='$var' ") or die("Screwed"+mysqli_error($con));
	
	$data = mysqli_fetch_row($res);
	//$up_data = $data[0] . ":" . $data[1] . ":" . $data[2] . ":" . $data[3] . ":" . $data[4];
	//$_SESSION['up_data']=$up_data;
	//header("location:update.php");
	mysqli_close($con);

?>
<html>
	
<head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
		
		<title> Update Book </title>
</head>
		
<body>

<nav class="navbar navbar-inverse">

	<div class="container-fluid">

		<!-- Logo -->
		<div class="navbar-header">
			<a hre="#" class="navbar-brand" /> ABS Library Management System </a>
		</div>

		<!-- Menu on Left -->
        <div>
            <ul class="nav navbar-nav">
                <li > <a href="home.php"> Home </a> </li>
                <li  > <a href="create.php"> Add Book </a> </li>
                <li class="active"> <a href="update.php"> Modify Book </a> </li>
                <li > <a href="delete.php"> Delete Book</a> </li>
                <li > <a href="search.php"> Search Book</a> </li>

            </ul>


            <!-- Menu on the right -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo "admin" ; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="php/logout.php">Log-Out</a></li>

                    </ul>
                </li>

            </ul>


        </div>

	</div>

</nav>
   
   <div class="container-fluid">
         
    <div class="row">
       
		<div class="col-xs-4" >
			
		</div>
         
		<div class="col-xs-4" style="background-color:white ">

			<form method="post" action="php/update.php">

				<table class="table table-hover"  width="100%">

					<tr>

						<th colspan="2" > <h2 align="center"> Modify Book Details </h2> </th>
					</tr>

					<tr>
					<td><label for="bookid">Book Id</label></td>
						<td> <input type="text" name="bookid"  data-toggle="tooltip" title="bookid" value="<?php echo htmlentities($data[0])?>" class="form-control" placeholder="First Name" /> </td></tr>
						
				<tr>	<td><label for="title">Book Title Id</label></td>
				
				
				<td> <input type="text" name="title" data-toggle="tooltip" title="title"value="<?php echo htmlentities($data[1])?>" class="form-control" placeholder="Last Name" /> </td>
						
					</tr>

					<tr>
					<td><label for="authid">Author Id</label></td>
						
						<td> <input type="text" name="authid" data-toggle="tooltip" title="authid" value="<?php echo htmlentities($data[2])?>" class="form-control" placeholder="Mobile Number" />  </td>
						
					</tr>

					<tr>
						<td><label for="libid">Library Id</label></td>
				
						<td> <input type="text" name="libid" data-toggle="tooltip" title="libid" value="<?php echo htmlentities($data[3])?>" class="form-control" placeholder="Landline Number" /> </td>
						
					</tr>

					<tr>
						<td><label for="bookisbn">Book ISBN</label></td>
				
						<td> <input type="text" name="isbn" data-toggle="tooltip" title="isbn" value="<?php echo htmlentities($data[4])?>" class="form-control" placeholder="Email Address" /> </td>
						
					</tr>

					<tr>
						<td><label for="publisher">Publisher</label></td>
				
						<td> <input type="text" name="publisher" data-toggle="tooltip" title="publisher" value="<?php echo htmlentities($data[5])?>" class="form-control" placeholder="Email Address" /> </td>
						<td></td>
						<td></td>
					</tr>




					<tr>
						<td></td>
						<td> <br/> <input type="submit" class="btn btn-primary" value="Update"/></td>
						<td></td>
					</tr>

				</table>
			</form>
			
		</div>
         
		<div class="col-xs-4" >
			
		</div>
       
    </div>
     
    </div>
 
   
</body>
	
</html>