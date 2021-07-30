<?php
 
 $host = 'localhost';
 $root = 'root';
 $password = 'password';
 $database = 'mobile_computing';
 
 
// Create connection
$connect = mysqli_connect($host, $root, $password, $database);

$postId   = $_POST['postId'];

$stmt = $connect->prepare("DELETE FROM student where IndexNumber=? ");
$stmt->bind_param("s", $postId);
$stmt->execute();

$result =$stmt->get_result();


$stmt->close();
if(isset($result)){
     echo 'Record Deleted Successfully...';
}else{
     echo 'Can\'t able to delete a details...'; 
}

mysqli_close($connect);
?>