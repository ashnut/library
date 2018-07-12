<?php
    session_start();

    if(!isset($_SESSION['uid']))
            {
                    header("location: index.php");
            }

    $uid = $_SESSION["uid"];
	if(isset($_SESSION['insert_success']))
	{
		if($_SESSION['insert_success']==1)
			$cs = " Book Added Successfully !";
		else
			$cs = " Book Already Exist !";
		
		unset($_SESSION['insert_success']);
	}

	else
	{
		$cs="";
	}
?>

<html>
	
<head>

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="bootstrap/js/jquery-1.12.2.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap/css/datepicker.css">
	<!-- Date Picker-->
	<script src="bootstrap/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript">
		// When the document is ready
		$(document).ready(function () {

			$('#txtdatepicker').datepicker({
				format: "yyyy/mm/dd"
			});

		});
		</script>
		<title> Add Book </title>
</head>
		
<body>

    <nav class="navbar navbar-inverse">
	
		<div class="container-fluid">
		
			
			<div class="navbar-header">
				<a hre="#" class="navbar-brand" /> ABS LIBRARY MANAGEMENT SYSTEM </a>
			</div>
			
			<!-- Menu  Left -->
        <div>
            <ul class="nav navbar-nav">
                <li  > <a href="home.php"> Home </a> </li>
                <li class="active" > <a href="create.php">Add Book</a> </li>
               
                <li > <a href="delete.php"> Delete Book </a> </li>
                <li > <a href="search.php"> Search Book</a> </li>

            </ul>


            <!-- Menu  right -->
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
         
		<div class="col-xs-4" style="background-color:white ">

			<form method="post" action="php/create.php"  >
			
			<table class="table table-hover"  width="100%" >

				<tr>

					<th colspan="3" > <h2 align="center"> Enter Book Details </h2> </th>
				</tr>

				<tr>
					<td> <input type="text" name="bookname"  class="form-control" placeholder="Book Title" required /> </td></tr>
					<tr><td> <input type="text" name="authid" class="form-control" placeholder="Author ID" required/> </td></tr>
					
				</tr>

				<tr>
					<td> <input type="number" maxlength="10" name="libid" class="form-control" placeholder="Library Id" required/>  </td>
					
				</tr>

				<tr>
					<td> <input type="number" name="isbn" class="form-control" placeholder="Book ISBN" required /> </td>
					
					
				</tr>

				<tr>
					<td> <input type="text" name="publisher" class="form-control" placeholder="Publisher" required/> </td></tr>
					<tr><td><input type="text" name="pubdate" class="form-control" placeholder="Publication Date" id="txtdatepicker" required/></td>
					
				</tr>

				

				

				<tr>
					
					<td> <br/> <input type="submit" style="align-center" class="btn btn-primary btn-lg" value="Save"/></td>
					
				</tr>

			</table>
			</form>
			
			<br/><br/>
			<h3 align="center" class="text-success"><?php echo $cs ?> </h3>
			
		</div>
         
		<div class="col-xs-4" >
			
		</div>
       
    </div>
     
    </div>
 
   
</body>
	
</html>