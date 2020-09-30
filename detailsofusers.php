<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<scri pt src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">



	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
	<title>Details</title>




</head>
<body>
	<nav class="navbar navbar-dark navbar-expand-sm bg-primary fixed-top">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
             <a class="navbar-brand mr-auto" href="#"><img src="sparks.png" height="30" width="41" class="img-thumbnail"></a>
              <div class="collapse navbar-collapse" id="Navbar">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item  mr-auto">
							<a class="nav-link" href="index.html">Home</a>
						</li>
						<li class="nav-item active mr-auto">
							<a class="nav-link" href="detailsofusers.php">Users</a>
						</li>
						<li class="nav-item  mr-auto">
							<a class="nav-link" href="register.php">New user</a>
						</li>
						<li class="nav-item  mr-auto">
							<a class="nav-link" href="crediting.php">Transfer your credits here</a>
						</li>
						<li class="nav-item mr-auto">
							<a class="nav-link" href="transactiondetails.php">View transactions</a>
						</li>
					</ul>
				</div>
		</div>
	</nav>
	<br><br><br>

	<h1 align="center"  style="color: orange; text-align: center; "><b><i>Viewing all users</i></b></h1>
	<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-10">
		

	<table class="table table-bordered table-hover table-responsive-sm">
		<thead class="bg-info">
		<tr>
			<th>First name</th>
			
			<th>Email</th>
			<th>credits</th>
			
		</tr>
		</thead>
		<?php  
		$servername="localhost";
	$username="root";
	$password="";
	$dbname="usercredentials";
		$conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn)
			die("connection failed".mysqli_connect_error());
		else
		{
			$sql="SELECT fname,email,creditsvalue from user_details";
			$res=$conn->query($sql);
			if ($res -> num_rows > 0 ) {
				while ($row=$res-> fetch_assoc()) {
					if ($row['fname']!=null)
					{
					echo "<tr><td>".$row['fname']."</td><td>".$row['email']."</td><td>".$row['creditsvalue']."</td></tr>";
						
					}
				}
				echo "</table>";
			}
			else {

				echo "no rows to print";	
			}


		}


		?>
		<br><br><br><br>
	<footer class="row-footer bg-dark fixed-bottom">
		<div class="bg-primary">
			<div class="container">
				<div class="row py-4 d-flex align-items-center">
					<div class="col-md-12 text-center col-auto">
						
						<a href="#"><i class="fab fa-linkedin-in text-white mr-4"></i></a>
						<a href="#"><i class="fab fa-instagram text-white mr-4"></i></a>
						<a href="https://www.google.com"><i class="fab fa-google"></i></a>
						&nbsp &copy Copyright 2020 &nbsp Harshit Saxena
					</div>
					
				</div>
				 
			</div>
			
		</div>
		
	</footer>

	<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


</body>
</html>