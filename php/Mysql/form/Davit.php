<?php

$server = '127.0.0.1';
$username="root";
$password="root";
$dbname="insert";

$conn = mysqli_connect($server,$username,$password,$dbname );
if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['email'])){
$name = $_POST['name'] ;
$email= $_POST['email'] ;
$query ="insert into form (name,email) values('$name' , '$email')";
$run = mysqli_query($conn,$query) or die(mysqli_error());
if($run){
    echo "Form submitted successfully";
}
 else{
     echo "Form not submitted";
     }
        }
else{
    echo "All fields required";
}
    }