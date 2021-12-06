<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=connexionadmin;','root');
if (!$_SESSION['psw']) {
    header('Location: connexion.php');
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Afficher les membres</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php 
    $recupUsers = $bdd->query('SELECT * FROM admin');
    while($user = $recupUsers->fetch()){
         ?>
         <p><?= $user['login']; ?> <a href="bannir.php?id=<?= $user['id']; ?>" style="color:red; text-decoration: none;"> Bannir le membre</a></p>
        <?php
    }
  ?>
</body>
</html>
