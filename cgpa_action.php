<?php
 $connect = mysqli_connect("localhost", "root", "", "cgpamanager");
 $number = count($_POST["semisterName"]);
 if($number > 0)
 {
      for($i=0; $i<$number; $i++)
      {
           if(trim($_POST["semisterName"][$i] != ''))
           {
                //$sql = "INSERT INTO cgpa(seminterName, courseId, 	courseGrade, courseCredit) VALUES('".mysqli_real_escape_string($connect, $_POST["semisterName"][$i], $_POST["courseId"][$i], $_POST["courseGrade"][$i], $_POST["courseCredit"][$i])."')";
                //mysqli_query($connect, $sql);

                $sName = $_POST["semisterName"][$i];
                $cId = $_POST["courseId"][$i];
                $cGrade = $_POST["courseGrade"][$i];
                $cCredit = $_POST["courseCredit"][$i];

                // Create connection
                $conn = new mysqli("localhost", "root", "", "cgpamanager");
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "INSERT INTO cgpa (seminterName, courseId, 	courseGrade, courseCredit) VALUES ('$sName','$cId','$cGrade','$cCredit')";

                if ($conn->query($sql) === TRUE) {
                    echo "New Course added successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();
           }
      }
      echo "";
 }
 else
 {
      echo "Please Enter Name";
 }
 ?>
