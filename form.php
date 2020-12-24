<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email =$_POST['email'];
$mobile_contact =$_POST['mobile_contact'];
$landline_contact= $_POST['landline_contact'];
$address_1 = $_POST['address_1'];
$address_2  = $_POST['address_2'];
$city = $_POST['city'];
$country = $_POST['country'];
$state = $_POST['state'];
$last_job = $_POST['last_job'];
$joining_date = $_POST['joining_date'];
$left_date = $_POST['left_date'];
$experience = $_POST['experience'];
$employee_id = $_POST['employee_id'];
$last_degree = $_POST['last_degree'];
$date_of_birth = $_POST['date_of_birth'];

     $connection = mysqli_connect("localhost","root","","contact_form1");
   echo $query = "INSERT INTO form2(first_name,last_name,email,mobile_contact,landline_contact,address_1,address_2,city,country,state,last_job,joining_date,left_date,experience,employee_id,last_degree,date_of_birth)VALUES('$first_name','$last_name','$email','$mobile_contact','$landline_contact','$address_1','$address_2','$city','$country','$state','$last_job','$joining_date','$left_date','$experience','$employee_id','$last_degree','$date_of_birth')";

   $query = mysqli_query($connection,$query);