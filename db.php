<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'std';

try{
$conn= new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
$conn-> setAttrIbute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
 echo 'ERORR :' ,$e->$getmessage();   
}
include_once 'student.php';
$student = new studentDB($conn);

?>

