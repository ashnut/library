<?php
    session_start();
    $update_msg="";
    if(!isset($_SESSION['uid']))
            {
                   
					header("location:index.php");
            }
    if(isset($_SESSION['update_success']))
    {
        $update_msg="Book Successfully Updated !";
        unset($_SESSION['update_success']);
    }
    

    $uid = $_SESSION["uid"];
?>

<html>

<head>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/jquery-1.12.2.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <title> ABS Library Management System</title>
</head>

<body>

<?php

				if(isset($_SESSION['success']))
            	{
            					?> <div class="alert alert-success">
                                  <a href="#" class="close" data-dismiss="alert" aria-label="close" hide="true" id="xxx">&times;</a>
                                  <strong text-align="center">Success: User Added Successfully !</strong>
                                </div>
                                <?php
                                session_destroy();
            	}

            ?>
<nav class="navbar navbar-inverse">

    <div class="container-fluid">

        <!-- Logo -->
        <div class="navbar-header">
            <a hre="#" class="navbar-brand" /> ABS LIBRARY MANAGEMENT SYSTEM </a>
        </div>

        <!-- Menu on Left -->
        <div>
            <ul class="nav navbar-nav">
                <li class="active"  > <a href="home.php"> Home </a> </li>
                <li  > <a href="create.php"> Add Book </a> </li>

                <li > <a href="delete.php"> Delete Book </a> </li>
                <li > <a href="search.php"> Search Book</a> </li>
				<li > <a href="adduser.php"> Add User</a> </li>
				

            </ul>


            <!-- Menu on the right -->
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

<div class="container-fluid" style="background-color:WHITE >

    <div class="row" >

        <div class="col-xs-2" >

        </div>

        <div class="col-xs-18" style="background-color:WHITE ">
            
            

            <div class="jumbotron">
                <h1>ABS LIBRARY MANAGEMENT SYSTEM</h1>
                <p></P>

            <br/><br/>
            <h3 align="center" class="text-success"><?php echo $update_msg ; ?></h3>

            

            </div> -->

        </div>

        <div class="col-xs-2" >

        </div>

    </div>

</div>


</body>

</html>