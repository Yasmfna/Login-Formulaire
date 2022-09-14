<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-formulaire</title>
    <link rel="stylesheet" href="style02.css">
</head>
<body>
    <div class="face">
        <h1>Formulaire d'inscription</h1>
        <form action="submit.php" method="post">
            <p>Nom</p>
            <input type="text" name="name" placeholder="Nom" id="">
            <p>Email</p>
            <input type="email" name="email" placeholder="Entrer votre email" id="">
            <p>Mot de passe</p>
            <input type="password" name="pass" placeholder="Creer un mot de passe" id="">
            <input type="submit" name="submit" value="Connectez-vous" >
        </form>
        <p>Déjà enregistré ? alors <a href="login.php">Cliquez ici</a></p>
        
    </div>
</body>
</html>