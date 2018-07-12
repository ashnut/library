<?php
    session_start();

    if(!isset($_SESSION['uid']))
            {
                    header("location: index.php");
            }
			
	if(isset($_SESSION['delete_success']))
	{
		$del_msg=$_SESSION['delete_success'];
		unset($_SESSION['delete_success']);
	}
	else
		$del_msg="";

    $uid = $_SESSION["uid"];
?>
<html>

<head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<title> Delete Book</title>
</head>

<body>

<nav class="navbar navbar-inverse">

	<div class="container-fluid">

		
		<div class="navbar-header">
			<a hre="#" class="navbar-brand" /> ABS LIBRARY MANAGEMENT SYSTEM </a>
		</div>

		<!-- Menu Left -->
        <div>
            <ul class="nav navbar-nav">
                <li > <a href="home.php"> Home </a> </li>
                <li  > <a href="create.php"> Add Book </a> </li>

                <li class="active"> <a href="delete.php"> Delete Book</a> </li>
                <li > <a href="search.php"> Search Book</a> </li>
				<li > <a href="admindisplay.php"> Display All Books</a> </li>
				

            </ul>


            <!-- Menu right -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?php echo $uid ; ?> <span class="caret"></span></a>
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

		<div class="col-xs-4" style="background-color:white">
			<h1 align="center"> Delete Book </h1> <br/><br/>
			<form method="post" action="php/delete.php" >

				<div class="input-group">

					<input type="text" class="form-control" required name="delete" placeholder="Enter BookId to Delete">
    	  			<span class="input-group-btn">
						<button class="btn btn-danger" type="submit">Delete</button>
      				</span>
					  
					  
				</div>
			</form>
			
			<br/><br/>
					  <h3 class="text-success" align="center"> <?php echo $del_msg ?> </h3>
			
		</div>

		<div class="col-xs-4" >

		</div>

	</div>

</div>


</body>

</html>