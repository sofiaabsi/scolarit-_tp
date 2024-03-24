<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="boxLogin">

<div class="containerLogo">
    <div class="cercle">
        <img src="" alt="">
    </div>
</div>
<div class="containerInputs">
    <form action="resgister.php" method="post">
        <input type="text" name="login" id="login" required maxlength="16" placeholder="utilisateur">
        <input type="password" name="password" id="password" required maxlength="16" placeholder="mot de passe">
        <button>Inscription</button>
    </form>
    <p class="txtFin">Pas encore inscrit ?
        <a href="register.html">Inscrivez-vous</a>
    </p>
</div>
</div>



</body>
</html>