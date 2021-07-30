<?php

$host = 'localhost';
$root = 'root';
$password = 'password';
$database = 'mobile_computing';

//conncet db
$connect = mysqli_connect($host, $root, $password, $database);
		
$ind=$_POST['indexno']; 
 
//select details using index number
$stmt = "SELECT * FROM student where IndexNumber= '$ind' ";
$result = mysqli_query($connect,$stmt);
   
$row = mysqli_fetch_assoc($result);
$fname=$row['FirstName'];
$lname=$row['LastName'];
$gpa=$row['GPA'];
    
echo "Index Number  ". $ind;
echo ("\r\n");
echo "First Name: ". $fname;
echo ("\r\n");   
echo "Last Name: ". $lname;
echo ("\r\n");
echo "GPA: ". $gpa;  

mysqli_close($connect);		



?>

