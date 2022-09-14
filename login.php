<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="face">
        <h1>Formulaire de connexion</h1>
        <form action="verify.php" method="post">
            <p>Email</p>
            <input type="email" name="email" placeholder="Entrer votre email" >
            <p>Mot de passe</p>
            <input type="password" name="pass" placeholder="Creer un mot de passe" >
            <input type="submit" name="submit" value="Connectez-vous">
        </form>
        <p>Pas de compte ? alors <a href="regform.php">Cliquez ici</a></p>
        
    </div>
    <?php
        if (isset($_GET['reg'])){
            if ($_GET['reg']==1){
                echo "<center><srcipt>Enregistrement avec succès, veillez vous connecté maintenant</script></center>" ;
        }

        }
        




?>
</body>
</html>