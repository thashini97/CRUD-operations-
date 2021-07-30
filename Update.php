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

//using index number update details
$stmt = $connect->prepare( "UPDATE `student` SET `IndexNumber`='$Index', `FirstName`='$First', `LastName`='$Last', `GPA`='$GPA' 
     where IndexNumber= ? " );
$stmt->bind_param("s", $Index);
$stmt->execute();

$result  = $stmt->get_result();;
 
$stmt->close();
if(isset($result)){
    echo 'successfully Updated...';

}else{
    echo 'failture in updating...';
}


mysqli_close($connect);
?>
