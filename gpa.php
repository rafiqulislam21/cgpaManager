<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>GPA Calculator</title>

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

				<a class="btn btn-outline-success btn-lg disabled wow slideInLeft" href="#"><i class="fas fa-calculator"></i> Calculate GPA</a>
				<a class="btn btn-outline-danger btn-lg wow slideInRight" href="cgpa.php"><i class="fas fa-save"></i> Save your CGPA</a>







           <div class="container">
                <br />
                <br />
                <h2 style="text-shadow: 6px 6px 6px gray;" align="center">Enter Your Subjects and Grade then Calculate Your GPA.</h2>
                <div class="form-group">
                     <form name="add_name" id="add_name">
                          <div class="table-responsive">
                               <table class="table table-bordered" id="dynamic_field">
                                    <tr>
                                         <td class="form-inline"><input type="text" name="courseId[]" placeholder="Enter Course Id " class="form-control name_list" />
                                         <input type="text" name="courseGrade[]" placeholder="Enter course Grade " class="form-control name_list" />
                                         <input type="text" name="courseCredit[]" placeholder="Enter course Credit " class="form-control name_list" /> </td>


                                         <td><button type="button" name="add" id="add" class="btn btn-success"><i class="fas fa-plus-circle"></i> Add More</button></td>
                                    </tr>
                               </table>
                               <input type="button" name="submit" id="submit" class="btn btn-info wow bounceInUp" value="Submit" />
                          </div>
                     </form>
                </div>
           </div>

					 <div id="b" class="container">
						 <h2 style="text-shadow: 6px 6px 6px gray;" align="center">Your Result</h2>
						<h3>Total credit: <?php if(isset($_SESSION["tCredit"])) {
							echo $_SESSION["tCredit"];
						}  ?></h3>
						<h3>Total Grade Point: <?php if(isset($_SESSION["tGradePoint"])) {
							echo $_SESSION["tGradePoint"];
						}  ?></h3>
						<h3>GPA: <?php if(isset($_SESSION["gpa"])) {
							echo $_SESSION["gpa"];
						}  ?> </h3>

					 </div>




			</div>
		</div>
	</div>
<!--        reload auto ajax
	<script type="text/javascript">
	   setTimeout(function(){
	       location.reload();
	   },10000);
	</script>
 auto refreash div ---->
<script type="text/javascript">
var auto_refresh = setInterval(
function () {
    $('#b').load(' #b');
}, 1000);
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


<footer style="background-color:#000;">
	<!-- Copyright -->
	<div class="footer-copyright text-center py-3" style="background-color: #0e0f10">© 2019 Copyright:
		<a href="#"> cgpamanager.com</a>
	</div>
	<!-- Copyright -->
</footer>

</body>

<script>
 $(document).ready(function(){
      var i=1;
      $('#add').click(function(){
           i++;
           $('#dynamic_field').append('<tr id="row'+i+'"><td class="form-inline"><input type="text" name="courseId[]" placeholder="Enter course Id" class="form-control name_list"  /> <input type="text" name="courseGrade[]" placeholder="Enter course Grade " class="form-control name_list" /> <input type="text" name="courseCredit[]" placeholder="Enter course Credit " class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fas fa-trash-alt"></i></button></td></tr>');


      });
      $(document).on('click', '.btn_remove', function(){
           var button_id = $(this).attr("id");
           $('#row'+button_id+'').remove();
      });
      $('#submit').click(function(){
           $.ajax({
                url:"gpa_action.php",
                method:"POST",
                data:$('#add_name').serialize(),
                success:function(data)
                {
                     alert(data);
                     $('#add_name')[0].reset();
                }
           });
      });
 });
 </script>


 <script src="js/wow.min.js"></script>
 	<script>
 	new WOW().init();
 	</script>


</html>
