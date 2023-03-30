<?php  require('config/configdata.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Inscription</title>
</head>
<body>
    <br><br>
    <form class="container" method="post">
        
    <?php 
            if (isset($msgErreur)){
                echo '<p>'.$msgErreur.'</p>';
            }

        ?>

        <div class="mb-3">
            <label class="form-label">Pseudo</label>
            <input type="text" class="form-control" name="pseudo">
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="mb-3">
            <label class="form-label">mot de passe</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="valider">S'inscrire</button>
    </form>
</body>
</html>
<!--
<!DOCTYPE html>
<html>
<head>
	<title>Créer un compte utilisateur</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<h1>Créer un compte utilisateur</h1>
	<form action="" method="post">

       
		<label for="nom">Nom :</label>
		<input type="text" id="nom" name="nom" required><br><br>
		<label for="email">Adresse e-mail :</label>
		<input type="email" id="email" name="email" required><br><br>
		<label for="password">Mot de passe :</label>
		<input type="password" id="password" name="password" required><br><br> -->
	<!--	<label for="confirm_password">Confirmation de mot de passe :</label>
		<input type="password" id="confirm_password" name="confirm_password" required><br><br> -->
	<!-- <button type="submit" class="btn btn-primary" name="valider">S'inscrire</button> -->
        
   <!--     <input type="submit" value="Créer un compte" name="valider">
	</form>
   

</body>

</html> 
        -->