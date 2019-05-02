<?php
session_start();
 $number = count($_POST["courseId"]);
 $cGrade = 0;
 $cCredit = 0;
 $totalGradePoint = 0;
 $gpa = 0;

 if($number > 0)
 {
      for($i=0; $i<$number; $i++)
      {
           if(trim($_POST["courseId"][$i] != ''))
           {
              //  $_POST["courseId"][$i];
              $cGrade =  $cGrade + $_POST["courseGrade"][$i];
              $cCredit = $cCredit + $_POST["courseCredit"][$i];
              $totalGradePoint = $totalGradePoint +  $_POST["courseGrade"][$i] * $_POST["courseCredit"][$i];
           }
           
      }

      $gpa = $totalGradePoint/$cCredit;

      $_SESSION["tCredit"] = $cCredit;
      $_SESSION["tGradePoint"] = $totalGradePoint;
      $_SESSION["gpa"] = $gpa;
      //echo $gpa;
 }
 else
 {
      echo "Please Enter course Id";
 }

 ?>
