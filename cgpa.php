<?php
session_start();

$servername="localhost";
    $username="root";
      $password="";
        $dbname="cgpamanager";


      //$email = $_SESSION['email'];
      //$passw = $_SESSION['pass'];
            ///////////////////for forget password

// Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
     if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
}
    $sql = "SELECT * FROM cgpa";
    //$sql = "SELECT * FROM admin where email='$email' and pass='$pass'";

if ($result = $conn->query($sql)) {
    // output data of each row
$row = $result->fetch_assoc();

      //if($row["email"]==$email && $row["pass"]==$passw){
        //----------fetch data from table for profile show-----------------------------------------------


				$semisterName = $row["semisterName"];
				$courseId = $row["courseId"];
				$courseGrade = $row["courseGrade"];
				$courseCredit = $row["courseCredit"];

}
  else {


    echo "0 results";
}

$conn->close();
?>


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
	      <a class="nav-link" href="index.php">Home</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">About</a>
	    </li>
	  </ul>
	</nav>





	<div id="section-1">
		<div class="container">
           <div class="container">
                <br />
                <br />
                <h2 align="center" style="text-shadow: 6px 6px 6px gray;">Enter Your Subjects and Grade then Calculate Your GPA.</h2>
                <div class="form-group">
                     <form name="add_name" id="add_name">
                          <div class="table-responsive">
                               <table class="table table-bordered" id="dynamic_field">
                                    <tr>
                                         <td class="form-inline"><input type="text" name="semisterName[]" placeholder="Enter Semister Name " class="form-control name_list" />
																				 <input type="text" name="courseId[]" placeholder="Enter your Course Id " class="form-control name_list" />

																				 <label for="exampleFormControlSelect1">Course Grade </label>
																				 <select name="courseGrade[]" placeholder="Enter course Grade " class="form-control name_list">
																					 <option>4.0</option>
																					 <option>3.7</option>
																					 <option>3.3</option>
																					 <option>3.0</option>
																					 <option>2.7</option>
																					 <option>2.3</option>
																					 <option>2.0</option>
																					 <option>1.7</option>
																					 <option>1.3</option>
																					 <option>1.0</option>
																					 <option>0</option>
																				 </select><label for="exampleFormControlSelect1">Course Credit </label>
																				 <select name="courseCredit[]" placeholder="Enter course Credit " class="form-control name_list">
																					 <option>1</option>
																					 <option>2</option>
																					 <option>3</option>
																					 <option>4</option>
																					 <option>5</option>
																				 </select>


																			 </td>





                                         <td><button type="button" name="add" id="add" class="btn btn-success"><i class="fas fa-plus-circle"></i> Add More</button></td>
                                    </tr>
                               </table>
                               <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                          </div>
                     </form>
                </div>
           </div>

					 <div class="row">
		 				<div class="col section-1 section-description wow fadeIn">
		 					<h2><center>See Transcript</center></h2>

		 				</div>

		 			</div>
		 			<div style="text-align: center;">


						<div id="accordion">

						  <div class="card">
						    <div class="card-header">
						      <a class="card-link" style="text-shadow: 6px 6px 6px gray;" data-toggle="collapse" href="#collapseOne">
						        Click here to see Records
						      </a>
						    </div>
						    <div id="collapseOne" class="collapse show" data-parent="#accordion">
						      <div class="card-body">
						<!-- data show in table -->
							<?php
								echo '<table id="r" class="table table-striped">
								 <thead>
								<tr>
										<th>Semister Name</th>
										<th>CourseId</th>
										<th>Course Grade</th>
										<th>Course Credit</th>
									</tr>
								</thead>';

								$cGrade =  0;
								$cCredit = 0;
								$totalGradePoint = 0;
								$gpa = 0;



								do {
								echo "<tbody>";
								echo "<tr>";
								echo "<td>" . $row["seminterName"] . "</td>";
								echo "<td>" . $row["courseId"] . "</td>";
								echo "<td>" . $row["courseGrade"] . "</td>";
								echo "<td>" . $row["courseCredit"] . "</td>";
								//echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><i class='fas fa-trash-alt' style='font-size:20px;color:red'></i></a></td>";
								echo "</tr>";
								echo "</tbody>";

								$cGrade =  $cGrade + $row["courseGrade"];
	              $cCredit = $cCredit + $row["courseCredit"];
	              $totalGradePoint = $totalGradePoint +  $row["courseGrade"] * $row["courseCredit"];
							}while($row = mysqli_fetch_assoc($result));
								echo "</table>";

								$gpa = $totalGradePoint/$cCredit;

							 ?>
						<!--</table> -->
						      </div>
						    </div>
						  </div>



						  <div class="card">
						    <div class="card-header">
						      <a class="collapsed card-link " style="text-shadow: 6px 6px 6px gray;" data-toggle="collapse" href="#collapseThree">
						        Click Here to see Result Details
						      </a>
						    </div>
						    <div id="collapseThree" class="collapse" data-parent="#accordion">
						      <div class="card-body">
										<div id="r" class="container">
											<h2 style="text-shadow: 6px 6px 6px gray;" align="center">Your Result</h2>
										 <h3>Total credit Earned: <?php echo $cCredit;?></h3>
										 <h3>Total Grade Point: <?php echo $totalGradePoint; ?></h3>
										 <h3>CGPA: <?php echo $gpa; ?> </h3>

										</div>
						      </div>
						    </div>
						  </div>

						</div>


			</div>
		</div>
	</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


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
           $('#dynamic_field').append('<tr id="row'+i+'"><td class="form-inline"><input type="text" name="semisterName[]" placeholder="Enter Semister Name " class="form-control name_list" /><input type="text" name="courseId[]" placeholder="Enter Course Id" class="form-control name_list"  /> <label for="exampleFormControlSelect1">Course Grade </label> <select name="courseGrade[]" placeholder="Enter course Grade " class="form-control name_list"> <option>4.0</option> <option>3.7</option> <option>3.3</option> <option>3.0</option> <option>2.7</option> <option>2.3</option> <option>2.0</option> <option>1.7</option> <option>1.3</option> <option>1.0</option> <option>0</option> </select><label for="exampleFormControlSelect1">Course Credit </label> <select name="courseCredit[]" placeholder="Enter course Credit " class="form-control name_list"> <option>1</option> <option>2</option> <option>3</option> <option>4</option> <option>5</option> </select> </td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove"><i class="fas fa-trash-alt"></i></button></td></tr>');


      });
      $(document).on('click', '.btn_remove', function(){
           var button_id = $(this).attr("id");
           $('#row'+button_id+'').remove();
      });
      $('#submit').click(function(){
           $.ajax({
                url:"cgpa_action.php",
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

 <!--auto refresh result -->
 <script type="text/javascript">
 var auto_refresh = setInterval(
 function () {
     $('#r').load(' #r');
 }, 1000);
 </script>

 <script src="js/wow.min.js"></script>
	 <script>
	 new WOW().init();
	 </script>
</html>
