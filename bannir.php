<?php 
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=connexionadmin;', 'root','');
if (isset($_GET['id']) AND !empty($_GET['id'])) {
$getid = $_GET['id'];
   $recupUser = $bdd->prepare('SELECT * FROM admin  WHERE id = ?');
   $recupUser->execute(array($getid));
   if($recupUser->rowCount()> 0){

       $bannirUser = $bdd->prepare('DELETE FROM admin WHERE  id = ?');
       $bannirUser->execute(array($getid));
       header('Location: membres.php');
    }else{
        echo "aucun membre n'a été trouvé !";
    }
}else{
    echo "L'identifiant n'a pas été récupére";
}
?>