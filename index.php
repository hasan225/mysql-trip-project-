<?php
$servername="localhost";
$username="root";
$password="";
$database="trip";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("sorry".mysqli_connect_error());
}
// else { echo "okay to go";}

$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];

$sql="INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `password`, `phone`, `desk` ,`dt`) VALUES ('$name', '$age', '$gender', '$email', '$password', '$phone', '$desc',current_timestamp())";

echo $sql;
?>