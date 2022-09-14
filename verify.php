<?php

$con =mysqli_connect("localhost","root","","login");

$email =$_POST['email'];
$pass =$_POST['pass'];

$sql="SELECT * FROM `user` WHERE email='$email' and password='$pass' ";
$query=mysqli_query($con,$sql);


//parcours dans la base de données pour afficher le nom et le mot de passe
//correspondant a l'email et le pasword
if ($query){
    //code..
    if($row= mysqli_fetch_array($query)){
        session_start();
        $_SESSION['userID']=$row['id'];
        $_SESSION['userNAME']=$row['name'];

        header("location:dashboard.php");
    }else{
        echo "Mot de passe ou email incorrect !!!!";
        header("location:login.php");
    }

}


?>