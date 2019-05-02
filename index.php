<!DOCTYPE html>
<html>
<head>
	<title>CGPA Manager</title>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/main.css" >
    <link rel="stylesheet" href="asset/css/media-queries.css" >
    <link rel="stylesheet" href="fontawesome/css/all.css" >

		<link rel="stylesheet" href="css/woow/animate.css">


</head>
<body>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
	  <a class="navbar-brand" href="index.php"><i class="fab fa-cuttlefish"></i><i class="fab fa-google"></i><i class="fab fa-product-hunt"></i><i class="fab fa-autoprefixer"></i> Manager</a>
	  <ul class="navbar-nav">
	    <li class="nav-item">
	      <a class="nav-link" href="#">Home</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">About</a>
	    </li>
	  </ul>
	</nav>





	<div id="section-1">
		<div class="container">
			<div class="row">
				<div class="col section-1 section-description wow fadeIn">
					<h2 style="text-shadow: 6px 6px 6px gray;"><center>Calculate and Manage Your CGPA</center></h2>

				</div>

			</div>
			<div style="text-align: center;">

				<a class="btn btn-outline-success btn-lg wow slideInLeft" href="gpa.php"><i class="fas fa-calculator"></i> Calculate GPA</a>
				<a class="btn btn-outline-danger btn-lg wow slideInRight" href="cgpa.php"><i class="fas fa-save"></i> Save your CGPA</a>

			</div>
		</div>
	</div>

	<div class="container" >
		<hr style="text-shadow: 6px 6px 6px gray;">
		<center><img class="img-fluid wow slideInDown"  src="img/cgpa.jpg"  alt="cgpa" > </center>

	</div>
<br><br>

<footer style="background-color:#000;">
	<!-- Copyright -->
	<div class="footer-copyright text-center py-3" style="background-color: #0e0f10">© 2019 Copyright:
		<a href="#"> cgpamanager.com</a>
	</div>
	<!-- Copyright -->
</footer>

</body>

<script src="js/wow.min.js"></script>
	<script>
	new WOW().init();
	</script>
</html>
