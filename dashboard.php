<?php
session_start();

if (isset($_SESSION['userID'])){
?>    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="page" >
        <h1>Bienvenue, Mrs/M <?php echo $_SESSION['userNAME'];
        ?>
        </h1>
        <p>Aucun message reçu ou information pour l'instant !!</p><br>
        <p>Cliquez ici pour vous déconnecter--> <a href="logout.php">Déconnexion</a> </p>
        
    </div>
</body>
</html>

<?php

}else{
    header("location:login.php");
}

?>