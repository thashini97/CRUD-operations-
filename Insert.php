<?php
 
 $host = 'localhost';
 $root = 'root';
 $password = 'password';
 $database = 'mobile_computing';
 
// Create connection
$connect = mysqli_connect($host, $root, $password, $database);
$Index=  $_POST['indexNo'];
$First = $_POST['fName'];
$Last = $_POST['lName'];
$GPA = $_POST['gpa'];

$sql = "INSERT INTO `student` (`IndexNumber`, `FirstName`, `LastName`, `GPA`)
    values ('$Index', '$First', '$Last', '$GPA') " ;

$result = mysqli_query($connect,$sql);

if($result){
    echo 'successfully added';

}else{
    echo 'failture in adding';
}

mysqli_close($connect);
?>
