<?php

$con =mysqli_connect("localhost","root","","login");

$name =$_POST['name'];
$email =$_POST['email'];
$pass =$_POST['pass'];

$sql="INSERT INTO `user`(`id`, `name`, `email`, `password`) VALUES (NULL,'$name','$email','$pass')";

$query=mysqli_query($con,$sql);

if ($query){
    //code..
    //procède à l'enregistrement dans la base de donnée
    echo "Enregistré";
    header("location:login.php?reg=1");
}else {
    echo "Problème dans le processus";
}







?>